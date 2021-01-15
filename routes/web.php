<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoringController;

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

Route::get('/', [ScoringController::class, 'getParties']);
Route::get('/sortbytime', [ScoringController::class, 'sortByTime']);
Route::get('/searchParty/{username}', [ScoringController::class, 'searchParty']);
