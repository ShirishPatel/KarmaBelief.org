<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutTechnologieController extends Controller
{
    public function index()
    {
        $record = DB::table('about_technologies')->first();
        return view('admin.about.index', compact('record'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'nullable|string|max:255',
            'tag_line' => 'nullable|string|max:255',
            'btn_label' => 'nullable|string|max:255',
            'btn_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $existing = DB::table('about_technologies')->first();
        $path = null;

        if ($request->hasFile('image')) {
            // if old record has image, delete it
            if ($existing && $existing->image && Storage::disk('public')->exists($existing->image)) {
                Storage::disk('public')->delete($existing->image);
            }

            // upload new image
            $path = $request->file('image')->store('about_technologies', 'public');
        }

        if ($existing) {
            DB::table('about_technologies')
                ->where('id', $existing->id)
                ->update([
                    'heading' => $request->heading,
                    'tag_line' => $request->tag_line,
                    'data' => $request->description,
                    'btn_label' => $request->btn_label,
                    'btn_link' => $request->btn_link,
                    'user_id' => auth()->id(),
                    'updated_at' => now(),
                    'image' => $path ?? $existing->image,
                ]);
            $message = 'About Technologies updated';
        } else {
            DB::table('about_technologies')->insert([
                'heading' => $request->heading,
                'tag_line' => $request->tag_line,
                'data' => $request->description,
                'btn_label' => $request->btn_label,
                'btn_link' => $request->btn_link,
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => $path,
            ]);
            $message = 'About Technologies created';
        }

        return back()->with('success', $message);
    }


}
