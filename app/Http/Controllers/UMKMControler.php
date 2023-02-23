<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UMKMControler extends Controller
{
    public function umkm()
    {
        return view('admindesa.umkm');
    }
}
