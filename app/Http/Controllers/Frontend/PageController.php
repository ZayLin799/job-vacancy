<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home(){
        $jobs = Job::latest()->paginate(15);
        return view('frontend.home', compact('jobs'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function jobdetail($id){

        $jobs = Job::where('id', $id)->first();
        return view('frontend.job_detail', compact('jobs'));
    }
}
