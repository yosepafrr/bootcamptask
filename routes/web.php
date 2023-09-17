<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::POST('/register', [userController::class, "register"]);
Route::POST('/login', [userController::class, "login"]);
Route::POST('/logout', [userController::class, "logout"]);


Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/loginwrong', function () {
    return view('loginwrong');
});
Route::get('/landingp', function () {
    return view('landingp', [
        "title" => "Home Page"
    ]);
});
Route::get('/userlist', function () {
    return view('user', [
        "title" => "User List"
    ]);
});
