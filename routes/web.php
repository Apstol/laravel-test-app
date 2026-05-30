<?php

use App\Http\Controllers\PcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pcs.index');
});

Route::resource('pcs', PcController::class);
