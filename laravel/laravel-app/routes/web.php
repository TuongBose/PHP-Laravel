<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Category;

// Phương thức get
// Kiểu dữ liệu trả về là ProductController
// Hàm có tên index trong ProductController sẽ thực thi
Route::get('products', [
    ProductController::class,
    'index'
])->name('products');

// How to validate "id only Integer"
Route::get('products/{id}', [
    ProductController::class,
    'getProductById'
])->where('id', '[0-9]+');

// What about string pattern?
Route::get('products/{name}', [
    ProductController::class,
    'getProductByName'
])->where('name', '[a-zA-Z]+');

Route::get('products/{name}/{id}', [
    ProductController::class,
    'getProductByNameAndId'
])->where([
    'id' => '[0-9]+',
    'name' => '[a-zA-Z]+',
]);


// Define more routes
Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/post',[PostController::class,'index']);
Route::resource('/food',FoodController::class);
Route::resource('/category',CategoryController::class);

/*
Route::get('/', function () {
    return view('home'); // response a view
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

// response another request = redirect
Route::get('/something',function(){
    // return redirect('/'); // redirect to root
    return redirect('/foods'); // redirect to foods
});
*/
