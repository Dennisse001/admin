<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function peraturan()
    {
        return view('admindesa.peraturan');
    }
}
