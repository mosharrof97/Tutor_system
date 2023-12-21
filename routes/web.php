<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tuitorController;
use App\Http\Controllers\tuitionController;
use App\Http\Controllers\cityController;
use App\Http\controllers\CategoryController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\FrontentController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\classController;
use App\Http\Controllers\dayController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\socialMediaController;
use App\Http\Controllers\jobBoardController;
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
// Login From Routes ---------------------------------------------------
Route::get('/mylogin', function () {
    return view('frontend.loginfrom.login');
});


// Frontend Routes -------------------------------------------
Route::get('/', [FrontentController::class, 'index'])->name('home');
Route::get('/aboutUs', [FrontentController::class, 'about'])->name('about');
Route::get('/contact', [FrontentController::class, 'contact'])->name('contact');
Route::get('/courses', [FrontentController::class, 'courses'])->name('courses');
Route::get('/pricing', [FrontentController::class, 'pricing'])->name('pricing');
Route::get('/toturs', [FrontentController::class, 'toturs'])->name('toturs');


// Job Board Routes ---------------------------------------------------
Route::get('/jobboard', [jobBoardController::class, 'jobboard'])->name('jobboard');
Route::get('/jobdetails/{id}', [jobBoardController::class, 'jobDetails'])->name('jobdetails');

// Tuitor Dashboard Routes ---------------------------------------------------
Route::get('/tuitorpanel', function () {
    return view('tuitorpanel.pages.dashboard');
});

// Guardian Dashboard Routes ---------------------------------------------------
Route::get('/guardian', function () {
    return view('guardian.pagess.dashboard');
});


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


//.....................Tuitor........................
Route::get('/tuitor', [tuitorController::class, 'tuitor'])-> name('tuitor');
Route::get('/childoption', [tuitorController::class, 'childOption'])-> name('childOption');
Route::get('/addtuitor', [tuitorController::class, 'addtuitor'])-> name('addtuitor');
Route::post('/addtuitor', [tuitorController::class, 'store'])-> name('tuitordata');
Route::get('/update_tuitor/{id}', [tuitorController::class, 'edit'])-> name('tuitor.edit');
Route::put('/update_tuitor/{id}', [tuitorController::class, 'update'])-> name('tuitor.update');
Route::delete('/delete_tuitor/{id}', [tuitorController::class, 'delete'])-> name('tuitor.delete');

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

//.................Category....(tanvir)....................
Route::get('/category', [CategoryController::class, 'category'])-> name('category');
Route::get('/addcategory', [CategoryController::class, 'addcategory'])-> name('addcategory');
Route::post('/addcategory', [CategoryController::class, 'store'])-> name('categorydata');
Route::get('/update_category/{id}', [CategoryController::class, 'edit'])-> name('category.edit');
Route::post('/update_category/{id}', [CategoryController::class, 'update'])-> name('category.update');
Route::delete('/delete_category/{id}', [CategoryController::class, 'delete'])-> name('category.delete');

//....................... Class ...........................
Route::get('/class', [classController::class, 'allclass'])-> name('class');
Route::get('/addclass', [classController::class, 'addclass'])-> name('addclass');
Route::post('/addclass', [classController::class, 'store'])-> name('classdata');
Route::get('/update_class/{id}', [classController::class, 'edit'])-> name('class.edit');
Route::post('/update_class/{id}', [classController::class, 'update'])-> name('class.update');
Route::delete('/delete_class/{id}', [classController::class, 'delete'])-> name('class.delete');

//.....................Location ........................
Route::get('/location', [locationController::class, 'location'])-> name('location');
Route::get('/addlocation', [locationController::class, 'addlocation'])-> name('addlocation');
Route::post('/addlocation', [locationController::class, 'store'])-> name('locationdata');
Route::get('/update_location/{id}', [locationController::class, 'edit'])-> name('location.edit');
Route::post('/update_location/{id}', [locationController::class, 'update'])-> name('location.update');
Route::delete('/delete_location/{id}', [locationController::class, 'delete'])-> name('location.delete');

//.....................Student ........................
Route::get('/student', [studentController::class, 'student'])-> name('student');
Route::get('/addstudent', [studentController::class, 'addstudent'])-> name('addstudent');
Route::post('/addstudent', [studentController::class, 'store'])-> name('studentdata');
Route::get('/update_student/{id}', [studentController::class, 'edit'])-> name('student.edit');
Route::put('/update_student/{id}', [studentController::class, 'update'])-> name('student.update');
Route::delete('/delete_student/{id}', [studentController::class, 'delete'])-> name('student.delete');

//.....................Day ........................
Route::get('/day', [dayController::class, 'day'])-> name('day');
Route::get('/addday', [dayController::class, 'addday'])-> name('addday');
Route::post('/addday', [dayController::class, 'store'])-> name('daydata');
Route::get('/update_day/{id}', [dayController::class, 'edit'])-> name('day.edit');
Route::put('/update_day/{id}', [dayController::class, 'update'])-> name('day.update');
Route::delete('/delete_day/{id}', [dayController::class, 'delete'])-> name('day.delete');

//.....................Subject ........................
Route::get('/subject', [subjectController::class, 'subject'])-> name('subject');
Route::get('/addsubject', [subjectController::class, 'addsubject'])-> name('addsubject');
Route::post('/addsubject', [subjectController::class, 'store'])-> name('subjectdata');
Route::get('/update_subject/{id}', [subjectController::class, 'edit'])-> name('subject.edit');
Route::put('/update_subject/{id}', [subjectController::class, 'update'])-> name('subject.update');
Route::delete('/delete_subject/{id}', [subjectController::class, 'delete'])-> name('subject.delete');

//.....................Social Media........................
Route::get('/socialmedia', [socialMediaController::class, 'social'])-> name('social');
Route::get('/addsocialmedia', [socialMediaController::class, 'addsocial'])-> name('addsocial');
Route::post('/addsocialmedia', [socialMediaController::class, 'store'])-> name('socialdata');
Route::get('/update_socialmedia/{id}', [socialMediaController::class, 'edit'])-> name('social.edit');
Route::put('/update_socialmedia/{id}', [socialMediaController::class, 'update'])-> name('social.update');
Route::delete('/delete_socialmedia/{id}', [socialMediaController::class, 'delete'])-> name('social.delete');

require __DIR__.'/auth.php';
