<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizBankController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
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
// user
// quiz
// Route::get('/quiz/{code}',[UserQuizController::class, 'view']);
Route::get('/quiz',function(){
    return view('quiz');
});
// landing page
Route::get('/', function () {
    return view('welcome');
});

// admin
Route::middleware('auth')->group(function () {
    Route::resource('/quiz', QuizController::class)->name('index','quizlist');
    
});


// Route::get('/quizlist', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
