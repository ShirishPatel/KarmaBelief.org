<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientStoriesController extends Controller
{
    public function index()
    {
        $value = DB::table('client_stories')->first();
        $clientValue = DB::table('client_stories_section')->get();
        return view('admin.client-stories.index', compact('value', 'clientValue'));
    }

    public function clientstore(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'disc' => 'required|string',
        ]);

        $existing = DB::table('client_stories')->first();

        if ($existing) {
            DB::table('client_stories')
                ->where('id', $existing->id)
                ->update([
                    'heading' => $request->heading,
                    'disc' => $request->disc,
                    'user_id' => auth()->id(),
                    'updated_at' => now(),
                ]);
            $message = 'Updated Successfully';
        } else {
            DB::table('client_stories')->insert([
                'heading' => $request->heading,
                'disc' => $request->disc,
                'user_id' => auth()->id(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $message = 'Inserted Successfully';
        }

        return back()->with('success', $message);
    }

    public function create()
    {
        return view('admin.client-stories.section-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'client_name' => 'required|unique:client_stories_section|string|max:255',
            'client_role' => 'required|string|max:255',
            'client_heading' => 'required',
        ], [
            'client_image.required' => 'Image is required.',
            'client_name.required' => 'Name is required.',
            'client_name.unique' => 'Name already exists.',
            'client_role.required' => 'Description is required.',
            'client_heading.required' => 'Heading is required.',
        ]);

        $imagePath = null;
        if ($request->hasFile('client_image')) {
            $imagePath = $request->file('client_image')->store('client_stories', 'public');
        }

        DB::table('client_stories_section')->insert([
            'client_image' => $imagePath,
            'client_name' => $request->client_name,
            'client_heading' => $request->client_heading,
            'client_role' => $request->client_role,
            'client_status' => 1,
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('client-stories-section.index')->with('success', 'Client story added successfully.');
    }

    public function edit($id)
    {
        $data = DB::table('client_stories_section')->where('id', $id)->first();

        if (!$data) {
            return redirect()->route('client-stories-section.index')->with('error', 'Record not found');
        }

        return view('admin.client-stories.section-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'client_name' => 'required|string|max:255|unique:client_stories_section,client_name,' . $id,
            'client_role' => 'required|string|max:255',
            'client_heading' => 'required',
        ], [
            'client_image.required' => 'Image is required.',
            'client_name.required' => 'Name is required.',
            'client_name.unique' => 'Name already exists.',
            'client_role.required' => 'Description is required.',
            'client_heading.required' => 'Heading is required.',
        ]);

        $record = DB::table('client_stories_section')->where('id', $id)->first();
        $imagePath = $record->client_image;

        if ($request->hasFile('client_image')) {
            $imagePath = $request->file('client_image')->store('uploads/client_stories', 'public');
        }

        DB::table('client_stories_section')->where('id', $id)->update([
            'client_image' => $imagePath,
            'client_name' => $request->client_name,
            'client_heading' => $request->client_heading,
            'client_role' => $request->client_role,
            'updated_at' => now(),
        ]);

        return redirect()->route('client-stories-section.index')->with('success', 'Client story updated successfully.');
    }

    public function destroy($id)
    {
        $record = DB::table('client_stories_section')->where('id', $id)->first();

        if ($record && $record->client_image) {
            \Storage::disk('public')->delete($record->client_image);
        }

        DB::table('client_stories_section')->where('id', $id)->delete();

        return redirect()->route('client-stories-section.index')->with('success', 'Client story deleted successfully.');
    }

    public function status($id)
    {
        $record = DB::table('client_stories_section')
            ->where('id', $id)
            ->value('client_status');

        DB::table('client_stories_section')->where('id', $id)->update([

            'client_status' => $record == '1' ? '0' : '1',
        ]);
        return back()->with('success', 'Status Updated successfully.');
    }

}
