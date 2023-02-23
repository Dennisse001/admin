<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    public function pariwisata()
    {
        return view('admindesa.pariwisata');
    }
}
