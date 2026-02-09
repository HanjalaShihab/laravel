<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Info;

Route::get('/', function () {
    return view('home');
});

Route::get('/job', function() {
    return view('job', [
        'jobs'=> Job::all()
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