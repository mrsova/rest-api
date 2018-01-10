<?php

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Resources\TodoCollection;
use App\Http\Resources\TodoResource;
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
Route::resource('/todos','RestController');

/*
Route::get('/todos', function () {
    return new TodoCollection(Todo::paginate());
    //return TodoResource::collection(Todo::all());

});*/