<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstpart\firstController;
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

Route::prefix('firstR')->group(function () {
    //noraml
    Route::get('test1', function () {
        return 'teste1';
    });
    //with required parameters
    Route::get('test2/{id}', function ($id) {
        return  $id;
    });
    //work with controller
    Route::get('firstCon', [firstController::class,'getName']);
    //work with controller with parameter
    Route::get('firstConName/{name}', [firstController::class,'getNameWithPar']);
    Route::get('page', function(){

        $obj = new stdClass();
        $obj->name='david';
        return view('Page',compact('obj'));



    });
    Route::get('about', function(){

        $obj = new stdClass();
        $obj->name='david';
        return view('about',compact('obj'));



    });
});