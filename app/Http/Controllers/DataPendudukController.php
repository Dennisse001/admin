<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function datapenduduk()
    {
        return view('admindesa.data_penduduk');
    }
}
