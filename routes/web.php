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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::get('/searchResults', function(){
//   return view('pages.results');
// })->name('search');

Route::post('/searchResults', [
    'uses' => 'searchController@userSearch',
    'as'   => 'search'
]);

Route::get('/requestLesson', function(){

  return view('pages.lessonRequest');
})->name('requestLesson');

Route::get('/submitLesson', function(){
  return view('pages.lessonSubmit');
})->name('submitLesson');
