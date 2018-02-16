<?php
use App\Book;
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
Route::get('/home', function () {
    return view('welcome');
});
/*
Route::get('books', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Book::all();
});

Route::post('/books', function(Request $request) {
    return Book::create($request->all);
    return response()->json(Book::create($request->all), 201);
});

Route::delete('books/{id}', function($id) {
    Book::find($id)->delete();
    return response()->json(Book::find($id)->delete(), 204);
    //return 204;
});
//Route::get('books', 'BookController@index');
*/
