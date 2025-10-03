<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|array',
            'title'       => 'required|string|max:255',
            'upload_type' => 'required|in:url,video,image',
            'video_url'   => 'required_if:upload_type,url|nullable|url',
            'video_file'  => 'required_if:upload_type,video|nullable|mimes:mp4,mov,avi|max:51200',
            'image_file'  => 'required_if:upload_type,image|nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'description' => 'nullable|string',
        ]);

        $categoryJson = json_encode($request->category_id);

        $type = $request->upload_type;
        $path = null;

        if ($type === 'video' && $request->hasFile('video_file')) {
            $path = $request->file('video_file')->store('uploads/videos', 'public');
        } elseif ($type === 'image' && $request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('uploads/images', 'public');
        } elseif ($type === 'url') {
            $path = $request->video_url;
        }

        DB::table('galleries')->insert([
            'user_id'     => Auth::id(),
            'category_id' => $categoryJson,
            'title'       => $request->title,
            'upload_type' => $type,
            'path'        => $path,
            'desc'        => $request->description ?? null,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('gallery-categories.index')->with('success', 'Record inserted successfully.');
    }

    public function edit($id)
    {
        $record = DB::table('galleries')->where('id', $id)->first();
        return view('admin.gallery.edit', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|array',
            'title'       => 'required|string|max:255',
            'upload_type' => 'required|in:url,video,image',
            'video_url'   => 'required_if:upload_type,url|nullable|url',
            'video_file'  => 'nullable|mimes:mp4,mov,avi|max:51200',
            'image_file'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'description' => 'nullable|string',
        ]);

        $record = DB::table('galleries')->where('id', $id)->first();
        if (! $record) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        $categoryJson = json_encode($request->category_id);
        $type         = $request->upload_type;
        $path         = $record->path;

        if ($type === 'video' && $request->hasFile('video_file')) {
            if ($record->upload_type === 'video' && $record->path && Storage::disk('public')->exists($record->path)) {
                Storage::disk('public')->delete($record->path);
            }
            $path = $request->file('video_file')->store('uploads/videos', 'public');
        } elseif ($type === 'image' && $request->hasFile('image_file')) {
            if ($record->upload_type === 'image' && $record->path && Storage::disk('public')->exists($record->path)) {
                Storage::disk('public')->delete($record->path);
            }
            $path = $request->file('image_file')->store('uploads/images', 'public');
        } elseif ($type === 'url') {
            $path = $request->video_url;
        }

        DB::table('galleries')->where('id', $id)->update([
            'category_id' => $categoryJson,
            'title'       => $request->title,
            'upload_type' => $type,
            'path'        => $path,
            'desc'        => $request->description ?? null,
            'updated_at'  => now(),
        ]);

        return redirect()->route('gallery-categories.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        // 1️⃣ Fetch record
        $record = DB::table('galleries')->where('id', $id)->first();

        if (! $record) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        if (in_array($record->upload_type, ['video', 'image']) && $record->path) {
            if (Storage::disk('public')->exists($record->path)) {
                Storage::disk('public')->delete($record->path);
            }
        }

        DB::table('galleries')->where('id', $id)->delete();

        return redirect()->route('gallery-categories.index')->with('success', 'Record deleted successfully.');
    }

    public function status(Request $request, $id)
    {
        $records = DB::table('galleries')->where('id', $id)->first();

        // Updating Status
        DB::table('galleries')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

}
