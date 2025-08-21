<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // response a view
});

// Define a route/page
// Response a string
Route::get('/users', function () {
    return 'This is the users page';
});

// Response a array
Route::get('/foods', function () {
    return ['sushi', 'sashimi', 'My lanh'];
});

// Response a object
Route::get('/aboutMe', function () {
    return response()->json([
        'name' => 'Le Manh Tuong',
        'email' => 'tuong@gmail.com',
        'age' => 18,
    ]);
});
