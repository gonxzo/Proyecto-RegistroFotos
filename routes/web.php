<?php

use App\Municipio;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('documents/store', 'DocumentController@store')->name('documents.store');
Route::post('workers/store', 'WorkerController@store')->name('workers.store');
Route::post('projects/store', 'ProjectController@store')->name('projects.store');

//Routes
Route::middleware(['auth'])->group(function () {
    Route::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('can:roles.store');
    Route::get('roles', 'RoleController@index')->name('roles.index')->middleware('can:roles.index');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('can:roles.create');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('can:roles.edit');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')->middleware('can:roles.show');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('can:roles.destroy');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('can:roles.edit');

    //Usuarios
    Route::get('users', 'UserController@index')->name('users.index')->middleware('can:users.index');
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('can:users.edit');
    Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('can:users.show');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('can:users.destroy');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('can:users.edit');
    Route::get('users.buscar', 'UserController@buscar')->name('users');

     //DOCUMENTS

     Route::get('documents', 'DocumentController@index')->name('documents.index')->middleware('can:documents.index');
     Route::get('documents/create', 'DocumentController@create')->name('documents.create')->middleware('can:documents.create');
     Route::put('documents/{document}', 'DocumentController@update')->name('documents.update')->middleware('can:documents.edit');
     Route::get('documents/{document}', 'DocumentController@show')->name('documents.show')->middleware('can:documents.show');
     Route::delete('documents/{document}', 'DocumentController@destroy')->name('documents.destroy')->middleware('can:documents.destroy');
     Route::get('documents_update/{document}/edit', 'DocumentController@edit')->name('documents.edit')->middleware('can:documents.edit');
    
     //PROJECTS
    
     Route::get('projects', 'ProjectController@index')->name('projects.index')->middleware('can:projects.index');
     Route::get('projects/create', 'ProjectController@create')->name('projects.create')->middleware('can:projects.create');
     Route::put('projects/{project}', 'ProjectController@update')->name('projects.update')->middleware('can:projects.edit');
     Route::get('projects/{project}', 'ProjectController@show')->name('projects.show')->middleware('can:projects.show');
     Route::delete('projects/{project}', 'ProjectController@destroy')->name('projects.destroy')->middleware('can:projects.destroy');
     Route::get('projects/{project}/edit', 'ProjectController@edit')->name('projects.edit')->middleware('can:projects.edit');
     Route::get('projects/{project}', 'ProjectController@edit')->name('projects.imagenes')->middleware('can:projects.imagenes');
     Route::get('projectspdf/{project}','ProjectController@generaPDF')->name('projects.pdf')->middleware('can:projects.pdf'); 
      //WORKERS
      
      Route::get('workers', 'WorkerController@index')->name('workers.index')->middleware('can:workers.index');
      Route::get('workers/create', 'WorkerController@create')->name('workers.create')->middleware('can:workers.create');
      Route::put('workers/{worker}', 'WorkerController@update')->name('workers.update')->middleware('can:workers.edit');
      Route::get('workers/{worker}', 'WorkerController@show')->name('workers.show')->middleware('can:workers.show');
      Route::delete('workers/{worker}', 'WorkerController@destroy')->name('workers.destroy')->middleware('can:workers.destroy');
      Route::get('workers/{worker}/edit', 'WorkerController@edit')->name('workers.edit')->middleware('can:workers.edit');
  
    
    //CLEAR
    Route::get('storage-link',function(){
        return Artisan::call('storage:link');
    });
    Route::get('/clear', function() {
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
    });
});
