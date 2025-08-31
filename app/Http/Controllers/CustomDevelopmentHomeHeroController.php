<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomDevelopmentHomeHeroController extends Controller
{
    public function index()
    {
        $record = DB::table('c_d_home_hero')->first();
        $value  = DB::table('c_d_home_hero_expertise')->first();
        $services  = DB::table('c_d_home_hero_services')->first();
        return view('admin.c-d-home-hero.index', compact('record', 'value','services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_line'    => 'nullable|string|max:255',
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|url',
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

        $existing = DB::table('c_d_home_hero')->first();

        if ($existing) {
            DB::table('c_d_home_hero')
                ->where('id', $existing->id)
                ->update([
                    'tag_line'    => $request->tag_line,
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),
                    'image'       => $imagePath ? $imagePath : $existing->image,
                ]);
            $message = 'Hero section updated successfully.';
        } else {
            DB::table('c_d_home_hero')->insert([
                'tag_line'    => $request->tag_line,
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'image'       => $imagePath,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Hero section created successfully.';
        }

        return back()->with('success', $message);
    }

    public function expertiseStore(Request $request)
    {
        $request->validate([
            'title_tag'   => 'nullable|string|max:255',
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|url',
            'image1'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'expertise'   => 'nullable|array',
            'expertise.*' => 'nullable|string|max:255',
        ]);

        $image1Path = $image2Path = null;
        if ($request->hasFile('image1')) {
            $image1Path = $request->file('image1')->store('expertise', 'public');
        }
        if ($request->hasFile('image2')) {
            $image2Path = $request->file('image2')->store('expertise', 'public');
        }

        $existing = DB::table('c_d_home_hero_expertise')->first();

        $expertiseJson = json_encode(array_filter($request->expertise ?? []));

        if ($existing) {
            DB::table('c_d_home_hero_expertise')
                ->where('id', $existing->id)
                ->update([
                    'title_tag'   => $request->title_tag,
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'expertise'   => $expertiseJson,
                    'image1'      => $image1Path ?: $existing->image1,
                    'image2'      => $image2Path ?: $existing->image2,
                    'updated_at'  => now(),
                    'user_id'     => auth()->id(),
                ]);
            $message = 'Expertise section updated.';
        } else {
            DB::table('c_d_home_hero_expertise')->insert([
                'title_tag'   => $request->title_tag,
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'expertise'   => $expertiseJson,
                'image1'      => $image1Path,
                'image2'      => $image2Path,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Expertise section created.';
        }

        return back()->with('success', $message);
    }

    public function servicesStore(Request $request)
    {
        $request->validate([
            'title_tag'        => 'nullable|string|max:255',
            'heading'          => 'nullable|string|max:255',
            'description'      => 'nullable|string',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'services'         => 'nullable|array',
            'services.*.title' => 'nullable|string|max:255',
            'services.*.value' => 'nullable|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $hashedName = $file->hashName();
            $imagePath  = $file->storeAs('home-hero-services', $hashedName, 'public');
        }

        $existing = DB::table('c_d_home_hero_services')->first();

        $data = [
            'title_tag'   => $request->title_tag,
            'heading'     => $request->heading,
            'description' => $request->description,
            'user_id'     => auth()->id(),
            'updated_at'  => now(),
        ];

        if ($request->has('services')) {
            $data['services'] = json_encode($request->services);
        }

        if ($imagePath) {
            $data['image'] = $imagePath;
        } elseif ($existing) {
            $data['image'] = $existing->image;
        }

        if ($existing) {
            DB::table('c_d_home_hero_services')->where('id', $existing->id)->update($data);
            $message = 'Hero section services updated successfully.';
        } else {
            $data['created_at'] = now();
            DB::table('c_d_home_hero_services')->insert($data);
            $message = 'Hero section services created successfully.';
        }

        return back()->with('success', $message);
    }

}
