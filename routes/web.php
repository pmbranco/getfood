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
//laravel auth routes
//Auth::routes();

Route::get('/forgot-password', 'customauthcontroller@password');

//initial page load
Route::get('/', function () {
    return view('welcome');
});

//Auth routes
Route::get('/forgot-password', 'customauthcontroller@password');
Route::Post('/login-user', 'customauthcontroller@login');
Route::Post('/register-user', 'customauthcontroller@reg');
Route::get('/verify/{crypt}', 'customauthcontroller@verify');
Route::Post('/resend-veri', 'customauthcontroller@resend');

//guest routes
Route::Post('/add-to-cart', 'cartcontroller@addToCart');
Route::Post('/increase-qty', 'cartcontroller@increaseQty');
Route::Post('/decrease-qty', 'cartcontroller@decreaseQty');
Route::Post('/remove-from-cart', 'cartcontroller@removeFromCart');
Route::Post('/add-favorite', 'guestcontroller@addFavorite');
Route::Post('/remove-favorite', 'guestcontroller@removeFavorite');
Route::Post('/remove-from-fav', 'guestcontroller@removeFromFav');

Route::Post('/remove-fav-from-cart', 'guestcontroller@removeFromCart');
Route::Post('/add-fav-to-cart', 'guestcontroller@addToCart');

Route::get('/cart-items/{id}', 'cartcontroller@cartItems');
Route::get('/get-foods', 'guestcontroller@get_foods');
Route::get('/cartCount/{id}', 'cartcontroller@cartCount');
Route::get('/checkout/{id}', 'cartcontroller@checkout');
Route::get('/sumtotal/{id}', 'cartcontroller@sumtotal');
Route::get('/get-fav/{id}', 'guestcontroller@getFavorites');


//vendor routes
Route::get('/get-orders', 'vendorcontroller@get_orders');
Route::get('/total-cash', 'vendorcontroller@total_cash');
Route::get('/reporting', 'vendorcontroller@reporting');
Route::get('/favorites', 'vendorcontroller@favorites');

Route::Post('/delete-food', 'vendorcontroller@delete_food');
Route::get('/create-food', 'vendorcontroller@create_food');


//customer routes
Route::get('/my-orders/{id}', 'customercontroller@my_orders');
Route::get('/my-reporting/{id}', 'vendorcontroller@my_reporting');




//don't delete,fixes route bug
Route::get('/{vue_capture?}', function () {
    return view('welcome');
  })->where('vue_capture', '[\/\w\.-]*');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
