<?php

use App\Http\Controllers\pdfController;
use App\Http\Controllers\Report\IfReport\HomeController;
use App\Http\Livewire\Report\IfView\Afac001\Create;
use App\Http\Livewire\Report\IfView\Afac001a\Create as Afac001aCreate;
use App\Http\Livewire\Report\IfView\Daaia001\Create as Daaia001Create;
use App\Http\Livewire\Report\IfView\Afac005\Create as Afac005Create;
use App\Http\Livewire\Report\IfView\Afac006\Create as Afac006Create;
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
Route::get('create/{slug}/afac001/{idReporter}', Create::class)->name('afac001');
Route::get('create/{slug}/afac001a/{idReporter}', Afac001aCreate::class)->name('afac001a');
Route::get('create/{slug}/daaia001/{idReporter}', Daaia001Create::class)->name('daaia001');
Route::get('create/{slug}/afac005/{idReporter}', Afac005Create::class)->name('afac005');
Route::get('create/{slug}/afac006/{idReporter}', Afac006Create::class)->name('afac006');
// ROUTE PDFS
Route::get('PdfAfac001', [Create::class, 'PdfAfac001'])->name('afac001-pdf');
Route::get('PdfAfac001a', [Afac001aCreate::class, 'PdfAfac001a'])->name('afac001a-pdf');
