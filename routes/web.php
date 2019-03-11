<?php
use App\Author;

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

// Route::get('/', function () {
//     return view('authors');
// });

Route::get('/','RouteController@authors')->name('authors');
Route::get('{id}','RouteController@books')->name('books');
Route::get('/ajax/authors', function(){
    $authors = Author::paginate(3);
    return View::make('ajax')->with('authors',$authors)->render();
});

Route::post('/sendmail','AjaxController@send');