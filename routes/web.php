<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend
Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/products', function () {
    return view('frontend.product.products');
});

// Backend

Auth::routes();

Route::group(['prefix'=>'/admin'], function (){
    Route::get('/index', [Admin\DashboardController::class,'index']);

});
Route::group(['prefix'=>'/admin/news'], function (){
    Route::get('/create', [Admin\NewsController::class,'create']);
    Route::post('/store', [Admin\NewsController::class,'store']);
    Route::get('/', [Admin\NewsController::class,'index']);
    Route::get('/{id}', [Admin\NewsController::class, 'show']);
    Route::get('/edit/{id}', [Admin\NewsController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\NewsController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\NewsController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/posts'], function (){
    Route::get('/create', [Admin\PostsController::class,'create']);
    Route::post('/store', [Admin\PostsController::class,'store']);
    Route::get('/', [Admin\PostsController::class,'index']);
    Route::get('/{id}', [Admin\PostsController::class, 'show']);
    Route::get('/edit/{id}', [Admin\PostsController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\PostsController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\PostsController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/posts-category'], function (){
    Route::get('/create', [Admin\PostsCategoryController::class,'create']);
    Route::post('/store', [Admin\PostsCategoryController::class,'store']);
    Route::get('/', [Admin\PostsCategoryController::class,'index']);
    Route::get('/edit/{id}', [Admin\PostsCategoryController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\PostsCategoryController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\PostsCategoryController::class,'destroy']);
});
