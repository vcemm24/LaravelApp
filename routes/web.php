<?php

use Illuminate\Http\Request;
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
    return view('listings');
   // return response('<h1>Hello World</h1>',404)
    //return response (header('foo','bar');
    //->header('Content-Type','text/plain');
    //->header('foo','bar');
});
/* Route::get('/posts/{id}', function ($id) {
    //return view('welcome');
    //dd($id);
    return response('Post '.$id);
})->where('id','[0-9]+'); */
Route::get('/search', function (Request $request) {
    //return view('welcome');
    //dd($id);
    //dd($request);
    return $request->name.' '.$request->city;

});


