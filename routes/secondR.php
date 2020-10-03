<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\secondpart;
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

Route::get('secondR/david', function () {
    return 'welcome';
});

//use function from specific controller
Route::namespace('../firstpart')->prefix('secondR')-> get('getName',[firstController::class,'getName']);