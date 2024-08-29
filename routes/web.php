<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;

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
Route::match(['get','post'],'/login', [StudentsController::class,'login'])->name('login');
Route::group(['middleware'=>'UserAuth'],function(){
Route::match(['get','post'],'/', [StudentsController::class,'index'])->name('index');
Route::match(['get','post'],'/students/add-new', [StudentsController::class,'new_student'])->name('add.student');
Route::match(['get','post'],'/students/edit/{id}', [StudentsController::class,'new_student']);
Route::match(['get','post'],'/students/trash', [StudentsController::class,'trash'])->name('trash');
Route::match(['get','post'],'/students/restore/{id}', [StudentsController::class,'restore'])->name('restore');
Route::match(['get','post'],'/students/permanent/delete/{id}', [StudentsController::class,'permanent_delete'])->name('permanent-delete');
Route::match(['get','post'],'/teacher', [TeacherController::class,'index'])->name('teacher');
Route::match(['get','post'],'/teacher/trash', [TeacherController::class,'trash'])->name('teacher.trash');
Route::match(['get','post'],'/teacher/restore/{id}', [TeacherController::class,'restore'])->name('teacher.restore');
Route::match(['get','post'],'/teacher/permanent/delete/{id}', [TeacherController::class,'permanent_delete'])->name('teacher.permanent-delete');
Route::match(['get','post'],'/logout', [StudentsController::class,'logout'])->name('logout');
});