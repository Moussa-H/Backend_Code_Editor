<?php

use App\Http\Controllers\CodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



   Route::get('/codes', [CodeController::class, 'getAllCodes']);
