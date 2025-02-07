<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cmacontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('userid/{id}', function ($id) {
    return "user id :".$id;
});

Route::get('/user/{name}', function($name){
    return "Your name: ".$name;
    });

    Route::get('/home',function(){
        return view('home');
    })->name('homepage');

    Route::get('/aboutus',function(){
        return view('about');
    });

    Route::get('/contactus',function(){
        return view('contactus');
    });

    Route::get('/service',[cmacontroller::class,'service'])->name('service_new');

    Route::post('/submitdata',[cmacontroller::class,'submitdata']);
    // sem as the get method





