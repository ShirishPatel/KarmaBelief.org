<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategoriesController extends Controller
{
    public function index()
    {
        $records = DB::table('blog_categories')->get();
        return view('admin.blog-category.index', compact('records'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category_slug = Str::slug($request->category_name, '-');

        DB::table('blog_categories')->insert([
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

        DB::table('blog_categories')->where('id', $id)->update([
            'category_name' => $request->category_name,
            'category_slug' => $category_slug,
            'updated_at'    => now(),
        ]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('blog_categories')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function toggleStatus($id)
    {
        $record = DB::table('blog_categories')
            ->where('id', $id)
            ->value('status');

        DB::table('blog_categories')->where('id', $id)->update([

            'status' => $record == '1' ? '0' : '1',
        ]);
        return back()->with('success', 'Status Updated successfully.');
    }

}
