<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturKarangController extends Controller
{
    public function strukturkarang()
    {
        return view('admindesa.struktur_karang');
    }
}
