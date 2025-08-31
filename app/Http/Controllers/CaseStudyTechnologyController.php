<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Str;

class CaseStudyTechnologyController extends Controller
{
    public function create()
    {
        return view('admin.case_studies.tech_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:case_study_technologies,name',
        ]);

        DB::table('case_study_technologies')->insert([
            'name'       => $request->name,
            'slug'       => Str::slug($request->name, '-'),
            'user_id'    => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('case-studies.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $tech = DB::table('case_study_technologies')->where('id', $id)->first();
        return view('admin.case_studies.tech_edit', compact('tech'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:case_study_technologies,name,' . $id,
        ]);

        DB::table('case_study_technologies')->where('id', $id)->update([
            'name'       => $request->name,
            'slug'       => Str::slug($request->name, '-'),
            'user_id'    => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('case-studies.index')->with('success', 'Record inserted successfully.');
    }
    public function destroy(Request $request, $id)
    {
        DB::table('case_study_technologies')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $currentStatus = DB::table('case_study_technologies')
            ->where('id', $id)
            ->value('status');

        DB::table('case_study_technologies')
            ->where('id', $id)
            ->update(['status' => $currentStatus == '1' ? '0' : '1']);

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

}
