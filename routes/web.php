<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAuth;
use App\Http\Controllers\UserController;

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
});


Route::get('/login', [customAuth::class, 'login'])->name('login');

Route::get('/register', [customAuth::class, 'register'])->name('register');

Route::post('/', [customAuth::class, 'postLogin'])->name('postLogin');

Route::post('/postRegister', [customAuth::class, 'postRegister'])->name('postRegister');

Route::get('/logout', [customAuth::class, 'logout'])->name('logout');

Route::get('/', [UserController::class, 'home'])->name('index')->middleware('auth');



// userController routes
Route::get('/createPlan', [UserController::class, 'createPlan'])->name('createPlan');

Route::post('/addPlan', [UserController::class, 'addPlan'])->name('addPlan');

Route::get('/todayPlans', [UserController::class, 'today'])->name('todayPlans');

Route::get('/thisWeekPlan', [UserController::class, 'thisWeek'])->name('thisWeekPlan');

Route::get('/thisMonthPlan', [UserController::class, 'thisMonth'])->name('thisMonthPlan');

Route::get('/thisYearPlan', [UserController::class, 'thisYear'])->name('thisYearPlan');

Route::get('/createTimetableView', [UserController::class, 'timetableCreateView'])->name('createTimetableView');

Route::post('/createTimetable',[UserController::class, 'createTimetable'])->name('createTimetable');

Route::get('/viewTimeTable', [UserController::class, 'viewTimetable'])->name('viewTimetable');

Route::get('/deleteTask/{id}',[UserController::class, 'deleteTask'])->name('deleteTask');

Route::get('/deletePlan/{id}', [UserController::class, 'deletePlan'])->name('deletePlan');

Route::get('/planDone/{id}', [UserController::class, 'planDone'])->name('planDone');

Route::get('/editPlanPage/{id}', [UserController::class, 'editPlanPage'])->name('editPlanPage');

Route::post('/confirmEdit/{id}', [UserController::class, 'confirmEdit'])->name('confirmEdit');

