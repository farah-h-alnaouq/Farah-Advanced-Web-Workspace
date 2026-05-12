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
