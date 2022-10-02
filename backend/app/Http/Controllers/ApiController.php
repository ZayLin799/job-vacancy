<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getJobs(){
        $job = Job::all();
        return $job;
    }
}
