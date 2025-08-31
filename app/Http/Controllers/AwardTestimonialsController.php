<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardTestimonialsController extends Controller
{
    public function index()
    {
        $record = DB::table('award_testimonials')->first();
        return view('admin.award-testimonial.index', compact('record'));
    }

public function store(Request $request)
{
    $request->validate([
        'heading'     => 'nullable|string|max:255',
        'tag_line'    => 'nullable|string|max:255',
        'description' => 'nullable|string|max:255',
        'images.*'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('about-tech', 'public');
            $imagePaths[] = $path;
        }
    }

    // Counter: convert to JSON
    $counterTitles = $request->input('counter_title', []);
    $counterValues = $request->input('counter_value', []);
    $counterArray = [];

    foreach ($counterTitles as $index => $title) {
        $value = $counterValues[$index] ?? '';
        if ($title || $value) {
            $counterArray[] = ['title' => $title, 'value' => $value];
        }
    }

    $counterJson = json_encode($counterArray);
    $imageString = implode(',', $imagePaths);
    $existing = DB::table('award_testimonials')->first();

    if ($existing) {
        DB::table('award_testimonials')
            ->where('id', $existing->id)
            ->update([
                'heading'     => $request->heading,
                'tag_line'    => $request->tag_line,
                'description' => $request->description,
                'counter'     => $counterJson,
                'user_id'     => auth()->id(),
                'updated_at'  => now(),
                'image'       => $imageString ?: $existing->image,
            ]);
        $message = 'Award Testimonial updated successfully.';
    } else {
        DB::table('award_testimonials')->insert([
            'heading'     => $request->heading,
            'tag_line'    => $request->tag_line,
            'description' => $request->description,
            'counter'     => $counterJson,
            'user_id'     => auth()->id(),
            'created_at'  => now(),
            'updated_at'  => now(),
            'image'       => $imageString,
        ]);
        $message = 'Award Testimonial created successfully.';
    }

    return back()->with('success', $message);
}



}
