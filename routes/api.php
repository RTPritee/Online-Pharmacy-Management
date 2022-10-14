<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPagesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/',[ApiPagesController::class,'home']);
Route::post('/login',[ApiPagesController::class,'login']);
Route::post('/register',[ApiPagesController::class,'register']);
Route::post('/logout/{id}',[ApiPagesController::class,'logout']);
Route::get('/dashboard',[ApiPagesController::class,'dashboard']);//->middleware("logged");

Route::get('/viewSupplier',[ApiPagesController::class,'viewSupplier']);
Route::get('/viewCustomer',[ApiPagesController::class,'viewCustomer']);//->middleware("logged");;
Route::get('/viewMedicine',[ApiPagesController::class,'viewMedicine']);

Route::delete('/deleteCustomer/{id}',[ApiPagesController::class,'deleteCustomer']);
Route::delete('/deleteSupplier/{id}',[ApiPagesController::class,'deleteSupplier']);
Route::delete('/deleteMedicine/{id}',[ApiPagesController::class,'deleteMedicine']);

Route::get('/addSupplier',[ApiPagesController::class,'add']);
Route::post('/addSupplier',[ApiPagesController::class,'insert']);
Route::get('/editSupplier/{supplierId}',[ApiPagesController::class,'editSupplier']);
Route::post('/updateSupplier/{supplierId}',[ApiPagesController::class,'updateSupplier']);
Route::get('/infoSupplier',[ApiPagesController::class,'infoSupplier']);

Route::get('/addMedicine',[ApiPagesController::class,'addMedicine']);
Route::post('/addMedicine',[ApiPagesController::class,'insertMedicine']);
Route::get('/editMedicine/{id}',[ApiPagesController::class,'editMedicine']);
Route::post('/updateMedicine/{id}',[ApiPagesController::class,'updateMedicine']);