<?php


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HousekeepingController;
use App\Http\Controllers\Backend\ScheduleListController;
use App\Http\Controllers\Backend\ServiceUserController;
use Illuminate\Support\Facades\Route;




Route::prefix('backend')->name('backend.')->group(function(){
    Route::get('dashboard', DashboardController::class);

    //Service User Module
    Route::get('service-user-management',[ServiceUserController::class,'index'])->name('service-user-management');

    //


    Route::get('housekeeping',[HousekeepingController::class,'index'])->name('housekeeping');
//schedule-list
    Route::get('schedule-list',[ScheduleListController::class,'index'])->name('schedule-list');
});







