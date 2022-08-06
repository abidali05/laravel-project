<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user_dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/create-text', function () {
    return view('dashboard.text.add_text');
});
Route::get('view_texts',[TextController::class, 'viewText']);
Route::post('add-text', [TextController::class, 'addText']);
Route::get('destory-text/{id}', [TextController::class, 'destroy']);
Route::get('edit-text/{id}', [TextController::class, 'editText']);
Route::post('update-text/{id}', [TextController::class, 'updateText']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
