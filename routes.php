<?php


use Controllers\AuthController;
use Controllers\PostController;
use Controllers\IndexController;
use Controllers\Admin\AdminController;
use Controllers\Admin\CategoryController;


//for index controller 
Route::get("",[IndexController::class,'index'])->name('home');

// For posts 
Route::get("posts/create",[PostController::class,'create']);
Route::post("posts/create",[PostController::class,'store'])->name("posts/create");
Route::get("post/delete/{id}",[PostController::class,"delete"]);
Route::get("post/update/{id}",[PostController::class,"edit"]);
Route::put("post/update",[PostController::class,"update"])->name("post/update");

//for auth 
Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'store'])->name('register');

// for admin 
Route::get("admin/home",[AdminController::class,"index"]);
// category
Route::get("category",[CategoryController::class,"index"]);
Route::get("category/create",[CategoryController::class,"create"]);
Route::post("category/create",[CategoryController::class,"store"])->name("create");
Route::get("category/update/{id}", [CategoryController::class,"edit"]);
Route::put("category/update", [CategoryController::class,"update"])->name("category/update");
Route::get("category/delete/{id}",[CategoryController::class,"delete"]);
?>