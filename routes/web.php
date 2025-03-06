<?php

use App\Livewire\Catalogs\HomeUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/adminUser', HomeUser::class)->name('afac.users');
    Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

    // Route::group(['middleware' => ['role:siafac_super_admin']], function () {

    //     Route::get('/adminUser', HomeUser::class)->name('afac.users');

    // });
});