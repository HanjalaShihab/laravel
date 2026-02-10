<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Info;

Route::get('/', function () {
    $employer = \App\Models\Employer::all();

    return view('home', [
        'employers' => $employer
    ]);
});

Route::get('/job', function() {
    $jobs = Job::with('employer')->get();

    return view('job', [
        'jobs'=> $jobs
    ]);
});


Route::get('/job/{id}', function($id){
    $job = Job::find($id);


    return view('job-details', [
        'job' => $job
    ]);
});

Route::get('/info', function(){
    return view('info', [

    'info' => Info::all()
    ]);
});


Route::get('/info/{id}', function($id){
    $info = Info::find($id);

    return view('detailed-info', [
        'info'=> $info
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});
