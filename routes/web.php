<?php


use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/contact', "contact");


//Route::get('/jobs', [JobController::class, "index"]);
//Route::get('/jobs/create', [JobController::class, "create"]);
//Route::post("/jobs", [JobController::class, "store"]);
//Route::get('/jobs/{job}', [JobController::class, "show"]);
//Route::get('/jobs/{job}/edit', [JobController::class, "edit"]);
//Route::patch('/jobs/{job}', [JobController::class, "update"]);
//Route::delete('/jobs/{job}', [JobController::class, "destroy"]);

// This equal same this as below follow [index, create, store, show, edit, update, destroy]

Route::resource("jobs",JobController::class);

Route::get("/register", [RegisterUserController::class, "create"]);

