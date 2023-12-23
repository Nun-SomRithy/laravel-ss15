<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('homepage',[HomeController::class,'index']);
Route::get('about',[AboutController::class,'index']);
Route::get('contact',[ContactController::class,'index']);
Route::get('/register',function () {return view('register');});
Route::post('/register', [RegisterController::class, 'save']);
Route::get('/contactus/{id?}', [ContactController::class, 'index']);

Route::controller(RegisterController::class)->group(function () {
    Route::view('/registration', 'register');
    Route::post('/registration/save', 'save');
});

Route::get('table/{num}/{multi?}', function ($num, $multi=null) {
    for($i=1 ; $i <= 10; $i++){
        echo "$num * $i = " . $num*$i ."with multi :".$multi ."<br>";
    }
});
