<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutInquiryController extends Controller
{
    public function index()
    {
        $record      = DB::table('about_inquiry')->first();
        $development = DB::table('c_d_inquiry')->first();
        $dynamic     = DB::table('dynamic_inquiry')->first();
        return view('admin.about-inquiry.index', compact('record','development','dynamic'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|url',
        ]);

        $existing = DB::table('about_inquiry')->first();

        if ($existing) {
            DB::table('about_inquiry')
                ->where('id', $existing->id)
                ->update([
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),

                ]);
            $message = 'About Inquiry updated';
        } else {
            DB::table('about_inquiry')->insert([
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'About Inquiry created';
        }

        return back()->with('success', $message);
    }

     public function c_d_store(Request $request)
    {

        $request->validate([
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|url',
        ]);

        $existing = DB::table('c_d_inquiry')->first();

        if ($existing) {
            DB::table('c_d_inquiry')
                ->where('id', $existing->id)
                ->update([
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),

                ]);
            $message = 'About Inquiry updated';
        } else {
            DB::table('c_d_inquiry')->insert([
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'About Inquiry created';
        }

        return back()->with('success', $message);
    }

     public function dynamicsStore(Request $request)
    {

        $request->validate([
            'heading'     => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'btn_label'   => 'nullable|string|max:255',
            'btn_link'    => 'nullable|url',
        ]);

        $existing = DB::table('dynamic_inquiry')->first();

        if ($existing) {
            DB::table('dynamic_inquiry')
                ->where('id', $existing->id)
                ->update([
                    'heading'     => $request->heading,
                    'description' => $request->description,
                    'btn_label'   => $request->btn_label,
                    'btn_link'    => $request->btn_link,
                    'user_id'     => auth()->id(),
                    'updated_at'  => now(),

                ]);
            $message = 'About Inquiry updated';
        } else {
            DB::table('dynamic_inquiry')->insert([
                'heading'     => $request->heading,
                'description' => $request->description,
                'btn_label'   => $request->btn_label,
                'btn_link'    => $request->btn_link,
                'user_id'     => auth()->id(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
            $message = 'About Inquiry created';
        }

        return back()->with('success', $message);
    }
}
