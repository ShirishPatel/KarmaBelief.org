<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CtaButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = DB::table('cta_buttons')->get();
        return view('admin.cta.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading'     => 'required|unique:cta_buttons,heading',
            'btn_label'   => 'required',
            'btn_link'    => 'required|url',
            'description' => 'required',
        ]);

        $isDisplay = json_encode($request->input('is_display', []));

        DB::table('cta_buttons')->insert([
            'heading'     => $request->heading,
            'btn_label'   => $request->btn_label,
            'btn_link'    => $request->btn_link,
            'description' => $request->description,
            'is_display'  => $isDisplay,
            'user_id'     => auth()->user()->id,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('cta.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $records = DB::table('cta_buttons')->where('id', $id)->first();
        return view('admin.cta.edit', compact('records'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'heading'     => 'required|unique:cta_buttons,heading,' . $id,
            'btn_label'   => 'required',
            'btn_link'    => 'required|url',
            'description' => 'required',
        ]);

        $isDisplay = json_encode($request->input('is_display', []));
        DB::table('cta_buttons')
            ->where('id', $id)
            ->update([
                'heading'     => $request->heading,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'description' => $request->description,
                'is_display'  => $isDisplay,
                'updated_at'  => now(),
            ]);

        return redirect()->route('cta.index')->with('success', 'Record updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $records = DB::table('cta_buttons')->where('id', $id)->first();

        //Existing File Deleting
        if ($records && ! empty($records->featured_image)) {
            $featured_image = 'public/' . $records->featured_image;

            if (Storage::exists($featured_image)) {
                Storage::delete($featured_image);
            }
        }

        DB::table('cta_buttons')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('cta_buttons')->where('id', $id)->first();

        // Updating Status
        DB::table('cta_buttons')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

}
