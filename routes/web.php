<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('excel-csv-file', [MyController::class, 'index']);
Route::post('import-excel-csv-file', [MyController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{slug}', [MyController::class, 'exportExcelCSV']);

 

