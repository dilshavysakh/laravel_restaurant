<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/redirects', [HomeController::class,'redirects']);

Route::get('/users', [AdminController::class,'user']);
Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser']);

Route::get('/foodmenu', [AdminController::class,'foodmenu']);
Route::post('/uploadfood', [AdminController::class,'upload']);
Route::get('/deletemenu/{id}', [AdminController::class,'deletemenu']);
Route::get('/updatemenu/{id}', [AdminController::class,'updatemenu']);
Route::post('/update/{id}', [AdminController::class,'update']);

Route::post('/reservation', [AdminController::class,'reservation']);
Route::get('/viewreservation', [AdminController::class,'viewreservation']);

Route::get('/viewchef', [AdminController::class,'viewchef']);
Route::post('/uploadchef', [AdminController::class,'uploadchef']);
Route::get('/updatechef/{id}', [AdminController::class,'updatechef']);
Route::post('/update2/{id}', [AdminController::class,'update2']);
Route::get('/deletechef/{id}', [AdminController::class,'deletechef']);


Route::get('/menuarea', [AdminController::class,'menuarea']);
Route::post('/uploadmenufood', [AdminController::class,'uploadmenufood']);
Route::get('/deletemenuarea/{id}', [AdminController::class,'deletemenuarea']);
Route::get('/updatemenuarea/{id}', [AdminController::class,'updatemenuarea']);
Route::post('/update3/{id}', [AdminController::class,'update3']);

//cart
Route::post('/addcart/{id}', [HomeController::class,'addcart']);
Route::get('/showcart/{id}', [HomeController::class,'showcart']);
Route::get('/removecart/{id}', [HomeController::class,'removecart']);

Route::post('/orderconfirm', [HomeController::class,'orderconfirm']);

Route::get('/orders', [AdminController::class,'orders']);
//search bar
Route::get('/search', [AdminController::class,'search']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
