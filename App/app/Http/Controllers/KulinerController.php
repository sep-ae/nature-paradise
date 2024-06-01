<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class KulinerController extends Controller
{
    // Untuk event user
    public function kuliner() : View
    {
        $kuliners = Kuliner::latest()->paginate(10);
        return view('user.kuliner', compact('kuliners'));
    }

    public function kuliner_card() : View
    {
        $kuliners = Kuliner::latest()->paginate(10);
        return view('user.kuliner-card', compact('kuliners'));
    }

    // Untuk event
    public function index(): View
    {
        $kuliners = Kuliner::orderBy('id', 'asc')->paginate(10);
        return view('kuliners.index', compact('kuliners'));
    }

    public function create(): View
    {
        return view('kuliners.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/kuliners', $image->hashName());

        // Create product
        Kuliner::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description
        ]);

        // Redirect to index
        return redirect()->route('kuliners.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $kuliner = Kuliner::findOrFail($id);
        return view('kuliners.show', compact('kuliner'));
    }

    public function edit(string $id): View
    {
        $kuliner = Kuliner::findOrFail($id);
        return view('kuliners.edit', compact('kuliner'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        $kuliner = Kuliner::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/kuliners', $image->hashName());
            Storage::delete('public/kuliners/'.$kuliner->image);

            $kuliner->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description
            ]);
        } else {
            $kuliner->update([
                'title'         => $request->title,
                'description'   => $request->description
            ]);
        }

        return redirect()->route('kuliners.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kuliner = Kuliner::findOrFail($id);
        Storage::delete('public/kuliners/'. $kuliner->image);
        $kuliner->delete();

        return redirect()->route('kuliners.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
