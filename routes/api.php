<?php

use App\Http\Controllers\KamarController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ReservasiKamarController;
use App\Models\ReservasiKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('kamars', [KamarController::class, 'index']);
Route::get('pasiens', [PasienController::class, 'store']);
Route::get('reservasi_kamars', [ReservasiKamarController::class, 'store']);
Route::get('reservasi_kamars/{id}', [ReservasiKamarController::class, 'update']);
