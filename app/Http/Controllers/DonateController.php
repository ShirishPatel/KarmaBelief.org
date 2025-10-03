<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donors = DB::table('donates')->orderBy('id', 'desc')->get();
        return view('admin.donate.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.donate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('donates', 'public');
        }

        DB::table('donates')->insert([
            'user_id'     => auth()->id(),
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $imagePath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('donate.index')->with('success', 'Donor created successfully!');
    }

    public function edit($id)
    {
        $donor = DB::table('donates')->where('id', $id)->first();
        return view('admin.donate.edit', compact('donor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
        ]);

        $donor     = DB::table('donates')->where('id', $id)->first();
        $imagePath = $donor->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('donates', 'public');
        }

        DB::table('donates')->where('id', $id)->update([
            'name'        => $request->name,
            'description' => $request->description,
            'image'       => $imagePath,
            'updated_at'  => now(),
        ]);

        return redirect()->route('donate.index')->with('success', 'Donor updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('donates')->where('id', $id)->delete();
        return redirect()->route('donate.index')->with('success', 'Donor deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('donates')->where('id', $id)->first();

        DB::table('donates')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
