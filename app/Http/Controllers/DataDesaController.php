<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataDesaController extends Controller
{
    public function datadesa()
    {
        return view('admindesa.data_desa');
    }
}
