<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\controllerhome;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\relawanController;
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

Route::get('/',[Controller::class,'index']);

Route::get('/volunteers',[relawanController::class,'index']);
Route::get('/moreorganization',[relawanController::class,'moreorganization']);

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
Route::get('/login', [loginController::class, "login"]);
Route::post('/login', [loginController::class, "loginpost"]);


Route::get('/register', [registerController::class, 'index']);
route::post('/formvolunteers', [registerController::class, 'register']);
route::post('/formvolunteers2', [registerController::class, 'register2']);

// Route::get('/about', function () {
//     return view('partials.about');
// });;

Route::get('/detailevent1', function () {
    return view('detevent1', [
        'login' => true
    ]);
});;
Route::get('/detailevent2', function () {
    return view('detevent2', [
        'login' => true
    ]);
});;
Route::get('/detailevent3', function () {
    return view('detevent3', [
        'login' => true
    ]);
});;

Route::get('/admin', function () {
    return view('dashboardadmin');
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

Route::get('/detailorg1',[OrganisasiController::class, 'index']);;

Route::get('/detevent1', [KegiatanController::class, 'index']);

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

Route::get('/volunteersorg', function () {
    return view('volunteersorg');
});;

Route::get('/pedulipendidikan', function () {
    return view('pedulipendidikan');
});;

Route::get('/mendongengtasya', function () {
    return view('mendongengtasya');
});;

Route::get('/haridongeng', function () {
    return view('haridongeng');
});;
Route::get('/fauna', function () {
    return view('faunaadmin');
});;
Route::get('/kesehatan', function () {
    return view('kesehatanadmin');
});;
Route::get('/pengmas', function () {
    return view('pengembanganmasyarakat');
});;
Route::get('/senbud', function () {
    return view('senbud');
});;
Route::get('/pendidikan', function () {
    return view('pendidikan');
});;
Route::get('/lingkungan', function () {
    return view('lingkunganadmin');
});;
Route::get('/bencana', function () {
    return view('bencana');
});;
Route::get('/volunteer', function () {
    return view('volunsidebar');
});;
Route::get('/events', function () {
    return view('eventssidebar');
});;
