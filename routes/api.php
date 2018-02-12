<?php

use Illuminate\Http\Request;
use App\Book;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('books', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Book::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('books', function(Request $request) {
    return Book::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('books/{id}', function($id) {
    Book::find($id)->delete();

    return 204;
});
*/
Route::get('/books', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Book::all();
});

Route::post('/books', function(Request $request) {
    $response = Book::create([
    	'name' => $request->input('name')
    ]);
    return response()->json($response, 201);
    /*
    $name = $request->input( 'name' );
    $names =  [
    	'name' => $name
    ];
    $response = [
    	'msg' => 'Created',
    	'data' => $names
    ];
    return response()->json($response, 201);
    */
});

Route::delete('books/{id}', function($id) {
    $response = Book::find($id)->delete();
    return response()->json($response, 204);
    //return 204;
});