<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MarketingStatusController;
use App\Http\Controllers\ClosingReasonController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MarketingScopeController;
use App\Http\Controllers\MktLeadController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\MktSourceController;



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
    return view('createStatus');
});


Route::get('/createStatus', [MarketingStatusController::class, 'create']);
Route::post('/createStatus/store', [MarketingStatusController::class, 'store'])->name('createStatus.store');
Route::get('/listStatus', [MarketingStatusController::class, 'index'])->name('listStatus.index');
Route::get('/showStatus/{id}', [MarketingStatusController::class, 'show'])->name('showStatus.show');
Route::get('/editStatus/{id}', [MarketingStatusController::class, 'edit'])->name('editStatus.edit');
Route::put('/updateStatus/{id}', [MarketingStatusController::class, 'update'])->name('updateStatus.update');
Route::delete('/deleteStatus/{id}', [MarketingStatusController::class, 'destroy'])->name('Status.delete');

Route::get('/createClosing', [ClosingReasonController::class, 'create']);
Route::post('/createClosing/store', [ClosingReasonController::class, 'store'])->name('createClose.store');

Route::get('/createDept', [DepartmentController::class, 'create']);
Route::post('/createDept/store', [DepartmentController::class, 'store'])->name('createDept.store');

Route::get('/createMktScope', [MarketingScopeController::class, 'create']);
Route::post('/createMktScope/store', [MarketingScopeController::class, 'store'])->name('createScope.store');
Route::get('/listScope', [MarketingScopeController::class, 'index'])->name('listScope.index');
Route::get('/showScope/{id}', [MarketingScopeController::class, 'show'])->name('showScope.show');
Route::get('/editScope/{id}', [MarketingScopeController::class, 'edit'])->name('editScope.edit');
Route::put('/updateScope/{id}', [MarketingScopeController::class, 'update'])->name('updateScope.update');
Route::delete('/deleteScope/{id}', [MarketingScopeController::class, 'destroy'])->name('Scope.delete');

Route::get('/createLeadGen', [MktLeadController::class, 'create']);
Route::post('/createLeadGen/store', [MktLeadController::class, 'store'])->name('createLeadGen.store');

Route::get('/listParty', [PartyController::class, 'index'])->name('listParty.index');
Route::get('/createParty', [PartyController::class, 'create']);
Route::post('/createParty/store', [PartyController::class, 'store'])->name('party.store');
Route::get('/showParty/{id}', [PartyController::class, 'show'])->name('showParty.show');
Route::get('/editParty/{id}', [PartyController::class, 'edit'])->name('editParty.edit');
Route::put('/updateParty/{id}', [PartyController::class, 'update'])->name('updateParty.update');
Route::delete('/deleteParty/{id}', [PartyController::class, 'destroy'])->name('party.delete');

Route::get('/createSource', [MktSourceController::class, 'create']);
Route::post('/createSource/store', [MktSourceController::class, 'store'])->name('createSource.store');