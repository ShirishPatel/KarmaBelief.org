<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = DB::table('certificates')->orderBy('id', 'desc')->get();
        return view('admin.certificates.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = null;
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('uploads/certificates'), $fileName);
        }

        DB::table('certificates')->insert([
            'user_id'    => auth()->id(),
            'title'      => $request->title,
            'sort_desc'  => $request->sort_desc,
            'file'       => $fileName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('certificates.index')->with('success', 'Certificate created successfully.');
    }

    public function edit($id)
    {
        $record = DB::table('certificates')->where('id', $id)->first();
        return view('admin.certificates.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title'      => $request->title,
            'sort_desc'  => $request->sort_desc,
            'updated_at' => now(),
        ];

        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('uploads/certificates'), $fileName);
            $data['file'] = $fileName;
        }

        DB::table('certificates')->where('id', $id)->update($data);

        return redirect()->route('certificates.index')->with('success', 'Certificate updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('certificates')->where('id', $id)->delete();
        return redirect()->route('certificates.index')->with('success', 'Certificate deleted successfully.');
    }

    public function status($id)
    {
        $record    = DB::table('certificates')->where('id', $id)->first();
        $newStatus = $record->status == '1' ? '0' : '1';

        DB::table('certificates')->where('id', $id)->update(['status' => $newStatus]);

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}
