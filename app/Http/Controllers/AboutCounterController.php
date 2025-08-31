<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutCounterController extends Controller
{
    public function index()
    {
        $records = DB::table('about_us_mission_vission')->first();
        $record = DB::table('about_us_counter_')->first();
        return view('admin.Mission-Vision.index', compact('record','records'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'main_heading'    => 'nullable|string|max:255',
            'counter_title.*' => 'nullable|string|max:255',
            'counter_value.*' => 'nullable|string|max:255',
        ]);

        $counters = [];
        foreach ($request->counter_title as $index => $title) {
            $counters[] = [
                'title' => $title,
                'value' => $request->counter_value[$index],
            ];
        }

        $existing = DB::table('about_us_counter_')->first();

        if ($existing) {
            DB::table('about_us_counter_')
                ->where('id', $existing->id)
                ->update([
                    'main_heading' => $request->main_heading,
                    'counters'     => json_encode($counters),
                    'updated_at'   => now(),
                ]);
            $message = 'About Counter updated';
        } else {
            DB::table('about_us_counter_')->insert([
                'main_heading' => $request->main_heading,
                'counters'     => json_encode($counters),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
            $message = 'About Counter created';
        }

        return back()->with('success', $message);
    }

    public function missionstore(Request $request)
    {

        $request->validate([
            'heading_1'     => 'nullable|string|max:255',
            'heading_2'     => 'nullable|string|max:255',
            'description_1' => 'nullable|string',
            'description_2' => 'nullable|string',
        ]);

        $existing = DB::table('about_us_mission_vission')->first();

        if ($existing) {
            DB::table('about_us_mission_vission')
                ->where('id', $existing->id)
                ->update([
                    'heading_1'     => $request->heading_1,
                    'heading_2'     => $request->heading_2,
                    'description_1' => $request->description_1,
                    'description_2' => $request->description_2,
                    'updated_at'    => now(),
                ]);
            $message = 'About Mission / Vission updated';
        } else {
            DB::table('about_us_mission_vission')->insert([
                'heading_1'     => $request->heading_1,
                'heading_2'     => $request->heading_2,
                'description_1' => $request->description_1,
                'description_2' => $request->description_2,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
            $message = 'About Mission / Vission created';
        }

        return back()->with('success', $message);
    }

}
