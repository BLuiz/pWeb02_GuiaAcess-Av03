<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\FeedbackController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('base.dashboard');
})->middleware(['auth', 'verified'])->name(
    'dashboard'
);

Route::middleware('auth')->group(function () {
    //Conta
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );

    //Usuário
    Route::resource('usuario', UsuarioController::class);
    Route::post('usuario/search', [UsuarioController::class, 'search'])->name(
        'usuario.search'
    );

    //Local
    Route::resource('local', LocalController::class);
    Route::post('local/search', [LocalController::class, 'search'])->name(
        'local.search'
    );
    Route::get('local/detalhe/{id}', [LocalController::class, 'detalhe'])->name(
        'local.detalhe'
    );

    //Suporte
    Route::resource('suporte', SuporteController::class);
    Route::post('suporte/search', [SuporteController::class, 'search'])->name(
        'suporte.search'
    );

    //Feedback
    Route::resource('feedback', FeedbackController::class);
    Route::post('feedback/search', [FeedbackController::class, 'search'])->name(
        'feedback.search'
    );
});

require __DIR__ . '/auth.php';
