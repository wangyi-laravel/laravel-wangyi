<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiaoController extends Controller
{
    public function index()
    {
    	return view('home.biao.index');
    }
}
