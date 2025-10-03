<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records    = DB::table('galleries')->orderByDesc('id')->get();
        $categories = DB::table('gallery_categories')->get();
        return view('admin.gallery.index', compact('records', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category_slug = Str::slug($request->category_name, '-');

        DB::table('gallery_categories')->insert([
            'user_id'       => auth()->id(),
            'category_name' => $request->category_name,
            'category_slug' => $category_slug,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);
        $category_slug = Str::slug($request->category_name, '-');

        DB::table('gallery_categories')->where('id', $id)->update([
            'category_name' => $request->category_name,
            'category_slug' => $category_slug,
            'updated_at'    => now(),
        ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('gallery_categories')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $record = DB::table('gallery_categories')
            ->where('id', $id)
            ->value('status');

        DB::table('gallery_categories')->where('id', $id)->update([

            'status' => $record == '1' ? '0' : '1',
        ]);
        return back()->with('success', 'Status Updated successfully.');
    }
}
