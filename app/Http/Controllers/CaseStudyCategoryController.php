<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;
class CaseStudyCategoryController extends Controller
{
    public function index()
    {
        $records = DB::table('case_study_categories')->orderBy('id', 'desc')->get();
        $tech = DB::table('case_study_technologies')->orderBy('id', 'desc')->get();
        return view('admin.case_studies.index', compact('records','tech'));
    }
    public function create()
    {
        return view('admin.case_studies.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|unique:case_study_categories,name',
            'description' => 'required',
        ]);

        DB::table('case_study_categories')->insert([
            'name'        => $request->name,
            'description' => $request->description,
            'slug'        => Str::slug($request->name, '-'),
            'user_id'     => Auth::user()->id,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('case-studies.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $record = DB::table('case_study_categories')->where('id', $id)->first();
        return view('admin.case_studies.edit', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|unique:case_study_categories,name,' . $id,
            'description' => 'required',
        ]);

        DB::table('case_study_categories')->where('id', $id)->update([
            'name'        => $request->name,
            'description' => $request->description,
            'slug'        => Str::slug($request->name, '-'),
            'user_id'     => Auth::user()->id,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('case-studies.index')->with('success', 'Record inserted successfully.');
    }
    public function destroy(Request $request, $id)
    {
        $records = DB::table('case_study_categories')->where('id', $id)->first();

        //Existing File Deleting
        if ($records && ! empty($records->image)) {
            $getPath = 'public/' . $records->image;

            if (Storage::exists($getPath)) {
                Storage::delete($getPath);
            }
        }

        DB::table('case_study_categories')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('case_study_categories')->where('id', $id)->first();

        // Updating Status
        DB::table('case_study_categories')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
