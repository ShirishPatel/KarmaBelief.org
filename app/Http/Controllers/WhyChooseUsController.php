<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhyChooseUsController extends Controller
{
    public function index()
    {
        $value     = DB::table('why_choose_us')->first();
        $listItems = DB::table('why_choose_us_list')->get();
        $btnSettings = DB::table('why_choose_us_list_btn_setting')->first();

        return view('admin.why-choose-us.index', compact('value', 'listItems','btnSettings'));
    }

    public function whystore(Request $request)
    {
        $request->validate([
            'title'       => 'nullable|string|max:255',
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_2'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath  = null;
        $image2Path = null;

        if ($request->hasFile('image')) {
            $file      = $request->file('image');
            $imagePath = $file->storeAs('why_choose_us', $file->hashName(), 'public');
        }

        if ($request->hasFile('image_2')) {
            $file2      = $request->file('image_2');
            $image2Path = $file2->storeAs('why_choose_us', $file2->hashName(), 'public');
        }

        $existing = DB::table('why_choose_us')->first();

        if ($existing) {
            DB::table('why_choose_us')
                ->where('id', $existing->id)
                ->update([
                    'title'       => $request->title,
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'image'       => $imagePath ? $imagePath : $existing->image,
                    'image_2'     => $image2Path ? $image2Path : $existing->image_2,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),
                ]);
            $message = 'Why Choose Us section updated successfully.';
        } else {
            DB::table('why_choose_us')->insert([
                'title'       => $request->title,
                'heading'     => $request->heading,
                'description' => $request->description,
                'image'       => $imagePath,
                'image_2'     => $image2Path,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Why Choose Us section created successfully.';
        }

        return back()->with('success', $message);
    }

    public function create()
    {
        return view('admin.why-choose-us.why-choose-us-list-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'list_image.*'       => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'list_heading.*'     => 'required|string|max:255',
            'list_description.*' => 'required|string',

        ]);

        if ($request->has('list_heading')) {
            foreach ($request->list_heading as $index => $heading) {
                $imagePath = null;

                if ($request->hasFile("list_image.$index")) {
                    $imagePath = $request->file("list_image.$index")->store('why_choose', 'public');
                }

                DB::table('why_choose_us_list')->insert([
                    'user_id'          => auth()->id(),
                    'list_heading'     => $heading,
                    'list_description' => $request->list_description[$index],
                    'list_image'       => $imagePath,
                    'created_at'       => now(),
                    'updated_at'       => now(),
                ]);
            }
        }

        return redirect()->route('why-choose-us-list.index')
            ->with('success', 'Why Choose Us items saved successfully!');
    }

    public function updateButtonData(Request $request)
    {
        $request->validate([
            'btn_label' => 'required|string|max:255',
            'btn_link'  => 'required|url',
        ]);

        $existing = DB::table('why_choose_us_list_btn_setting')->first();

        if ($existing) {
            DB::table('why_choose_us_list_btn_setting')->update([
                'btn_label'  => $request->btn_label,
                'btn_link'   => $request->btn_link,
                'updated_at' => now(),
            ]);
        } else {
            DB::table('why_choose_us_list_btn_setting')->insert([
                'user_id'    => auth()->id(),
                'btn_label'  => $request->btn_label,
                'btn_link'   => $request->btn_link,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return back()->with('success', 'Button details saved successfully.');
    }

    public function edit($id)
    {
        $record = DB::table('why_choose_us_list')->where('id', $id)->first();

        if (! $record) {
            return redirect()->back()->with('error', 'Record not found.');
        }
        return view('admin.why-choose-us.why-choose-us-list-edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'list_heading'     => 'required|string|max:255',
            'list_description' => 'required|string',
            'btn_label'        => 'nullable|string|max:255',
            'btn_link'         => 'nullable|url',
            'list_image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $data = [
            'list_heading'     => $request->list_heading,
            'list_description' => $request->list_description,
            'btn_label'        => $request->btn_label,
            'btn_link'         => $request->btn_link,
            'updated_at'       => now(),
        ];

        if ($request->hasFile('list_image')) {
            $data['list_image'] = $request->file('list_image')->store('why_choose', 'public');
        }

        DB::table('why_choose_us_list')->where('id', $id)->update($data);

        return redirect()->route('why-choose-us-list.index')
            ->with('success', 'Why Choose Us list item updated successfully!');
    }

    public function destroy($id)
    {
        $item = DB::table('why_choose_us_list')->where('id', $id)->first();

        if ($item && $item->list_image) {
            \Storage::delete('public/' . $item->list_image);
        }

        DB::table('why_choose_us_list')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }

}
