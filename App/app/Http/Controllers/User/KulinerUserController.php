<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KulinerUserController extends Controller
{
    public function kuliner(): View
    {
        $kuliners = Kuliner::latest()->paginate(10);
        return view('user.kuliner', compact('$kuliners'));
    }

    public function kuliner_card(): View
    {
        $kuliners = Kuliner::latest()->paginate(10);
        return view('user.kuliner-card', compact('$kuliners'));
    }

    public function show($id): View
    {
        $kuliner = Kuliner::findOrFail($id);
        return view('user.show-kuliner', compact('kuliner'));
    }
}
