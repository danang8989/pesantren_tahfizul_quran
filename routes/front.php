<?php
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\VissionMissionController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\OrganizationStructureController;
use App\Http\Controllers\Web\AchivementController;
use App\Http\Controllers\Web\ExtrakurikulerController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\PpdbController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\ContactController;

Route::namespace('Web')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('/');
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('vission_mission', [VissionMissionController::class, 'index'])->name('vission_mission');
    Route::get('organization_structure', [OrganizationStructureController::class, 'index'])->name('organization_structure');
    Route::get('news', [NewsController::class, 'index'])->name('news');
    Route::get('achivement', [AchivementController::class, 'index'])->name('achivement');
    Route::get('ekstrakurikuler', [ExtrakurikulerController::class, 'index'])->name('ekstrakurikuler');
    Route::get('detail_article/{news}', [NewsController::class, 'detail'])->name('detail_article');
    Route::get('ppdb', [PpdbController::class, 'requirement'])->name('requirement');
    Route::get('announcement', [PpdbController::class, 'announcement'])->name('announcement');
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
});