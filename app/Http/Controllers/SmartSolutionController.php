<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmartSolutionController extends Controller
{
    public function index()
    {
        $value = DB::table('smart_solutions')->first();
        $valueImg = DB::table('solutions')->get();

        return view('admin.smart-solutions.index', compact('value', 'valueImg'));
    }

    public function smartstore(Request $request)
    {
        $request->validate([
            'solution_heading' => 'required|string|max:255',
            'solution_description' => 'required|string',
        ]);

        $existing = DB::table('smart_solutions')->first();

        if ($existing) {
            DB::table('smart_solutions')
                ->where('id', $existing->id)
                ->update([
                    'solution_heading' => $request->solution_heading,
                    'solution_description' => $request->solution_description,
                    'user_id' => auth()->id(),
                    'updated_at' => now(),
                ]);
            $message = 'Record updated successfully.';
        } else {
            DB::table('smart_solutions')->insert([
                'solution_heading' => $request->solution_heading,
                'solution_description' => $request->solution_description,
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $message = 'Record inserted successfully.';
        }

        return back()->with('success', $message);

    }

    public function create()
    {
        return view('admin.smart-solutions.solution-create');
    }
    public function edit($id)
    {
        $record = DB::table('solutions')->where('id', $id)->first();
        return view('admin.smart-solutions.solution-edit', compact('record'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'smart_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'smart_heading' => 'required|unique:solutions|string|max:255',
            'smart_title' => 'required|string|max:255',
            'btn_label' => 'required|string|max:255',
            'btn_link' => 'required|url|max:255',
            'description' => 'required',
        ], [
            'smart_image.required' => 'Image is required.',
            'smart_heading.required' => 'Heading is required.',
            'smart_heading.unique' => 'Heading already exists.',
            'smart_title.required' => 'Title is required.',
            'btn_label.required' => 'Button Label is required.',
            'btn_link.required' => 'Button Link is required.',
            'description.required' => 'Description is required.',
        ]);

        $imagePath = null;
        if ($request->hasFile('smart_image')) {
            $imagePath = $request->file('smart_image')->store('solutions', 'public');
        }

        DB::table('solutions')->insert([
            'smart_image' => $imagePath,
            'smart_heading' => $request->smart_heading,
            'smart_title' => $request->smart_title,
            'btn_label' => $request->btn_label,
            'btn_link' => $request->btn_link,
            'data' => $request->description,
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('solutions.index')->with('success', 'Record inserted successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'smart_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'smart_heading' => 'required|unique:solutions|string|max:255,id,' . $id,
            'smart_title' => 'required|string|max:255',
            'btn_label' => 'required|string|max:255',
            'btn_link' => 'required|url|max:255',
            'description' => 'required',
        ], [
            'smart_heading.required' => 'Heading is required.',
            'smart_heading.unique' => 'Heading already exists.',
            'smart_title.required' => 'Title is required.',
            'btn_label.required' => 'Button Label is required.',
            'btn_link.required' => 'Button Link is required.',
            'description.required' => 'Description is required.',
        ]);

        $record = DB::table('solutions')->where('id', $id)->first();

        $imagePath = $record->smart_image;
        if ($request->hasFile('smart_image')) {
            $imagePath = $request->file('smart_image')->store('solutions', 'public');
        }

        DB::table('solutions')->where('id', $id)->update([
            'smart_image' => $imagePath,
            'smart_heading' => $request->smart_heading,
            'smart_title' => $request->smart_title,
            'btn_label' => $request->btn_label,
            'btn_link' => $request->btn_link,
            'data' => $request->description,
            'user_id' => auth()->id(),
            'updated_at' => now(),
        ]);

        return redirect()->route('solutions.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        $record = DB::table('solutions')->where('id', $id)->first();

        if ($record && $record->smart_image) {
            \Storage::disk('public')->delete($record->smart_image);
        }

        DB::table('solutions')->where('id', $id)->delete();

        // return redirect()->route('solutions.index')->with('success', 'Smart Solution deleted successfully.');
        $message = 'Smart Solution Deleted successfully.';
        return back()->with('success', $message);
    }

}
