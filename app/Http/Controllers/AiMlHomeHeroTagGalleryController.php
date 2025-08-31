<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AiMlHomeHeroTagGalleryController extends Controller
{
    public function create()
    {
        return view('admin.ai-ml.tagcreate');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        $slug = Str::slug($request->name);

        DB::table('aiml_home_gallery_tag')->insert([
            'name'       => $request->name,
            'slug'       => $slug,
            'user_id'    => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('ai-ml-gallery.index')->with('success', 'Tag created successfully.');
    }

    public function edit($id)
    {
        $record = DB::table('aiml_home_gallery_tag')->where('id', $id)->first();
        return view('admin.ai-ml.tagedit', compact('record'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'nullable|string|max:255',
        ]);
        $slug = Str::slug($request->name);

        DB::table('aiml_home_gallery_tag')->where('id', $id)->update([
            'name'       => $request->name,
            'slug'       => $slug,
            'updated_at' => now(),
        ]);

        return redirect()->route('ai-ml-gallery.index')->with('success', 'Tag Updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('aiml_home_gallery_tag')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
