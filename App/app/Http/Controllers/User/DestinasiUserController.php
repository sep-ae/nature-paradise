<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinasiUserController extends Controller
{
    public function destinasi(): View
    {
        $destinasis = Destinasi::latest()->paginate(10);
        return view('user.destinasi', compact('destinasis'));
    }

    public function destinasi_card(): View
    {
        $destinasis = Destinasi::latest()->paginate(10);
        return view('user.destinasi-card', compact('destinasis'));
    }

    public function show($id): View
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('user.show-destinasi', compact('destinasi'));
    }
}
