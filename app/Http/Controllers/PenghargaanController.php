<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    public function penghargaan()
    {
        return view('admindesa.penghargaan');
    }
}
