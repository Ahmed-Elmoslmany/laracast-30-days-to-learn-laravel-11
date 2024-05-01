<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!pp
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view("contact");
});

Route::get('/jobs', function(){
    return view("jobs", [
        "jobs" => Job::with("employer")->paginate(3)
    ]);
});

Route::get('/jobs/{id}', function($id){
    $job = Job::find($id);
    return view("job", [
        "job" => $job
    ]);
});
