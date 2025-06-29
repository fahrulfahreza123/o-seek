<?php

namespace App\Http\Controllers;

use App\Models\PantiAsuhan;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $panti_asuhan = PantiAsuhan::all();
        return view('viewer.tentang.about', [
            'panti_asuhan' => $panti_asuhan, // Kirim $images secara manual
            'title' => 'About',
            'active' => 'about',
        ]);
    }
}
