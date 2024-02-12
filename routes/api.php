<?php

use App\Http\Controllers\LegionController;
use App\Models\Legion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/legion', function() {
//     return Legion::all();
// } );

Route::get('/legion', [LegionController::class, 'index'])->name('legion.index');
Route::get('/legion/{legion}', [LegionController::class, 'show'])->name('legion.show');
