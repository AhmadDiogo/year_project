<?php

use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;

use Illuminate\Support\Facades\Route;
use App\Models\HotelService;

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
})->name('welcome');

Route::get('/contact', function () {

    return view('contact');
})->name('contact');

Route::get('/about_us', function () {
    
    return view('about');
})->name('about_us');


// Route::get('/rooms', function () {
//     return view('rooms');
// })->name('rooms');


// Route::get('/single_room', function () {

//     $hotel_services = HotelService::all();

//     // return $hotel_services;

//     return view('single_room')->with('hotel_services', $hotel_services);
// })->name('single_room');




Route::get('/restaurant', function () {
    
    return view('res&Bar');
})->name('restaurant');


Route::get('/swimming_pool', function () {
    
    return view('swimming_pool');
})->name('swimming_pool');


Route::get('/conferences', function () {
    
    return view('conf_venues');
})->name('conf_venues');

Route::resource('/rooms', RoomsController::class);
Route::resource('/bookings', BookingsController::class);


// Controller 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
