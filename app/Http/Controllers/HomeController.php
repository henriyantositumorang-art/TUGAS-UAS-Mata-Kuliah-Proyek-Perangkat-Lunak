<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SboData;
use App\Models\InformasiCollection;

class HomeController extends Controller
{
    public function index()
    {
        $sboData = SboData::all();
        $informasi = InformasiCollection::orderBy('tanggal', 'desc')->get();

        return view('home', compact('sboData', 'informasi'));
    }
}
