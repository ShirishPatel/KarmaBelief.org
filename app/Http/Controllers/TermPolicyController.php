<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TermPolicyController extends Controller
{
    public function index()
    {
        $records = DB::table('terms')->get();
        return view('admin.terms_policies.index', compact('records'));
    }
    public function create()
    {
        return view('admin.terms_policies.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'terms_title' => 'required|unique:terms,terms_title',
            'description' => 'required',
        ]);

        $terms_slug = Str::slug($request->terms_title, '-');

        DB::table('terms')->insert([
            'terms_title' => $request->terms_title,
            'terms_slug' => $terms_slug,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('terms-policy.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $records = DB::table('terms')->where('id', $id)->first();
        return view('admin.terms_policies.edit', compact('records'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'terms_title' => 'required|unique:terms,terms_title,' . $id,
            'description' => 'required',
        ]);

        $records = DB::table('terms')->where('id', $id)->first();
        $terms_slug = Str::slug($request->terms_title, '-');

        DB::table('terms')->where('id', $id)->update([
            'terms_title' => $request->terms_title,
            'terms_slug' => $terms_slug,
            'description' => $request->description,
            'updated_at' => now(),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('terms-policy.index')->with('success', 'Record Updated successfully.');
    }
    public function destroy(Request $request, $id)
    {
        $records = DB::table('terms')->where('id', $id)->first();

        //Existing File Deleting
        if ($records && !empty($records->og_image)) {
            $ogFilePath = 'public/' . $records->og_image;

            if (Storage::exists($ogFilePath)) {
                Storage::delete($ogFilePath);
            }
        }

        // Deleting Record from Database
        DB::table('terms')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

    public function status(Request $request, $id)
    {
        $records = DB::table('terms')->where('id', $id)->first();

        // Updating Status
        DB::table('terms')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
