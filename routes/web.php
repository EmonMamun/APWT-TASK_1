<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\productcontroller;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/teams', function () {
    return view('OurTeam');
});
Route::get('/contact', function () {
    return view('Contactus');
}); 
 */
Route::get('/',[pagescontroller::class,'home']) ->name('root');
Route::get('/about',[pagescontroller::class,'about']) ->name('about');
Route::get('/teams',[pagescontroller::class,'teams']) ->name('teams');
Route::get('/contact',[pagescontroller::class,'contact']) ->name('contact');
/*
Route::get('/product/service',[productcontroller::class,'service']) ->name('service'); */



/*
Route::get('/',[PagesController::class,'home'])->name('root');
Route::get('/welcome',[PagesController::class,'welcome'])->name('welcome');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/{name}',[StudentController::class,'home'])->name('student.details');
*/