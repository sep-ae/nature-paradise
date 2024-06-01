<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{

    public function index(): View
    {
        $destinasis = Destinasi::latest()->paginate(10);
        return view('destinasis.index', compact('destinasis'));
    }

    public function create(): View
    {
        return view('destinasis.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/destinasis', $image->hashName());

        //create product
        Destinasi::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description
        ]);

        //redirect to index
        return redirect()->route('destinasis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('destinasis.show', compact('destinasi'));
    }

    public function edit(string $id): View
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('destinasis.edit', compact('destinasi'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10'
        ]);

        $destinasis = Destinasi::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/destinasis', $image->hashName());
            Storage::delete('public/destinasis/'.$destinasis->image);

            $destinasis->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description
            ]);
        } else {
            $destinasis->update([
                'title'         => $request->title,
                'description'   => $request->description
            ]);
        }

        return redirect()->route('destinasis.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $destinasi = Destinasi::findOrFail($id);
        Storage::delete('public/destinasis/'. $destinasi->image);
        $destinasi->delete();

        return redirect()->route('destinasis.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
