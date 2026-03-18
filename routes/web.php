<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Info;
use App\Models\Employer;

Route::get('/', function () {
    return view('home', [
        'employers' => Employer::all()
    ]);
});


// ---------------- JOB ROUTES ----------------

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(6);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function() {

    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job
    ]);
});

Route::post('/jobs', function() {
    request()->validate([
        'title' => ['required'],
        'company' => 'required',
        'location' => 'required',
        'description' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'employer_id'=> 1,
        'company' => request('company'),
        'location' => request('location'),
        'description' => request('description'),
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function($id){
    $job = Job::find($id);

    return view('jobs.edit', [
        'job' => $job
    ]);
});

// ---------------- INFO ROUTES ----------------

Route::get('/info', function () {
    return view('info.index', [
        'info' => Info::latest()->paginate(9)
    ]);
});


Route::get('/info/create', function() {
   return view('info.create');
});


Route::get('/info/{id}', function ($id) {
    return view('info.show', [
        'info' => Info::find($id)
    ]);
});


Route::post('/info', function() {
    request()->validate([
        'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
    ]);


    Info::create([
        'name'=> request('name'),
        'address'=> request('address'),
        'phone'=> request('phone'),
    ]);

    return redirect('/info');
});

//------------------BLOG--------------------
Route::get('/blog', function() {
    $blog = Blog::latest()->paginate(2);

    return view('blog.index', [
        'blog' => $blog
    ]);
});

Route::get('/blog/create', function() {
    return view('blog.create');
});

Route::get('/blog/{id}', function($id) {
    $blog = Blog::find($id);

    return view('blog.show', [
        'blog' => $blog
    ]);
});

Route::post('/blog', function() {
    request()->validate([
        'title' => 'required',
        'content' => 'required',
        'author' => 'required',
    ]);

    Blog::create([
        'title' => request('title'),
        'content' => request('content'),
        'author' => request('author'),
    ]);

    return redirect('/blog');
});

// ---------------- CONTACT ----------------

Route::get('/contact', function () {
    return view('contact');
});
