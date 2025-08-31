<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuccessController extends Controller
{
    public function index()
    {
        $record = DB::table('success')->first();
        return view('admin.success.index', compact('record'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'success_title'    => 'required|string|max:255',
            'success_heading'  => 'required|string|max:255',
            'success_disc'     => 'required|string',
            'btn_label'        => 'nullable|string|max:255',
            'btn_link'         => 'nullable|string|max:255',
            'background_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'poster_image'     => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $existing = DB::table('success')->first();

        $backgroundPath = null;
        $posterPath     = null;

        if ($request->hasFile('background_image')) {
            $backgroundPath = $request->file('background_image')->store('success_section', 'public');
        }

        if ($request->hasFile('poster_image')) {
            $posterPath = $request->file('poster_image')->store('success_section', 'public');
        }

        if ($existing) {
            DB::table('success')
                ->where('id', $existing->id)
                ->update([
                    'success_title'    => $request->success_title,
                    'success_heading'  => $request->success_heading,
                    'success_disc'     => $request->success_disc,
                    'btn_label'        => $request->btn_label,
                    'btn_link'         => $request->btn_link,
                    'background_image' => $backgroundPath ?? $existing->background_image,
                    'poster_image'     => $posterPath ?? $existing->poster_image,
                    'user_id'          => auth()->id(),
                    'updated_at'       => now(),
                ]);

            $message = 'Success section updated.';
        } else {
            DB::table('success')->insert([
                'success_title'    => $request->success_title,
                'success_heading'  => $request->success_heading,
                'success_disc'     => $request->success_disc,
                'btn_label'        => $request->btn_label,
                'btn_link'         => $request->btn_link,
                'background_image' => $backgroundPath,
                'poster_image'     => $posterPath,
                'user_id'          => auth()->id(),
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);

            $message = 'Success section added.';
        }

        return redirect()->route('success.index')->with('success', $message);
    }

}
