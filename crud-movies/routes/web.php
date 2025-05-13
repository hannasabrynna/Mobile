<?php

use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return redirect('/movies');
});

Route::resource('movies', MovieController::class);
