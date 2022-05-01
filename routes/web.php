<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;



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



// TEST---------------------------
// Route::get('/post/{id}', function ($id) {
//     return "Hello, This is pages". $id;

// });

Route::get('/post/{id}/{name}', function ($id, $name) {
    return "Hello,This is post name" .$id ."" .$name;
});

//TEST-------------------------------------


 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth'])->name('dashboard');

 require __DIR__.'/auth.php';



  Route::get("/faculty1", [FacultyController::class,'faculty1']);
  Route::get('/index',[FacultyController::class,'index']);
  Route::get('/adminview',[FacultyController::class,'adminView']);
  Route::get('/footer',[FacultyController::class,'footerView']);
  Route::get('/facultydata',[FacultyController::class,'facultyData']);
  Route::get("/loginpage",[FacultyController::class,'loginView']);


   Route::view("/test","test");
   Route::post("/test",[StudentController::class,'store']);

   Route::post("/subject",[PostController::class,'store']);
   Route::get("/subjects",[PostController::class,'show']);

   //Route::resource('/images', ImageController::class);


  Route::get('/', function () {
    return view('homepage');
    });
