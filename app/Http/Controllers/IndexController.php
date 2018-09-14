<?php

namespace App\Http\Controllers;

use App\Mail\Activate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //
    public function sendEmail(Activate $activate)
  {
    // ... code
    // 调用方式
    Mail::to('demo@example.com')->send(new Activate($activate));
  }
}
