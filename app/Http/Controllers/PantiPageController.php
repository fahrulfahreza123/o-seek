<?php

namespace App\Http\Controllers;

use App\Models\PantiAsuhan;
use App\Models\PantiAsuhanOperator;
use Illuminate\Http\Request;

class PantiPageController extends Controller
{
    public function index() {
        return view('viewer.panti.panti_asuhan', [
            'title' => 'Panti Asuhan',
            'active' => 'panti asuhan',
            'panti_asuhan_operator' => PantiAsuhanOperator::latest()->filter(request(
                ['search']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(PantiAsuhanOperator $panti_asuhan_operator)
    {
        return view('viewer.panti.single_panti', [
            "title" => "Single Panti",
            "active" => 'panti asuhan',
            "panti_asuhan_operator" => $panti_asuhan_operator
        ]);
    }
}
