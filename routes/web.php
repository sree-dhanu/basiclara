<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laraController;
use App\Models\lara;


// Route::get('/searching', function () {

//     if(request('search'))
//     {
//         $val=lara::where('name','like','%'.request('search').'%')->get();
//     }
//     else{
//         $val=lara::all();
//     }
//     return view('searching')->with('laras',$val);
// });
Route::get('/',[laraController::class,'reg']);
Route::post('/regAction',[laraController::class,'regAction']);
Route::get('/view',[laraController::class,'view']);
Route::get('/edit/{id}',[laraController::class,'edit']);
route::post('/editAction/{id}',[laraController::class,'editAction']);
route::get('/delete/{id}',[laraController::class,'delete']);
route::get('/login',[laraController::class,'login']);
route::post('/loginAction',[laraController::class,'loginAction']);
route::get('/logout',[laraController::class,'logout']);
route::get('/fileup',[laraController::class,'fileup']);
route::post('/fileAction',[laraController::class,'fileAction']);
 route::get('/searching',[laraController::class,'searching']);
 route::post('/searchingAction',[laraController::class,'searchingAction']);
 route::get('/select_search',[laraController::class,'select_searchshow'])->name('select_searchshow');
 route::get('/searchoutput',[laraController::class,'search'])->name('search');
?>