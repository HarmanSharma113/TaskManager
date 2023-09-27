<?php

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

use App\Todo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [AboutController::class,'index']);


Route::get('todos', 'TodosController@index');
Route::get('todos',[TodosController::class,'index'] );
Route::get('todos/{todoId}',[TodosController::class,'show']);
Route::get('new-todo', [TodosController::class,'create']);
Route::post('store-todo', [TodosController::class,'store']);
Route::get('todos/{todoId}/edit',[TodosController::class,'edit']);
Route::post('todos/{todoId}/update',[TodosController::class,'update']);
Route::get('todos/{todoId}/delete',[TodosController::class,'destroy']);
Route::get('todos/{todoId}/complete',[TodosController::class,'complete']);
// passing data to the view
Route::get('completed',function(){
    return view('completed')->with('todos',Todo::all());
});
