<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuserController;
use App\Http\Middleware\Officer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Business;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
Route::get('business/dashboard',[BusinessController::class,'index'])->middleware(['auth', 'business'])->name('business.dashboard');
Route::get('officer/dashboard',[OfficerController::class,'index'])->middleware(['auth', 'officer'])->name('officer.dashboard');
Route::get('ruser/dashboard',[RuserController::class,'index'])->middleware(['auth', 'ruser'])->name('ruser.dashboard');


//admin
Route::get('admin/add', [HomeController::class, 'create'])
    ->middleware(['auth', 'admin'])
    ->name('business.create');
Route::post('admin/adduser', [HomeController::class, 'storeBusinessUser'])
    ->middleware(['auth', 'admin'])
    ->name('business.store');
Route::get('/admin/{id}/edit', [HomeController::class,'edit'])->name('admin.edit');
Route::put('/admin/{id}', [HomeController::class,'update'])->name('admin.update');
Route::get('/admin/delete/{business}', [HomeController::class,'delete'])->name('admin.destroy');

//business
Route::get('business/add', [BusinessController::class, 'create'])
    ->middleware(['auth', 'business'])
    ->name('department.create');
Route::post('business/adddep', [BusinessController::class, 'storeDepartment'])
    ->middleware(['auth', 'business'])
    ->name('department.store');
Route::get('/business/{id}/edit', [BusinessController::class,'edit'])->name('dept.edit');
Route::put('/business/{id}', [BusinessController::class,'update'])->name('dept.update');
Route::get('/business/delete/{department}', [BusinessController::class,'delete'])->name('dept.destroy');

//business add officer
Route::get('business/officeradd', [BusinessController::class, 'officercreate'])
    ->middleware(['auth', 'business'])
    ->name('officer.create');
Route::post('business/addofficer', [BusinessController::class, 'storeOfficer'])
    ->middleware(['auth', 'business'])
    ->name('officer.store');
Route::get('/officer/{id}/edit', [BusinessController::class,'officeredit'])->name('officer.edit');
Route::put('/officer/{id}', [BusinessController::class,'officerupdate'])->name('officer.update');
Route::get('/officer/delete/{officer}', [BusinessController::class,'officerdelete'])->name('officer.destroy');
Route::get('business/officer',[BusinessController::class,'officerindex'])->middleware(['auth', 'business'])->name('officer.dashboard');

//ruser
Route::get('ruser/create/{name}', [RuserController::class, 'create'])
    ->middleware(['auth', 'ruser'])
    ->name('ruser.create');
    Route::post('ruser/appointment', [RuserController::class, 'storeAppointment'])
    ->middleware(['auth', 'ruser'])
    ->name('appointment.store');

Route::get('ruser/appointment',[RuserController::class,'appindex'])->name('appointment');