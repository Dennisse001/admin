<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StrukturDesaController extends Controller
{
    public function strukturdesa()
    {
       return view('admindesa.struktur_desa');
    }
}
