<?php

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
    return view('welcome');
});

Route::get('/list', function () {
    return view('shoppinglist');
});

//Route::resource("shoppinglists", App\Http\Controllers\ShoppingListController::class);
Route::get("/shoppinglists", "App\Http\Controllers\ShoppingListController@readShoppingLists");
//Route::post("/shoppinglist/{list}", "App\Http\Controllers\ShoppingListController@createShoppingList");
//Route::put("/shoppinglist/{list}", "App\Http\Controllers\ShoppingListController@updateShoppingList");
//Route::delete("/shoppinglist/{list}", "App\Http\Controllers\ShoppingListController@deleteShoppingList");

//Route::resource("/shoppinglist/edit/{list}", App\Http\Controllers\ShoppingListController::class);
//Route::resource("/shoppinglist/view/{list}", App\Http\Controllers\ShoppingListController::class);
//Route::resource("/shoppinglist/edit/{shoppinglist}", StudentController::class);
//Route::resource("/shoppinglist/view/{shoppinglist}", StudentController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

