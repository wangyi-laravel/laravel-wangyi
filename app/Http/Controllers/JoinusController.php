<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class JoinusController extends Controller
{
    //
    public function index()
    {
        $setting = Setting::all();

    	return view('home.joinus.index',compact('setting'));
    }
}
