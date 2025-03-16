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
    $destinations = [
        ['name' => 'Sigiriya Rock', 'desc' => 'Climb the ancient rock fortress with stunning views.'],
        ['name' => 'Galle Fort', 'desc' => 'Stroll through history in this colonial seaside fort.'],
        ['name' => 'Yala National Park', 'desc' => 'Spot leopards and elephants on a thrilling safari.']
    ];
    return view('travel', ['destinations' => $destinations]);
});


Route::get('/plan-trip', function () {
    return view('plan-trip');
});
