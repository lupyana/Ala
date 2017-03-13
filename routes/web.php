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
    'uses' => 'contentController@index',
    'as'   => 'viewChords'
]);


Route::get('/chords', [
    'uses' => 'contentController@getChords',
]);


Route::get('/account/activation/{token}' , 'accountController@activate');

Route::post('/addLesson', [
        'uses' => 'contentController@addLesson',
        'as' => 'addLesson'
]);

Route::get('/viewSong/{songName}' , 'contentController@getSong');

Route::get('/artists' ,[
    'uses' => 'contentController@getArtists',
    'as'   => 'getArtists']);

Route::get('/artists/{artistName}' ,[
      'uses' => 'contentController@getArtistsdetails'
      ]);

Route::get('artists/viewSong/{songName}' , 'contentController@getSong');

Route::get('/songs' ,[
    'uses' => 'contentController@getSongs',
    'as'   => 'getSongs']);

Route::get('/lessonRequest', function(){
    if(!Auth::check()) return Redirect::guest('login')->with('error' , 'Please tell me who you are');;
    return view('pages.lessonRequest');
  })->name('lessonRequest');

Route::group(['middleware' => 'auth'], function () {

  Route::post('/lessonRequest' ,[
      'uses' => 'contentController@requestLesson',
      'as'   => 'lessonRequest']);
});
