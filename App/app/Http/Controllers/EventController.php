<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    //untuk event user
    public function event() : View
    {
        $events = Event::latest()->get();
        return view('user.event', compact('events'));
    }

    public function event_card() : View
    {
        $events = Event::latest()->get();
        return view('user.event-card', compact('events'));
    }

    //untuk event admin
    public function index(): View
    {
        $events = Event::latest()->paginate(10);
        return view('events.index', compact('events'));
    }

    public function create(): View
    {
        return view('events.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:5',
            'bulan' => 'required|string',
            'tanggal' => 'required|date',
            'tempat' => 'required|min:5',
        ]);

        Event::create([
            'title' => $request->title,
            'bulan' => $request->bulan,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('events.index')->with(['success' => 'Event Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit(string $id): View
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:5',
            'bulan' => 'required|string',
            'tanggal' => 'required|date',
            'tempat' => 'required|min:5',
        ]);

        $event = Event::findOrFail($id);

        $event->update([
            'title' => $request->title,
            'bulan' => $request->bulan,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('events.index')->with(['success' => 'Event Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')->with(['success' => 'Event Berhasil Dihapus!']);
    }
}
