<?php
namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeHeroSectionController extends Controller
{

    public function index()
    {
        $record = DB::table('home_hero_sections')->first();
        return view('admin.home-hero-sections.index', compact('record'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_line' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'btn_label_1' => 'nullable|string|max:255',
            'btn_link_1' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $existing = DB::table('home_hero_sections')->first();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $hashedName = $file->hashName();
            $imagePath = $file->storeAs('home_hero_sections', $hashedName, 'public');
        } else {
            $imagePath = $existing->image;
        }

        if ($existing) {
            DB::table('home_hero_sections')
                ->where('id', $existing->id)
                ->update([
                    'tag_line' => $request->tag_line,
                    'heading' => $request->heading,
                    'description' => $request->description,
                    'btn_label_1' => $request->btn_label_1,
                    'btn_link_1' => $request->btn_link_1,
                    'user_id' => auth()->id(),
                    'updated_at' => now(),
                    'image' => $imagePath ? $imagePath : $existing->image,
                ]);
            $message = 'Record updated successfully.';
        } else {
            DB::table('home_hero_sections')->insert([
                'tag_line' => $request->tag_line,
                'heading' => $request->heading,
                'description' => $request->description,
                'btn_label_1' => $request->btn_label_1,
                'btn_link_1' => $request->btn_link_1,
                'image' => $imagePath,
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $message = 'Record created successfully.';
        }

        return back()->with('success', $message);
    }

}
