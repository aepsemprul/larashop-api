<?php

use App\Book;
use Illuminate\Http\Request;
use App\Http\Resources\Book as BookResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('buku/{judul}', 'BookController@cetak');
// Route::middleware('throttle:10,1')->group(function () {
//     Route::get('buku/{judul}', 'BookController@cetak');
// });

// Route::middleware(['cors'])->group(function () {
//     Route::get('buku/{judul}', 'BookController@cetak');
// });

// Route::get('/book', function () {
//     return new BookResource(Book::find(1));
// });

// Route::prefix('v1')->group(function () {
//     Route::get('books', 'BookController@index');
//     Route::get('book/{id}', 'BookController@view')->where('id', '[0-9]+');
// });

Route::apiResources([
    'categories' => 'CategoryController',
    'books' => 'BookController',
]);
