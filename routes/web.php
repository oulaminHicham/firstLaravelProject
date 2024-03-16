<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\StagiaireController;
// use App\Models\customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// ########################################################################
Route::get('/customers'                  , [CustomerController::class , 'index'  ]) -> name('customers.index' );
Route::get('/customers/create'           , [CustomerController::class , 'create' ]) -> name('customers.create');
Route::get('/customers/{customer}'       , [CustomerController::class , 'show'   ]) -> name('customers.show'  );
Route::post('/customers'                 , [CustomerController::class , 'store'  ]) -> name('customers.store' );
Route::get('/customers/{customer}/edit'  , [CustomerController::class , 'edit'   ]) -> name('customers.edit'  );
Route::put('/customers/{customer}'       , [CustomerController::class , 'update' ]) -> name('customers.update');
Route::get('/customers/{customer}/delete', [CustomerController::class , 'destroy']) -> name('customers.delete');
// ########################################################################
Route::resource('/Filieres' , FiliereController::class);
Route::resource('/Stagiaires',StagiaireController::class);
Route::resource('/Groupes' , GroupeController::class);
// #######################
// Route::get('/test' , function(){return view('layout');});





