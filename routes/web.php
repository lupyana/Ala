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

Route::get('/', [
    'uses' => 'contentController@goHome',
    'as'   => 'goHome'
]);

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

Route::get('/viewChords', [
    'uses' => 'contentController@getChords',
    'as'   => 'viewChords'
]);


Route::get('/account/activation/{token}' , 'accountController@activate');

Route::post('/addLesson', [
        'uses' => 'contentController@addLesson',
        'as' => 'addLesson'
]);
