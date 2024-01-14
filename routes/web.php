<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return app(controller::class)->welcome();
// });
Route::get('/', [controller::class,'welcome']);

Route::get('/demo1', function () {
    return view('demo1');
});

Route::get('/form', function () {
    return view('form');
});

// Route::get('/getall', [controller::class,'getalldata']);



Route::post('/save', [Controller::class, 'save']);

Route::post('/save_as', [Controller::class, 'saveas']);

Route::get('/delete/{id}', [Controller::class, 'getdeleteid']);

Route::get('/edit/{id}',[Controller::class,'edit_data']);

Route::put('/update/{id}',[Controller::class,'update_data']);