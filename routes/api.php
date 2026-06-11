<?php
use App\Http\Controllers\AuthUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\BienController;

// routes publiques
Route::post('/register', [AuthAdminController::class, 'register']);
Route::post('/login', [AuthAdminController::class, 'login']);
// afficher tous les biens
Route::get('/biens', [BienController::class, 'index']);
// afficher un seul bien


// routes protégées
Route::middleware(['auth:sanctum', 'admin'])->group(function () {

    Route::post('/admin/logout', [AuthAdminController::class, 'logout']);

    // ================= BIENS =================
    Route::post('/biens', [BienController::class, 'store']);
    Route::get('/biens', [BienController::class, 'index']); // 🔥 important manquant
    Route::get('/biens/{id}', [BienController::class, 'show']);
    Route::put('/biens/{id}', [BienController::class, 'update']);
    Route::delete('/biens/{id}', [BienController::class, 'destroy']);
});

Route::get('/biens/{id}', [BienController::class, 'show']);








// USER AUTH
Route::post('/user/register', [AuthUserController::class, 'register']);
Route::post('/user/login', [AuthUserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/logout', [AuthUserController::class, 'logout']);
});