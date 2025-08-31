<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $records = DB::table('testimonials')->get();
        $value   = DB::table('testimonials_poster')->first();
        return view('admin.testimonials.index', compact('records', 'value'));
    }
    public function create()
    {
        return view('admin.testimonials.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'         => 'required|unique:testimonials,name',
                'avtar'        => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'position'     => 'required',
                'company_name' => 'required',
                'description'  => 'required',
            ],
            [
                'name.required'  => 'Enter testimonial name.',
                'avtar.required' => 'Upload testimonial image.',
            ]
        );

        if ($request->hasFile('avtar')) {
            $file       = $request->file('avtar');
            $hashedName = $file->hashName();
            $avtarPath  = $file->storeAs('testimonials', $hashedName, 'public');
        } else {
            $avtarPath = null;
        }

        DB::table('testimonials')->insert([
            'name'         => $request->name,
            'avtar'        => $avtarPath,
            'position'     => $request->position,
            'company_name' => $request->company_name,
            'description'  => $request->description,
            'user_id'      => Auth::user()->id,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $testimonial = DB::table('testimonials')->where('id', $id)->first();
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    public function update(Request $request, $id)
    {

        $request->validate(
            [
                'name'         => 'required|unique:testimonials,name,' . $id,
                'avtar'        => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
                'position'     => 'required',
                'company_name' => 'required',
                'description'  => 'required',
            ],
            [
                'name.required'  => 'Enter testimonial name.',
                'avtar.required' => 'Upload testimonial image.',
            ]
        );

        $records = DB::table('testimonials')->where('id', $id)->first();

        $avtarPath = $records->avtar;
        if ($request->hasFile('avtar')) {
            if (! empty($records->avtar) && Storage::exists('public/' . $records->avtar)) {
                Storage::delete('public/' . $records->avtar);
            }
            $file      = $request->file('avtar');
            $avtarPath = $file->store('testimonials', 'public');
        }

        DB::table('testimonials')->where('id', $id)->update([
            'name'         => $request->name,
            'avtar'        => $avtarPath,
            'position'     => $request->position,
            'company_name' => $request->company_name,
            'description'  => $request->description,
            'user_id'      => Auth::user()->id,
            'updated_at'   => now(),
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Record updated successfully.');
    }
    public function destroy(Request $request, $id)
    {
        $records = DB::table('testimonials')->where('id', $id)->first();

        if ($records && ! empty($records->avtar)) {
            $avtarPath = 'public/' . $records->avtar;

            if (Storage::exists($avtarPath)) {
                Storage::delete($avtarPath);
            }
        }

        DB::table('testimonials')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('testimonials')->where('id', $id)->first();

        DB::table('testimonials')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function posterstore(Request $request)
    {
        $request->validate([
            'poster_title' => 'nullable|string|max:255',
            'btn_label'    => 'nullable|string|max:255',
            'btn_link'     => 'nullable|string',
        ]);

        $existing = DB::table('testimonials_poster')->first();

        if ($existing) {
            DB::table('testimonials_poster')
                ->where('id', $existing->id)
                ->update([
                    'poster_title' => $request->poster_title,
                    'btn_label'    => $request->btn_label,
                    'btn_link'     => $request->btn_link,
                    'user_id'      => auth()->id(),
                    'updated_at'   => now(),
                ]);
            $message = 'Our Values section updated successfully.';
        } else {
            DB::table('testimonials_poster')->insert([
                'poster_title' => $request->poster_title,
                'btn_label'    => $request->btn_label,
                'btn_link'     => $request->btn_link,
                'user_id'      => auth()->id(),
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
            $message = 'Our Values section created successfully.';
        }

        return back()->with('success', $message);
    }
}
