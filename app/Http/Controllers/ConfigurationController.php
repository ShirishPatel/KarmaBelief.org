<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ConfigurationController extends Controller
{
    public function index()
    {
        $records = DB::table('configurations')->first();
        return view('admin.configuration.settings', compact('records'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'site_logo_light' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'site_logo_dark' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'site_name' => 'required|string',
            'email' => 'nullable|email',
            'phone' => ['required', 'regex:/^\+?[0-9, ]+$/', 'max:15'],
            'social_facebook' => 'nullable|url',
            'social_twitter' => 'nullable|url',
            'social_instagram' => 'nullable|url',
            'social_linkedin' => 'nullable|url',
        ]);

        $records = DB::table('configurations')->first();
        $lightLogoPath = $records->site_logo_light ?? null;
        $darkLogoPath = $records->site_logo_dark ?? null;
        $faviconLogoPath = $records->favicon ?? null;
        $footer_business_image = $records->footer_business_image ?? null;

        if ($request->hasFile('site_logo_light')) {
            if ($records && $records->site_logo_light) {
                Storage::disk('public')->delete($records->site_logo_light);
            }
            $file = $request->file('site_logo_light');
            $hashedName = $file->hashName();
            $lightLogoPath = $file->storeAs('web_image', $hashedName, 'public');
        }

        if ($request->hasFile('site_logo_dark')) {
            if ($records && $records->site_logo_dark) {
                Storage::disk('public')->delete($records->site_logo_dark);
            }
            $file = $request->file('site_logo_dark');
            $hashedName = $file->hashName();
            $darkLogoPath = $file->storeAs('web_image', $hashedName, 'public');
        }

        if ($request->hasFile('favicon')) {
            if ($records && $records->favicon) {
                Storage::disk('public')->delete($records->favicon);
            }
            $file = $request->file('favicon');
            $hashedName = $file->hashName();
            $faviconLogoPath = $file->storeAs('web_image', $hashedName, 'public');
        }

        if ($request->hasFile('footer_business_image')) {
            if ($records && $records->footer_business_image) {
                Storage::disk('public')->delete($records->footer_business_image);
            }
            $file = $request->file('footer_business_image');
            $hashedName = $file->hashName();
            $footer_business_image = $file->storeAs('web_image', $hashedName, 'public');
        }

        DB::table('configurations')->updateOrInsert(
            ['id' => 1],
            [
                'site_logo_light' => $lightLogoPath,
                'site_logo_dark' => $darkLogoPath,
                'favicon' => $faviconLogoPath,
                'site_name' => $request->site_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'footer_business_description' => $request->footer_business_description,
                'site_description' => $request->site_description,
                'footer_business_image' => $footer_business_image,
                'social_facebook' => $request->social_facebook,
                'social_twitter' => $request->social_twitter,
                'social_instagram' => $request->social_instagram,
                'social_linkedin' => $request->social_linkedin,
                'protocol' => $request->protocol,
                'smtp_host' => $request->smtp_host,
                'smtp_port' => $request->smtp_port,
                'smtp_user' => $request->smtp_user,
                'smtp_pass' => $request->smtp_pass,
                'from_email' => $request->from_email,
                'user_id' => Auth::user()->id,
                'updated_at' => now(),
            ]
        );

        Cache::forget('site_config');
        return back()->with('success', 'Settings updated successfully.');
    }
}
