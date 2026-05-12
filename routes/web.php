<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    $name = "Farah"; 
    return view('about')->with('name', $name);
});
