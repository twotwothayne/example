<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('userid', 'App\Models\User@user');

Route::post('shopping-list', 'App\Http\Controllers\ShoppingListController@createShoppingList');
//Route::get('shopping-list', 'App\Models\User@shoppinglists');
//Route::get('shopping-list', 'App\Models\ShoppingList@user');
Route::get('shopping-lists', 'App\Http\Controllers\ShoppingListController@readShoppingLists');
Route::get('shopping-lists/{shoppingList}', 'App\Http\Controllers\ShoppingListController@readShoppingList');

