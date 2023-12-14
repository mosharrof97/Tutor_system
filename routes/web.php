<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tuitionController;
use App\Http\Controllers\cityController;
use App\Http\controllers\TeacherCategoryController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\FrontentController;
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
// Frontend Routes -------------------------------------------
Route::get('/', [FrontentController::class, 'index'])->name('home');
Route::get('/aboutUs', [FrontentController::class, 'about'])->name('about');
Route::get('/contact', [FrontentController::class, 'contact'])->name('contact');
Route::get('/courses', [FrontentController::class, 'courses'])->name('courses');
Route::get('/pricing', [FrontentController::class, 'pricing'])->name('pricing');
Route::get('/toturs', [FrontentController::class, 'toturs'])->name('toturs');

// Backend Routes ---------------------------------------------------
Route::get('/db', function () {
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

//........Teacher Category....(tanvir)....................
Route::get('/category', [TeacherCategoryController::class, 'category'])-> name('category');
Route::get('/addteacher', [TeacherCategoryController::class, 'addteacher'])-> name('addteacher');
Route::post('/addteacher', [TeacherCategoryController::class, 'store'])-> name('categorydata');
Route::get('/update_category/{id}', [TeacherCategoryController::class, 'edit'])-> name('category.edit');
Route::post('/update_category/{id}', [TeacherCategoryController::class, 'update'])-> name('category.update');
Route::delete('/delete_category/{id}', [TeacherCategoryController::class, 'delete'])-> name('category.delete');

//........Class .......(tanvir).................
Route::get('/class', [TeacherCategoryController::class, 'class'])-> name('class');
Route::get('/addclass', [TeacherCategoryController::class, 'addclass'])-> name('addclass');
Route::post('/addclass', [TeacherCategoryController::class, 'store'])-> name('classdata');
Route::get('/update_class/{id}', [TeacherCategoryController::class, 'edit'])-> name('class.edit');
Route::post('/update_class/{id}', [TeacherCategoryController::class, 'update'])-> name('class.update');
Route::delete('/delete_class/{id}', [TeacherCategoryController::class, 'delete'])-> name('class.delete');


//.....................Location ........................
Route::get('/location', [locationController::class, 'location'])-> name('location');
Route::get('/addlocation', [locationController::class, 'addlocation'])-> name('addlocation');
Route::post('/addlocation', [locationController::class, 'store'])-> name('locationdata');
Route::get('/update_location/{id}', [locationController::class, 'edit'])-> name('location.edit');
Route::post('/update_location/{id}', [locationController::class, 'update'])-> name('location.update');
Route::delete('/delete_location/{id}', [locationController::class, 'delete'])-> name('location.delete');





require __DIR__.'/auth.php';
