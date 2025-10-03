<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = DB::table('events')->orderBy('id', 'desc')->get();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'event_desc' => 'nullable|string',
            'location'   => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file      = $request->file('image');
            $fileName  = $file->hashName();
            $imagePath = $file->storeAs('events', $fileName, 'public');
        }

        $eventSlug = $request->event_slug ?? \Str::slug($request->title);

        DB::table('events')->insert([
            'title'      => $request->title,
            'event_slug' => $eventSlug,
            'event_desc' => $request->event_desc,
            'location'   => $request->location,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'image'      => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('event.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = DB::table('events')->where('id', $id)->first();
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'event_desc' => 'nullable|string',
            'location'   => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event = DB::table('events')->where('id', $id)->first();

        $imagePath = $event->image;
        if ($request->hasFile('image')) {
            $file      = $request->file('image');
            $fileName  = $file->hashName();
            $imagePath = $file->storeAs('events', $fileName, 'public');
        }

        $eventSlug = $request->event_slug ?? \Str::slug($request->title);

        DB::table('events')->where('id', $id)->update([
            'title'      => $request->title,
            'event_slug' => $eventSlug,
            'event_desc' => $request->event_desc,
            'location'   => $request->location,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'image'      => $imagePath,
            'updated_at' => now(),
        ]);

        return redirect()->route('event.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('events')->where('id', $id)->delete();
        return redirect()->route('event.index')->with('success', 'Event deleted successfully.');
    }
    public function status(Request $request, $id)
    {
        $records = DB::table('events')->where('id', $id)->first();

        DB::table('events')->where('id', $id)->update([
            'status' => $records->status == '1' ? '0' : '1',
        ]);

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
}
