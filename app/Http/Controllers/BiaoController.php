<?php

namespace App\Http\Controllers;

use App\Cates;
use App\Good;
use Illuminate\Http\Request;

class BiaoController extends Controller
{
    public function index()
    {
    	$good = Good::all();
    	$cates = Cates::all();
        $cate = $_GET['cates_id'];

    	return view('home.biao.index',compact('good','cates','cate'));
    }
}
