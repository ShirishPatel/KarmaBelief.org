<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OurProgressController extends Controller
{
    public function index()
    {
        $progress         = DB::table('our_progress')->first();
        $progressSections = DB::table('our_progress_section')->get();
        return view('admin.our-progress.index', compact('progress', 'progressSections'));
    }
    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'heading'     => 'required|string|max:255',
            'description' => 'required|string',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|string',
        ]);

        $existing = DB::table('our_progress')->first();

        if ($existing) {
            DB::table('our_progress')
                ->where('id', $existing->id)
                ->update([
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'updated_at'  => now(),
                ]);

            return redirect()->route('our-progress-section.index')->with('success', 'Progress Updated successfully.');
        } else {
            DB::table('our_progress')->insert([
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);

            return redirect()->route('our-progress-section.index')->with('success', 'Progress created successfully.');
        }
    }

    public function create()
    {
        return view('admin.our-progress.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'heading'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('progress-section', 'public');
        }

        DB::table('our_progress_section')->insert([
            'user_id'     => auth()->id(),
            'image'       => $imagePath,
            'heading'     => $request->heading,
            'description' => $request->description,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('our-progress-section.index')->with('success', 'Progress created successfully.');
    }

    public function edit($id)
    {
        $record = DB::table('our_progress_section')->where('id', $id)->first();
        return view('admin.our-progress.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'heading'     => 'required|string|max:255',
            'description' => 'required',
        ]);

        $record = DB::table('our_progress_section')->where('id', $id)->first();

        $imagePath = $record->image;

        if ($request->hasFile('image')) {
            if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }

            $imagePath = $request->file('image')->store('progress-section', 'public');
        }

        DB::table('our_progress_section')->where('id', $id)->update([
            'heading'     => $request->heading,
            'description' => $request->description,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);

        return redirect()->route('our-progress-section.index')->with('success', 'Progress updated successfully.');
    }

    public function destroy($id)
    {
        $record = DB::table('our_progress_section')->where('id', $id)->first();

        if ($record && $record->image && \Storage::disk('public')->exists($record->image)) {
            \Storage::disk('public')->delete($record->image);
        }

        DB::table('our_progress_section')->where('id', $id)->delete();

        return redirect()->route('our-progress-section.index')->with('success', 'Progress section deleted successfully.');
    }

    public function status($id)
    {
        $record = DB::table('our_progress_section')
            ->where('id', $id)
            ->value('status');

        DB::table('our_progress_section')->where('id', $id)->update([

            'status' => $record == '1' ? '0' : '1',
        ]);
        return back()->with('success', 'Status Updated successfully.');
    }

}
