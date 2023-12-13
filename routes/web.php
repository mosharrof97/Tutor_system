<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard.page.tuitor.addtuitor');
});


//........Tuition ........................
Route::get('/addtuition', function () {
    return view('dashboard.page.tuition.addtuition');
});


//........City ........................
Route::get('/addcity', function () {
    return view('dashboard.page.city.addcity');
});


//........Class ........................
Route::get('/addclass', function () {
    return view('dashboard.page.class.addclass');
});


//........Class ........................
Route::get('/addday', function () {
    return view('dashboard.page.day.addday');
});

//........Location ........................
Route::get('/addlocation', function () {
    return view('dashboard.page.location.addlocation');
});






require __DIR__.'/auth.php';
