<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::get("/posts", [PostsController::class, "index"]);
Route::get("/posts{id}", [PostsController::class, "show"]);
Route::get("/createpost", [PostsController::class, "createPost"]);
Route::post("/createpost", [PostsController::class, "store"]);



