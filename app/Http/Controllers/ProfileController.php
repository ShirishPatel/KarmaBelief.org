<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile');
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'phone' => ['required', 'regex:/^\+?[0-9, ]+$/', 'max:15'],
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $savePath = $user->profile_image;

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }

            $file = $request->file('profile_image');
            $hashedName = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $destinationPath = storage_path('app/public/web_image');

            // Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            list($width, $height) = getimagesize($file);
            $newWidth = 200;
            $newHeight = 200;

            $srcImage = imagecreatefromstring(file_get_contents($file));
            $dstImage = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresampled($dstImage, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $filePath = $destinationPath . '/' . $hashedName;
            imagejpeg($dstImage, $filePath, 90);

            imagedestroy($srcImage);
            imagedestroy($dstImage);

            $savePath = 'web_image/' . $hashedName;
        }


        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'profile_image' => $savePath,
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Profile updated successfully.');
    }

    public function passwordUpdate(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Old password does not match']);
        }

        DB::table('users')->where('id', $id)->update([
            'password' => Hash::make($request->new_password),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }
}
