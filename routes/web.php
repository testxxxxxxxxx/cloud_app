<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::domain('localhost')->group(function() {
    //Controller for file handling
    Route::controller(FileController::class)->group(function() {
        Route::get('/', 'index')->name('main');
    });
});
