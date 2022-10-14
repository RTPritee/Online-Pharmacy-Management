<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\medicinesController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\supplierController;
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


Route::get('/',[pagesController::class,'welcomepage'])->name('WelcomePage');

Route::get('/login',[pagesController::class,'login'])->name('login');
Route::post('/login',[validationController::class,'loginValidation'])->name('login.validation');

Route::get('/register',[pagesController::class,'register'])->name('registration');
Route::post('/register',[validationController::class,'registerValidation'])->name('registration.validation');

Route::get('/adminDashboard',[pagesController::class,'adminDashboard'])->name('adminDashboard');

Route::get('/logout',[pagesController::class,'logout'])->name('logout');

//medicine route ---------->

Route::get('/createMedicine',[medicinesController::class,'create']);
Route::post('/createMedicine',[medicinesController::class,'store'])->name('create');

Route::get('/viewMedicine',[medicinesController::class,'index'])->name('index');
Route::get('/search',[medicinesController::class,'search'])->name('search');

Route::get('/editMedicine/{id}',[medicinesController::class,'edit'])->name('editMedicine');
//Route::post('/editMedicine/{id}',[medicinesController::class,'update'])->name('update');
Route::put('/update/{id}',[medicinesController::class,'update'])->name('update');

Route::get('/delete/{id}',[medicinesController::class,'delete'])->name('delete');

//customers route ---------->

Route::get('/viewCustomers',[customersController::class,'index'])->name('viewCustomers');
Route::get('/destroy/{id}',[customersController::class,'destroy'])->name('destroy');
//Route::get('/viewCustomers',[customersController::class,'index'])->name('index');
Route::get('/customersDashboard',[pagesController::class,'customersDashboard'])->name('customersDashboard');

Route::get('/searchCustomer',[customersController::class,'search'])->name('search');

Route::get('/dashboard',[pagesController::class,'dashboard'])->name('dashboard');

//suppliers route ---------->

Route::get('/viewSupplier',[supplierController::class,'viewSupplier'])->name('viewSupplier');

Route::get('/addSupplier',[supplierController::class,'add'])->name('add');
Route::post('/addSupplier',[supplierController::class,'insert'])->name('insert');

Route::get('/editSupplier/{id}',[supplierController::class,'edit'])->name('editSupplier');
Route::put('/updateSupplier/{id}',[supplierController::class,'updateSupplier'])->name('updateSupplier');
Route::get('/deleteSupplier/{id}',[supplierController::class,'deleteSupplier'])->name('deleteSupplier');
Route::get('/searchSupplier',[supplierController::class,'search'])->name('search');
Route::get('/infoSupplier',[supplierController::class,'infoSupplier'])->name('infoSupplier');

//info

Route::get('/editInfo/{id}',[pagesController::class,'editInfo'])->name('editInfo');
Route::put('/updateInfo/{id}',[pagesController::class,'updateInfo'])->name('updateInfo');