<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaranaUmumController extends Controller
{
    public function sarana()
    {
        return view('admindesa.sarana_umum');
    }
}
