<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;
use App\User;

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
// Route::get('articles', function(){
//     return Article::all();
// });
// Route::get('users', function(){
//     return User::all();
// });
// Route::get('articles/{id}', function($id){
//     Article::find(1);
// });
// Route::post('articles', function(Request $request){
//     return Article::create($request->all());
// });
// Route::put('articles/{id}', function(Request $request, $id){
//     $article = Article::findOrFail($id);
//     $article->update($request->all());
// });
// Route::delete('articles/{id}', function($id){
//     Article::find($id)->delete();

//     return 204;
// });

//Route::get('tables', 'TableController@createTable');
Route::get('articles', 'ArticleController@index');
// Route::get('articles/{article}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');
// Route::put('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@delete');