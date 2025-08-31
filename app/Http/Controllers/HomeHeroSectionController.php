<?php
namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeHeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record = DB::table('home_hero_sections')->first();
        return view('admin.home-hero-sections.index', compact('record'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tag_line'    => 'nullable|string|max:255',
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'btn_label_1' => 'nullable|string|max:255',
            'btn_link_1'  => 'nullable|url',
            'btn_label_2' => 'nullable|string|max:255',
            'btn_link_2'  => 'nullable|url',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $hashedName = $file->hashName();
            $imagePath  = $file->storeAs('home-hero-sections', $hashedName, 'public');
        }

        $existing = DB::table('home_hero_sections')->first();

        if ($existing) {
            DB::table('home_hero_sections')
                ->where('id', $existing->id)
                ->update([
                    'tag_line'    => $request->tag_line,
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label_1' => $request->btn_label_1,
                    'btn_link_1'  => $request->btn_link_1,
                    'btn_label_2' => $request->btn_label_2,
                    'btn_link_2'  => $request->btn_link_2,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),
                    'image'       => $imagePath ? $imagePath : $existing->image,
                ]);
            $message = 'Hero section updated successfully.';
        } else {
            DB::table('home_hero_sections')->insert([
                'tag_line'    => $request->tag_line,
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label_1' => $request->btn_label_1,
                'btn_link_1'  => $request->btn_link_1,
                'btn_label_2' => $request->btn_label_2,
                'btn_link_2'  => $request->btn_link_2,
                'image'       => $imagePath,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Hero section created successfully.';
        }

        return back()->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeHeroSection $homeHeroSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeHeroSection $homeHeroSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeHeroSection $homeHeroSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeHeroSection $homeHeroSection)
    {
        //
    }
}
