<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Destinasi;
use App\Models\Kuliner;

class AdminController extends Controller
{
    public function home()
    {
        $totalEvents = Event::count();
        $totalDestinasi = Destinasi::count();
        $totalKuliner = Kuliner::count();

        return view('admin-home', compact('totalEvents', 'totalDestinasi', 'totalKuliner'));
    }
}
