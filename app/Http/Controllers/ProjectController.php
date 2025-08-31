<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $records = DB::table('projects')->get();
        return view('admin.projects.index', compact('records'));
    }
    public function create()
    {
        return view('admin.projects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'heading'           => 'required|unique:projects,heading',
            'category_id'       => 'required',
            'tech_id'           => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_display'       => 'nullable|array',
        ]);

        if ($request->hasFile('image')) {
            $file       = $request->file('image');
            $hashedName = $file->hashName();
            $storePath  = $file->storeAs('projects', $hashedName, 'public');
        }
        
        $isDisplay   = json_encode($request->input('is_display', []));

        DB::table('projects')->insert([
            'category_id'       => $request->category_id,
            'tech_id'           => implode(',', $request->tech_id),
            'heading'           => $request->heading,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $storePath,
            'is_display'       => $isDisplay,
            'slug'              => Str::slug($request->heading, '-'),
            'user_id'           => Auth::user()->id,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        return redirect()->route('project.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $record = DB::table('projects')->where('id', $id)->first();
        return view('admin.projects.edit', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'heading'           => 'required|unique:projects,heading,' . $id,
            'category_id'       => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_display'       => 'nullable|array',
        ]);

        $records = DB::table('projects')->where('id', $id)->first();
        $isDisplay   = json_encode($request->input('is_display', []));

        //Existing File Delete
        $storePath = $records->image;
        if ($request->hasFile('image')) {
            if (! empty($records->image) && Storage::exists('public/' . $records->image)) {
                Storage::delete('public/' . $records->image);
            }
            $file      = $request->file('image');
            $storePath = $file->store('projects', 'public');
        }

        DB::table('projects')->where('id', $id)->update([
            'category_id'       => $request->category_id,
            'tech_id' => implode(',', $request->tech_id),
            'heading'           => $request->heading,
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'image'             => $storePath,
            'is_display'       => $isDisplay,
            'slug'              => Str::slug($request->heading, '-'),
            'user_id'           => Auth::user()->id,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        return redirect()->route('project.index')->with('success', 'Record inserted successfully.');
    }
    public function destroy(Request $request, $id)
    {
        $records = DB::table('projects')->where('id', $id)->first();

        //Existing File Deleting
        if ($records && ! empty($records->image)) {
            $getPath = 'public/' . $records->image;

            if (Storage::exists($getPath)) {
                Storage::delete($getPath);
            }
        }

        DB::table('projects')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('projects')->where('id', $id)->first();

        DB::table('projects')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
