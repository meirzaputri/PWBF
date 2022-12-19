<?php

use App\Models\Admin;
use App\Models\Relawan;
use App\Models\Kegiatan;
use App\Models\Organisasi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerhome;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RegisterorgController;
use App\Http\Controllers\Relawan\RelawanController;
use App\Http\Controllers\Admin\DashboardFaunaController;
use App\Http\Controllers\OrganisasiRegistrasiController;
use App\Http\Controllers\Organisasi\OrganisasiController;
use App\Http\Controllers\Admin\DashboardRelawanController;
use App\Http\Controllers\Admin\DashboardKegiatanController;
use App\Http\Controllers\Admin\DashboardOrganisasiController;
use App\Http\Controllers\Admin\DashboardOrganisasiPerDivisiController;
use App\Http\Controllers\Organisasi\DashboardOrganisasiEventsController;
use App\Http\Controllers\Organisasi\DashboardOrganisasiVolunteersController;

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
// Route::get('/dashboardvolunteer',[dashboardvolunteerController::class, 'index']);
Route::get('/', [LandingPageController::class, 'index']);
// Route::get('/volunteers', [RelawanController::class, 'index']);
// Route::get('/moreorganization', [RelawanController::class, 'moreorganization']);

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
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('/events', DashboardKegiatanController::class);
    Route::resource('/volunteer', DashboardRelawanController::class);
    Route::resource('/allorganisasi', DashboardOrganisasiController::class);
    Route::resource('/detidentitasrelawan', DashboardRelawanController::class);
    Route::resource('/detkegiatan', DashboardKegiatanController::class);
    Route::resource('/detallorganisasi', DashboardOrganisasiController::class);
    Route::resource('/orgperdiv', DashboardOrganisasiPerDivisiController::class);
    
});
Route::group(['middleware' => ['auth', 'ceklevel:organisasi']], function () {
    Route::get('/dashboardorganisasi', [OrganisasiController::class, 'index']);
    Route::resource('/volunteersorg', DashboardOrganisasiVolunteersController::class);
    Route::resource('/detrelawanorg', DashboardOrganisasiVolunteersController::class);
    Route::resource('/eventsorg', DashboardOrganisasiEventsController::class);  
    Route::resource('/detkegiatanorg', DashboardOrganisasiEventsController::class);
});
Route::post('/orgregister', [OrganisasiRegistrasiController::class, 'store']);
Route::get('/orgregister', [OrganisasiRegistrasiController::class, 'index']);
Route::get('/login', [LoginController::class, "login"])->name('login');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/formvolunteers', [RegisterController::class, 'register']);
Route::post('/formvolunteers2', [RegisterController::class, 'register2']);

Route::get('/detailevent', function () {
    return view('detevent', [
        'login' => true
    ]);
});;

// Route::get('/about', function () {
//     return view('partials.about');
// });;
// Route::get('/dashboardorganisasi', function () {
//     return view('organisasi.dashboardorganisasi');
// });;
// Route::get('/fauna', function () {
//     return view('admin.faunaadmin');
Route::post('/Organisasi/{organisasi}', function (Organisasi $organisasi) {
    return view('relawan.moreorganization',);
});
Route::get('/moreorganization', function () {
    return view('relawan.moreorganization', [
        'login' => true
    ]);
});;

Route::get('/formvolunteers', function () {
    return view('formvolunteers');
});;

Route::get('/formorganisasi', function () {
    return view('formorganisasi');
});;

Route::get('/formregisevent', function () {
    return view('formregisevent');
});;

Route::get('/moreevents', function () {
    return view('relawan.moreevents');
});;

Route::get('/moreorganization', function () {
    return view('relawan.moreorganization');
});;

Route::get('/detailorg', [OrganisasiController::class, 'index']);;

//Route::get('/detevent', [KegiatanController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});;
Route::get('/documentation', function () {
    return view('documentation1');
});;
Route::get('/contactus', function () {
    return view('contactus1');
});;



Route::get('/dashboardvolunteer', function () {
    return view('relawan.dashboardvolunteer');
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


Route::get('/kesehatan', function () {
    return view('admin.kesehatanadmin');
});;
Route::get('/pengmas', function () {
    return view('admin.pengembanganmasyarakat');
});;
Route::get('/senbud', function () {
    return view('admin.senbud');
});;
Route::get('/pendidikan', function () {
    return view('admin.pendidikan');
});;
Route::get('/lingkungan', function () {
    return view('admin.lingkunganadmin');
});;
Route::get('/bencana', function () {
    return view('admin.bencana');
});

Route::get('/history', function () {
    return view('relawan.history');
});
