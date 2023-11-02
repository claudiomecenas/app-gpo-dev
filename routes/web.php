<?php

use App\Models\MarketSegment;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MarketSegmentController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Rotas Company
    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/company', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
    
    Route::delete('/market-segment/{id}', [MarketSegmentController::class, 'destroy'])->name('market-segment.destroy');
    Route::post('/market-segment', [MarketSegmentController::class, 'store'])->name('market-segment.store');
    Route::put('/market-segment/{id}', [MarketSegmentController::class, 'update'])->name('market-segment.update');
    Route::get('/market-segment/{id}', [MarketSegmentController::class, 'edit'])->name('market-segment.edit');
    Route::get('/market-segment/{id}/show', [MarketSegmentController::class, 'show'])->name('market-segment.show');
    Route::get('/market-segment', [MarketSegmentController::class, 'index'])->name('market-segment.index');

});
