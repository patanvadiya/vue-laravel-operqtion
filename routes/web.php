<?php

use App\Http\Controllers\OperationController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Helper\Product;

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
Route::any('{url}', function(){  // this is vue page route
    return view('welcome');
})->where('url', '.*');


// Route::fallback(function () {   // this is autometic redirect url in not found page
//     return view('404');
// });



// Route::get("/",function(){
//     return view('welcome');
// });

// Route::get('/', ['middleware' => ['cache.manage'], function () {
//  Route::group(['middleware' => 'cache.manage'], function () {

    route::get("laravel-operation",[OperationController::class,"laravelOperaion"]);
    route::get("employee",[OperationController::class,"employee"]);

    route::post("add_employee",[OperationController::class,"add_employee"])->name("add_employee");

// });
