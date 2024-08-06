<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceiroController;

Route::get('/', [FinanceiroController::class, 'index']);
Route::get('/entrar', [FinanceiroController::class, 'entrar']);
