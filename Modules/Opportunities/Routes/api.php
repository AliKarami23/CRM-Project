<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Modules\Opportunities\Http\Controllers\OpportunitiesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/AddOpportunities', [OpportunitiesController::class, 'create'])->name('AddOpportunities')->middleware('permission:Opportunities.Add');
    Route::get('/ListOpportunities', [OpportunitiesController::class, 'index'])->name('ListOpportunities')->middleware('permission:Opportunities.List');
    Route::put('/EditOpportunities/{id}', [OpportunitiesController::class, 'edit'])->name('EditOpportunities')->middleware('permission:Opportunities.Edit');
    Route::delete('/DeleteOpportunities/{id}', [OpportunitiesController::class, 'destroy'])->name('DeleteOpportunities')->middleware('permission:Opportunities.Delete');


});
