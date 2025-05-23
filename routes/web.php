<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [PagesController::class, 'index'])->name('index');
// Route::get('/appointments', [PagesController::class, 'appointments']);
Route::get('/aboutUs', [PagesController::class, 'aboutUs']);
Route::get('/gallery', [PagesController::class, 'gallery']);
// Route::get('/paint', [PagesController::class, 'paint']);


// Services routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');

Route::post('/services/store', [ServicesController::class, 'store'])->name('services.store');
Route::get('/services/{service_name}/edit', [ServicesController::class, 'edit'])->name('services.edit');
Route::put('/services/{service_name}', [ServicesController::class, 'update'])->name('services.update');
Route::delete('/services/{service_name}', [ServicesController::class, 'destroy'])->name('services.destroy');


Route::get('/appointments/create', 'AppointmentController@create')->name('appointments.create');
Route::post('/appointments/store', 'AppointmentController@store')->name('appointments.store');



Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
Route::delete('/staff/{artist_name}', [StaffController::class, 'destroy'])->name('staff.destroy');

Route::get('/staff/{artist_name}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{artist_name}', [StaffController::class, 'update'])->name('staff.update');


Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments/store', [AppointmentController::class, 'store'])->name('appointments.store');
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('/appointments/{appointment}/update', [AppointmentController::class, 'update'])->name('appointments.update');
Route::get('/appointments/available-times', [AppointmentController::class, 'fetchAvailableTimes']);
Route::get('/api/available-times/{staff_id}/{date}', [AppointmentController::class, 'availableTimes']);

Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', function () {
    return 'Test route works!';
});

Route::get('/paint', function () { return view('paint'); })->name('paint');


