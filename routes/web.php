<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// 1. مسار عرض صفحة المهام
Route::get('/tasks', function () {
    return view('tasks');
});

// 2. مسار استقبال البيانات وإدخالها في قاعدة البيانات
Route::post('/create', function (Request $request) {
    // استقبال الاسم من الفورم باستخدام الميثود المعتمدة في لارفيل
    $taskName = $request->input('name');

    // إدخال البيانات في جدول tasks باستخدام الكلاس DB
    DB::table('tasks')->insert([
        'name' => $taskName
    ]);

    // بعد الإدخال، يعود المستخدم إلى صفحة المهام
    return view('tasks');
});
