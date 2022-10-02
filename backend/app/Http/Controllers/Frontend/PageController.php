<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        return view('auth.admin_login',);
    }
}
