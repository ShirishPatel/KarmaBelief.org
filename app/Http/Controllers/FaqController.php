<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $faqS = DB::table('faqs')->get();
        return view('admin.faq.index', compact('faqS'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'display'  => 'nullable|string|max:255',
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        DB::table('faqs')->insert([
            'user_id'    =>auth()->id(),
            'display'    => $request->display,
            'question'   => $request->question,
            'answer'     => $request->answer,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = DB::table('faqs')->find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'display'  => 'nullable|string|max:255',
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        DB::table('faqs')->where('id', $id)->update([
            'display'    => $request->display,
            'question'   => $request->question,
            'answer'     => $request->answer,
            'updated_at' => now(),
        ]);

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully.');
    }

    public function status($id)
    {
        $record    = DB::table('faqs')->where('id', $id)->first();
        $newStatus = $record->status ? '0' : '1';

        DB::table('faqs')->where('id', $id)->update([
            'status'     => $newStatus,
            'updated_at' => now(),
        ]);

        return redirect()->route('faq.index')->with('success', 'Status updated successfully.');
    }
}
