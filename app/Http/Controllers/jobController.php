<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function index()
    {
        $job = Job::all();
        return view("/job/index" , ['jobs'=>$job ,'name'=> 'omar' ]);
    }
}
