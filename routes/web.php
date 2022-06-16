<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\editusercontroller;
use App\Http\Controllers\confirmUserController;
use App\Http\Controllers\groupsController;
use App\Http\Controllers\classesController;
use App\Http\Controllers\editUsersInfoController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\absentsController;
use App\Http\Controllers\add_absentController;
use App\Http\Controllers\just;
use App\Http\Controllers\add_just;
use App\Http\Controllers\homeController;
use App\Http\Controllers\justs_studentController;

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
    return view('landing2');
})->name('landing');

Route::get('/theme', function () {
    return view('theme');
});

Route::get('/testcompo', function () {
    return view('testcompo');
})->middleware('sysadmin');

// loggin
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::post('/login',[registerController::class,'login']);
// registration
Route::get('/register',[registerController::class,'index'])->name('register')->middleware('guest');
Route::post('/register',[registerController::class,'submit']);
// logout
Route::get('/logout',[registerController::class,'logout'])->name('logout');

// admin pages
Route::prefix('admin')->group(function () {
    Route::get('/users',[usersController::class,'index'])->name('users')->middleware('sysadmin');
    Route::get('/groups',[groupsController::class,'index'])->name('groups')->middleware('sysadmin');
    Route::get('/classes',[classesController::class,'index'])->name('classes')->middleware('sysadmin');
    Route::get('/',[dashboardController::class,'index'])->name('dashboard');
    Route::get('/absents',[absentsController::class,'index'])->name('absents')->middleware('teacher');
    Route::get('/add_absents',[add_absentController::class,'index'])->name('add_absents')->middleware('teacher');
    Route::get('/add_absents/{groupe_id}',[add_absentController::class,'groupe'])->middleware('teacher');
    Route::get('/justification',[just::class,'index'])->name('just')->middleware('admin');
    Route::get('/add_justification',[add_just::class,'index'])->name('add_just')->middleware('admin');


    Route::post('/users',[usersController::class,'submit']);
    Route::post('/confirm',[confirmUserController::class,'confirm'])->name('confirm');
    Route::post('/delete-user',[editusercontroller::class,'deleteUser'])->name('delete-user');
    Route::post('/add-groupe',[groupsController::class,'add_groupe'])->name('add_groupe');
    Route::post('/add-class',[classesController::class,'add_class'])->name('add_class');
    Route::post('/absents',[absentsController::class,'delete_absent']);
    Route::post('/absents/added',[add_absentController::class,'submit_add_absent'])->name('absent_added');
    Route::post('/add_justification',[add_just::class,'add_just'])->name('add_just')->middleware('admin');
    Route::post('/justification',[just::class,'delete'])->middleware('admin');

    Route::prefix('edit')->group(function () {
        Route::get('/admin/{id}',[editUsersInfoController::class,'index_admin'])->middleware('admin')->name('edit_admin');
        Route::post('/admin/{id}',[editUsersInfoController::class,'submit_admin']);

        Route::get('/teacher/{id}',[editUsersInfoController::class,'index_teacher'])->middleware('admin')->name('edit_teacher');
        Route::post('/teacher/{id}',[editUsersInfoController::class,'submit_teacher']);

        Route::get('/student/{id}',[editUsersInfoController::class,'index_student'])->middleware('admin')->name('edit_student');
        Route::post('/student/{id}',[editUsersInfoController::class,'submit_student']);
    });
});

Route::get('/home',[homeController::class,'index'])->name('home')->middleware('auth');

Route::get('/home/justifications',[justs_studentController::class,'index'])->name('justs_student')->middleware('student');
Route::post('/home/justifications/details',[justs_studentController::class,'post_just'])->name('just_details')->middleware('auth');

Route::get('/home/justifications/qr/{just_qr}',[justs_studentController::class,'just_byqr'])->name('just_qr');


Route::get('/lw', function () {
    return view('testlw');
})->name('lw');
