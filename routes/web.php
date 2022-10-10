<?php

use App\Http\Controllers\controllerhome;
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
});;

Route::get('/volunteers', function () {
    return view('dashboardvolunteer');
});;

// Route::get('/about', function () {
//     return view('welcome');
// });;
// Route::get('/events', function () {
//     return view('events');
// });;
// Route::get('/Organization', function () {
//     return view('organization');
// });;
// Route::get('/documentation', function () {
//     return view('documentation');
// });;
// Route::get('/contact', function () {
//     return view('contact');
// });;
Route::get('/login', function () {
    return view('login', [
        'login' => true
    ]);
});;

Route::get('/register', function () {
    return view('register');
});;

// Route::get('/about', function () {
//     return view('partials.about');
// });;

Route::get('/detailevent1', function () {
    return view('detevent1', [
        'login' => true
    ]);
});;

Route::get('/admin', function () {
    return view('admin');
});;

Route::get('/formvolunteers', function () {
    return view('formvolunteers');
});;

Route::get('/formregisevent', function () {
    return view('formregisevent');
});;

Route::get('/moreevents', function () {
    return view('moreevents');
});;

Route::get('/moreorganization', function () {
    return view('moreorganization');
});;

Route::get('/detailorg1', function () {
    return view('detailorg1');
});;

Route::get('/about', function () {
    return view('about1');
});;
Route::get('/documentation', function () {
    return view('documentation1');
});;
Route::get('/contactus', function () {
    return view('contactus1');
});;

Route::get('/dashboardorganisasi', function () {
    return view('dashboardorganisasi');
});;

Route::get('/dashboardvolunteer', function () {
    return view('dashboardvolunteer');
});;