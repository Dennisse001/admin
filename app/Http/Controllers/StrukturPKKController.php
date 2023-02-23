<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturPKKController extends Controller
{
    public function strukturpkk()
    {
        return view('admindesa.struktur_pkk');
    }
}
