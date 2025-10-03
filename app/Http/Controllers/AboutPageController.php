<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = DB::table('about_pages')->get();
        return view('admin.donation-policy.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.donation-policy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'is_display'  => 'required|string', // single-select dropdown
        ]);

        DB::table('about_pages')->insert([
            'title'       => $request->title,
            'description' => $request->description,
            'is_display'  => $request->is_display, // store as string
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('donation-policy.index')
            ->with('success', 'Record inserted successfully.');
    }

    public function edit($id)
    {
        $records = DB::table('about_pages')->where('id', $id)->first();
        return view('admin.donation-policy.edit', compact('records'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'is_display'  => 'nullable|string',
        ]);

        $isDisplay = $request->is_display ? json_encode([$request->is_display]) : null;

        DB::table('about_pages')->where('id', $id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'is_display'  => $isDisplay,
            'updated_at'  => now(),
        ]);

        return redirect()->route('donation-policy.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        DB::table('about_pages')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

    public function status(Request $request, $id)
    {
        $records = DB::table('about_pages')->where('id', $id)->first();

        DB::table('about_pages')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

}
