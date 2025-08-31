<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {
        $value    = DB::table('home_services')->first();
        return view('admin.services.index', compact('value'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'title'   => 'required|string|max:255',
            'disc'    => 'required|string',
        ]);

        $existing = DB::table('home_services')->first();

        if ($existing) {
            DB::table('home_services')
                ->where('id', $existing->id)
                ->update([
                    'heading'    => $request->heading,
                    'title'      => $request->title,
                    'disc'       => $request->disc,
                    'user_id'    => auth()->id(),
                    'updated_at' => now(),
                ]);
            $message = 'Updated Successfully';
        } else {
            DB::table('home_services')->insert([
                'heading'    => $request->heading,
                'title'      => $request->title,
                'disc'       => $request->disc,
                'user_id'    => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $message = 'Inserted Successfully';
        }

        return back()->with('success', $message);
    }

}
