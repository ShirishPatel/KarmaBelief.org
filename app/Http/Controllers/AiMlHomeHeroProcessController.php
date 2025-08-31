<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AiMlHomeHeroProcessController extends Controller
{
    public function index()
    {
        $record = DB::table('aiml_home_hero_process')->first();
        return view('admin.ai-ml.process', compact('record'));
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'title_tag'       => 'nullable|string|max:255',
            'heading'         => 'nullable|string|max:255',
            'description'     => 'nullable|string',
            'process'         => 'nullable|array',
            'process.*.title' => 'nullable|string|max:255',
            'process.*.value' => 'nullable|string|max:255',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $existing    = DB::table('aiml_home_hero_process')->first();
        $processJson = json_encode(array_filter($request->process ?? []));
        if ($existing) {
            DB::table('aiml_home_hero_process')
                ->where('id', $existing->id)
                ->update([
                    'title_tag'   => $request->title_tag,
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'process'     => $processJson,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),
                ]);
            $message = 'Hero process section updated successfully.';
        } else {
            DB::table('aiml_home_hero_process')->insert([
                'title_tag'   => $request->title_tag,
                'heading'     => $request->heading,
                'description' => $request->description,
                'process'     => $processJson,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'Hero process section created successfully.';
        }

        return back()->with('success', $message);
    }

}
