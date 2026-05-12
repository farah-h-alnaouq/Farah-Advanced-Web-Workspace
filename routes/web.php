<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    $name = "Farah";
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales'
    ];
    return view('about', compact('name', 'departments'));
});
use Illuminate\Http\Request;

Route::post('/about', function (Request $request) {
    $name = $request->input('user_name'); 
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales'
    ];
    return view('about', compact('name', 'departments'));
});
