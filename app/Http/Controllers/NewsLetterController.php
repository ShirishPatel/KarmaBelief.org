<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public function index()
    {
        $records = DB::table('contacts')->orderByDesc('id')->get();
        return view('admin.pages.newsletter', compact('records'));
    }

    public function destroy(Request $request, $id)
    {
        DB::table('contacts')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
   
}
