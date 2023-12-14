<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tuitionController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\locationController;


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
    return view('dashboard.page.dashboard');
});

Route::get('/form', function () {
    return view('dashboard.page.form.baseForm');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//............Tanvir part-1..................................

//........Tuitor ........................
Route::get('/addtuitor', function () {
    return view('dashboard.page.tuitor.addtuitor1');
});


//........Tuition ........................
Route::get('/tuition', [tuitionController::class, 'tuition'])-> name('tuition');
Route::get('/addtuition', [tuitionController::class, 'addtuition'])-> name('addtuition');
Route::post('/addtuition', [tuitionController::class, 'store'])-> name('tuitiondata');
Route::get('/update_tuition/{id}', [tuitionController::class, 'edit'])-> name('tuition.edit');
Route::post('/update_tuition/{id}', [tuitionController::class, 'update'])-> name('tuition.update');
Route::delete('/delete_tuition/{id}', [tuitionController::class, 'delete'])-> name('tuition.delete');



//........City ........................
Route::get('/city', [cityController::class, 'city'])-> name('city');
Route::get('/addcity', [cityController::class, 'addcity'])-> name('addcity');
Route::post('/addcity', [cityController::class, 'store'])-> name('citydata');
Route::get('/update_city/{id}', [cityController::class, 'edit'])-> name('city.edit');
Route::post('/update_city/{id}', [cityController::class, 'update'])-> name('city.update');
Route::delete('/delete_city/{id}', [cityController::class, 'delete'])-> name('city.delete');

//.....................Location ........................
Route::get('/location', [locationController::class, 'location'])-> name('location');
Route::get('/addlocation', [locationController::class, 'addlocation'])-> name('addlocation');
Route::post('/addlocation', [locationController::class, 'store'])-> name('locationdata');
Route::get('/update_location/{id}', [locationController::class, 'edit'])-> name('location.edit');
Route::post('/update_location/{id}', [locationController::class, 'update'])-> name('location.update');
Route::delete('/delete_location/{id}', [locationController::class, 'delete'])-> name('location.delete');




require __DIR__.'/auth.php';
