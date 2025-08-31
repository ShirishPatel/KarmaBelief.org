<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutTechnologieController extends Controller
{
public function index()
    {
        $record = DB::table('about_technologies')->first();
        return view('admin.about.index', compact('record'));
    }

public function store(Request $request)
{
    $dataWithLabels = [];
    if ($request->description && is_array($request->description)) {
        foreach ($request->description as $index => $desc) {
            $dataWithLabels[] = 'Disc-' . ($index + 1) . ': ' . $desc;
        }
    }

    $request->validate([
        'heading'    => 'nullable|string|max:255',
        'tag_line'    => 'nullable|string|max:255',
        'btn_label'  => 'nullable|string|max:255',
        'btn_link'   => 'nullable|url',
        'images.*'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('about-tech', 'public');
            $imagePaths[] = $path;
        }
    }

    $existing = DB::table('about_technologies')->first();

    $imageString = implode(',', $imagePaths); 

    if ($existing) {
        DB::table('about_technologies')
            ->where('id', $existing->id)
            ->update([
                'heading'     => $request->heading,
                'tag_line'    => $request->tag_line,
                'data'        => json_encode($dataWithLabels),
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'user_id'     => auth()->id(),
                'updated_at'  => now(),
                'image'       => $imageString ?: $existing->image, 
            ]);
        $message = 'About Technologies updated';
    } else {
        DB::table('about_technologies')->insert([
            'heading'     => $request->heading,
            'tag_line'    => $request->tag_line,
            'data'        => json_encode($dataWithLabels),
            'btn_label'   => $request->btn_label,
            'btn_link'    => $request->btn_link,
            'user_id'     => auth()->id(),
            'created_at'  => now(),
            'updated_at'  => now(),
            'image'       => $imageString,
        ]);
        $message = 'About Technologies created';
    }

    return back()->with('success', $message);
}


}
