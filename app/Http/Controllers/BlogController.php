<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $records = DB::table('blogs')->orderByDesc('id')->get();
        return view('admin.blogs.index', compact('records'));
    }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required|unique:blogs,blog_title',
            'blog_description' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_display' => 'nullable|array',
        ]);

        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $hashedName = $file->hashName();
            $featured_image = $file->storeAs('blogs', $hashedName, 'public');
        }

        $blogSlug = Str::slug($request->blog_title, '-');
        $isDisplay = json_encode($request->input('is_display', []));

        DB::table('blogs')->insert([
            'blog_title' => $request->blog_title,
            'blog_slug' => $blogSlug,
            'blog_description' => $request->blog_description,
            'featured_image' => $featured_image,
            'is_display' => $isDisplay,
            'user_id' => Auth::user()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Record inserted successfully.');
    }
    public function edit($id)
    {
        $records = DB::table('blogs')->where('id', $id)->first();
        return view('admin.blogs.edit', compact('records'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'blog_title' => 'required|unique:blogs,blog_title,' . $id,
            'blog_description' => 'required',
            'featured_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_display' => 'nullable|array',
        ]);

        $blogSlug = Str::slug($request->blog_title, '-');
        $isDisplay = json_encode($request->input('is_display', []));
        $records = DB::table('blogs')->where('id', $id)->first();

        $featured_image = $records->featured_image;
        if ($request->hasFile('featured_image')) {
            if (!empty($records->featured_image) && Storage::exists('public/' . $records->featured_image)) {
                Storage::delete('public/' . $records->featured_image);
            }
            $file = $request->file('featured_image');
            $featured_image = $file->store('blogs', 'public');
        }

        DB::table('blogs')->where('id', $id)->update([
            'blog_title' => $request->blog_title,
            'blog_description' => $request->blog_description,
            'blog_slug' => $blogSlug,
            'featured_image' => $featured_image,
            'is_display' => $isDisplay,
            'user_id' => Auth::user()->id,
            'updated_at' => now(),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Record updated successfully.');
    }
    public function destroy(Request $request, $id)
    {
        $records = DB::table('blogs')->where('id', $id)->first();

        //Existing File Deleting
        if ($records && !empty($records->featured_image)) {
            $featured_image = 'public/' . $records->featured_image;

            if (Storage::exists($featured_image)) {
                Storage::delete($featured_image);
            }
        }

        DB::table('blogs')->where('id', $id)->delete();

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Record deleted successfully!');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('blogs')->where('id', $id)->first();

        // Updating Status
        DB::table('blogs')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function blogImageUpload(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $path = $image->store('public/blogs');
            $url = asset('storage/' . str_replace('public/', '', $path));
            return response()->json(['location' => $url]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

}
