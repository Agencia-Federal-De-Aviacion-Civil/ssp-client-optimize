<?php

use App\Http\Controllers\Report\ifReport\afac001Controller;
use App\Http\Controllers\Report\IfReport\HomeController;
use App\Http\Livewire\Report\IfView\Afac001\Create;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('create/{slug}/{id}', [HomeController::class, 'index'])->name('ifReportView');
Route::get('create/{slug}/afac001/{id}', Create::class)->name('afac001');
