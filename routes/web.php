<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonInformationController;
use App\Http\Controllers\PersonInformationSecondController;
use App\Http\Controllers\OfflineExcelController;

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

Route::get('difflist', [PersonInformationSecondController::class,'difflist']);

Route::resource('online-person-informations',PersonInformationController::class);

Route::get('offline-person-informations', [PersonInformationSecondController::class,'index']);

Route::get('export', [PersonInformationSecondController::class, 'export'])->name('export');

Route::post('import', [PersonInformationSecondController::class, 'import'])->name('import');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    
});


