<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\bookController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {


///////////////  ADMIN   /////////////// 

    Route::middleware(['status:admin'])->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        });        
    
    // Route::resource('/covid19','Covid19Controller');
     });


///////////////  STUDENT   /////////////// 

    Route::middleware(['status:stdent'])->group(function () {
        
    // Route::get('/teacher', function () {
    //     return view('teacher/index');
    // });
    
    // Route::resource('/covid19','Covid19Controller');
     });


///////////////  TEACHER   /////////////// 

    Route::middleware(['status:teaccher'])->group(function () {
        
        // Route::get('/teacher', function () {
        //     return view('teacher/index');
        // });
        
        // Route::resource('/covid19','Covid19Controller');
         });

});
    
    
Route::resource('subject', subjectController::class);
Route::resource('room', roomController::class);
Route::resource('book', bookController::class);