<?php

use App\Http\Controllers\TripController;

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

Route::post('/plan-trip', [TripController::class, 'store'])->name('trip.store');