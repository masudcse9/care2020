<?php


use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HousekeepingController;
use App\Http\Controllers\Backend\MobileViewController;
use App\Http\Controllers\Backend\OperationController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ScheduleListController;
use App\Http\Controllers\Backend\ServiceUserController;
use App\Http\Controllers\Backend\TemplateController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;




Route::prefix('backend')->name('backend.')->group(function(){
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    //Service User Module
    Route::get('service-user-management',[ServiceUserController::class,'index'])->name('service-user-management');

    //==================================================================================================================
    //@Shuduling modioul
    //==================================================================================================================
    //Template
    Route::get('/template',[TemplateController::class,'index'])->name('template');
    //Report modioul index route
    Route::get('report',[ReportController::class,'index'])->name('report');
    //housekeeping modioul index route
    Route::get('housekeeping',[HousekeepingController::class,'index'])->name('housekeeping');
    //schedule-list
    Route::get('schedule-list',[ScheduleListController::class,'index'])->name('schedule-list');
    //mobile-view
    Route::get('/mobile-view',[MobileViewController::class,'index'])->name('mobile-view');

    //Settings Module
    Route::get('settings', [SettingsController::class, 'index'])->name('GetSettings');
    Route::post('save_settings', [SettingsController::class, 'store'])->name('saveSettings');
    //==================================================================================================================




    //==================================================================================================================
    //Operations Dashboard
    //==================================================================================================================
    Route::get('/operations-dashboard',[OperationController::class,'index'])->name('operations-dashboard');

    //==================================================================================================================




});







