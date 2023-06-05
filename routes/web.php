<?php

use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/main', [App\Http\Controllers\Admin\MainController::class, 'index']);
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('benefits', [App\Http\Controllers\Admin\BenefitController::class, 'index']);
    Route::get('/add-benefit', [App\Http\Controllers\Admin\BenefitController::class, 'create']);
    Route::post('/add-benefit', [App\Http\Controllers\Admin\BenefitController::class, 'store']);
    Route::get('edit-benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'edit']);
    Route::put('edit-benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'update']);
    Route::get('delete-benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'destroy']);

    // question routing
    Route::resource('subject', SubjectController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('option', OptionController::class);
});

Route::prefix('admin2')->middleware(['auth', 'isAdmin2'])->group(function(){
    Route::get('/main', [App\Http\Controllers\Admin\MainController::class, 'index2']);
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index2']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit2']);
    Route::put('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update2']);
    Route::get('benefits', [App\Http\Controllers\Admin\BenefitController::class, 'index']);
    Route::get('edit-benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'edit2']);
    Route::put('edit-benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'update2']);
});

Route::get('benefit/{benefit_id}', [App\Http\Controllers\Admin\BenefitController::class, 'viewing']);
Route::resource('test', TestController::class);
