<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [NavigationController::class, 'home'])->name('home');

Route::get('/dashboard', [NavigationController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);

Route::get('/gerenciamento', [NavigationController::class, 'gerenciamento'])->name('gerenciamento')->middleware(['auth']);

// Route::get('gerenciamento', function() {
//     return view('assets.gerenciamento');
// });
