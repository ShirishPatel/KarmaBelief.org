<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AiMlHomeHeroGalleryController extends Controller
{
    public function index()
    {
        $records = DB::table('aiml_home_gallery_tag')->get();
        $gallery = DB::table('aiml_home_gallery')->first();

        if ($gallery) {
            $gallery->items = json_decode($gallery->data ?? '[]');
        }

        return view('admin.ai-ml.gallery', compact('records', 'gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tag_title' => 'nullable|string|max:255',
            'header' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $gallery = DB::table('aiml_home_gallery')->first();
        $existingData = $gallery ? json_decode($gallery->data ?? '[]', true) : [];

        $images = $request->file('images') ?? [];
        $tags = $request->input('tags', []);
        $imageTagData = [];

        foreach ($tags as $index => $rawTag) {
            $imagePath = null;
            $parsedTags = [];

            // 1. Parse JSON from tag input
            $decoded = json_decode($rawTag, true);
            if (is_array($decoded)) {
                foreach ($decoded as $tagItem) {
                    if (isset($tagItem['value'])) {
                        $parsedTags[] = $tagItem['value'];
                    }
                }
            }

            // 2. Upload image if available
            if (!empty($images[$index]) && $images[$index]->isValid()) {
                $imagePath = $images[$index]->store('aiml_gallery', 'public');
            }

            // 3. If no new image, fallback to existing one
            $existingImage = $existingData[$index]['image'] ?? null;

            if (!$imagePath && !$existingImage && empty($parsedTags)) {
                continue; // Skip empty entries
            }

            $imageTagData[] = [
                'image' => $imagePath ?? $existingImage ?? '',
                'tags' => $parsedTags
            ];
        }

        // Final data (replace all or merge — up to you)
        $finalData = $imageTagData;

        if ($gallery) {
            DB::table('aiml_home_gallery')
                ->where('id', $gallery->id)
                ->update([
                    'tag_title' => $request->tag_title,
                    'header' => $request->header,
                    'description' => $request->description,
                    'data' => json_encode($finalData),
                    'user_id' => auth()->id(),
                    'updated_at' => now(),
                ]);
        } else {
            DB::table('aiml_home_gallery')->insert([
                'tag_title' => $request->tag_title,
                'header' => $request->header,
                'description' => $request->description,
                'data' => json_encode($finalData),
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return back()->with('success', 'Gallery saved successfully.');
    }

}
