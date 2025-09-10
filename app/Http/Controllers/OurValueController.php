<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurValueController extends Controller
{
    public function sectionIndex()
    {
        $value    = DB::table('our_values_sections')->first();
        $valueImg = DB::table('our_values')->get();
        return view('admin.our-value-sections.index', compact('value', 'valueImg'));
    }
    public function sectionStore(Request $request)
    {
        $request->validate([
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $existing = DB::table('our_values_sections')->first();

        if ($existing) {
            DB::table('our_values_sections')
                ->where('id', $existing->id)
                ->update([
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),
                ]);
            $message = 'Record updated successfully.';
        } else {
            DB::table('our_values_sections')->insert([
                'heading'     => $request->heading,
                'description' => $request->description,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Record created successfully.';
        }

        return back()->with('success', $message);
    }

    public function create()
    {
        return view('admin.our-value-sections.our-value-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading'     => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $hashedName = $file->hashName();
            $imagePath  = $file->storeAs('our-values', $hashedName, 'public');
        }

        DB::table('our_values')->insert([
            'user_id'     => auth()->id(),
            'heading'     => $request->heading,
            'description' => $request->description,
            'image'       => $imagePath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('our-value-sections.index')->with('success', 'Record saved successfully!');

    }

    public function edit($id)
    {
        $value = DB::table('our_values')->where('id', $id)->first();
        return view('admin.our-value-sections.our-value-edit', compact('value'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'heading'     => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $value = DB::table('our_values')->where('id', $id)->first();

        if (! $value) {
            return redirect()->route('our-value-sections.index')->with('error', 'Record not found.');
        }

        $imagePath = $value->image;

        if ($request->hasFile('image')) {
            if ($imagePath && \Storage::disk('public')->exists($imagePath)) {
                \Storage::disk('public')->delete($imagePath);
            }

            $file       = $request->file('image');
            $hashedName = $file->hashName();
            $imagePath  = $file->storeAs('our-values', $hashedName, 'public');
        }

        DB::table('our_values')->where('id', $id)->update([
            'heading'     => $request->heading,
            'description' => $request->description,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);

        return redirect()->route('our-value-sections.index')->with('success', 'Record updated successfully!');
    }
    public function destroy($id)
    {
        $value = DB::table('our_values')->where('id', $id)->first();

        if ($value && $value->image) {
            \Storage::delete('public/' . $value->image);
        }

        DB::table('our_values')->where('id', $id)->delete();

        return redirect()->route('our-value-sections.index')->with('success', 'Record deleted successfully.');
    }

}
