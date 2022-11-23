<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [BoardController::class, 'create']);
Route::get('/{id}', [BoardController::class, 'index']);
Route::get('/reload/{id}', [BoardController::class, 'show']);

Route::get('/commentersview/{id}', [CommentController::class, 'show']);
Route::post('/send_comment', [CommentController::class, 'store']);
