<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\StudentFileController;
use App\Http\Controllers\Admin\StudentParentController;
use App\Http\Controllers\Admin\RomtestController;
use App\Http\Controllers\Admin\StudentRomtestController;
use App\Http\Controllers\Admin\VissionMissionController;
use App\Http\Controllers\Admin\OrganizationStructureController;

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('/admin')->group(function(){
    Route::middleware(App\Http\Middleware\Admin::class)->group(function(){
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::get('carousel', [CarouselController::class, 'index'])->name('carousel');
        Route::get('carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
        Route::post('carousel', [CarouselController::class, 'insert'])->name('carousel.insert');
        Route::get('carousel/{carousel}', [CarouselController::class, 'edit'])->name('carousel.edit');
        Route::put('carousel', [CarouselController::class, 'update'])->name('carousel.update');
        Route::delete('carousel', [CarouselController::class, 'delete'])->name('carousel.delete');

        Route::get('about', [AboutController::class, 'index'])->name('about');
        Route::put('about', [AboutController::class, 'update'])->name('about.update');
        Route::delete('about', [AboutController::class, 'delete'])->name('about.delete');

        Route::get('department', [DepartmentController::class, 'index'])->name('department');
        Route::get('department/create', [DepartmentController::class, 'create'])->name('department.create');
        Route::post('department', [DepartmentController::class, 'insert'])->name('department.insert');
        Route::get('department/{department}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::put('department', [DepartmentController::class, 'update'])->name('department.update');
        Route::delete('department', [DepartmentController::class, 'delete'])->name('department.delete');

        Route::get('romtest', [RomtestController::class, 'index'])->name('romtest');
        Route::get('romtest/create', [RomtestController::class, 'create'])->name('romtest.create');
        Route::post('romtest', [RomtestController::class, 'insert'])->name('romtest.insert');
        Route::get('romtest/{romtest}', [RomtestController::class, 'edit'])->name('romtest.edit');
        Route::put('romtest', [RomtestController::class, 'update'])->name('romtest.update');
        Route::delete('romtest', [RomtestController::class, 'delete'])->name('romtest.delete');

        Route::get('student_romtest/{rombel}', [StudentRomtestController::class, 'index'])->name('student_romtest');
        Route::post('student_romtest', [StudentRomtestController::class, 'insert'])->name('student_romtest.insert');
        Route::delete('student_romtest', [StudentRomtestController::class, 'delete'])->name('student_romtest.delete');

        Route::get('student', [StudentController::class, 'index'])->name('student');
        Route::get('student/show/{student}', [StudentController::class, 'show'])->name('student.show');
        Route::delete('student', [StudentController::class, 'delete'])->name('student.delete');
        
        Route::get('student_file', [StudentFileController::class, 'index'])->name('student_file');
        Route::get('student_file/show/{student_file}', [StudentFileController::class, 'show'])->name('student_file.show');
        Route::put('student_file/update', [StudentFileController::class, 'update'])->name('student_file.update');
        Route::delete('student_file', [StudentFileController::class, 'delete'])->name('student_file.delete');

        Route::get('student_parent', [StudentParentController::class, 'index'])->name('student_parent');
        Route::delete('student_parent', [StudentParentController::class, 'delete'])->name('student_parent.delete');

        Route::get('contact', [ContactController::class, 'index'])->name('contact');
        Route::put('contact', [ContactController::class, 'update'])->name('contact.update');

        Route::get('news_category', [NewsCategoryController::class, 'index'])->name('news_category');
        Route::get('news_category/create', [NewsCategoryController::class, 'create'])->name('news_category.create');
        Route::post('news_category', [NewsCategoryController::class, 'insert'])->name('news_category.insert');
        Route::get('news_category/{news_category}', [NewsCategoryController::class, 'edit'])->name('news_category.edit');
        Route::put('news_category', [NewsCategoryController::class, 'update'])->name('news_category.update');
        Route::delete('news_category', [NewsCategoryController::class, 'delete'])->name('news_category.delete');

        Route::get('organization_structure', [OrganizationStructureController::class, 'index'])->name('organization_structure');
        Route::get('organization_structure/create', [OrganizationStructureController::class, 'create'])->name('organization_structure.create');
        Route::post('organization_structure', [OrganizationStructureController::class, 'insert'])->name('organization_structure.insert');
        Route::get('organization_structure/{organization_structure}', [OrganizationStructureController::class, 'edit'])->name('organization_structure.edit');
        Route::put('organization_structure', [OrganizationStructureController::class, 'update'])->name('organization_structure.update');
        Route::delete('organization_structure', [OrganizationStructureController::class, 'delete'])->name('organization_structure.delete');

        Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
        Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::post('gallery', [GalleryController::class, 'insert'])->name('gallery.insert');
        Route::get('gallery/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::put('gallery', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('gallery', [GalleryController::class, 'delete'])->name('gallery.delete');

        Route::get('news', [NewsController::class, 'index'])->name('news');
        Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('news', [NewsController::class, 'insert'])->name('news.insert');
        Route::get('news/{news}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('news', [NewsController::class, 'update'])->name('news.update');
        Route::delete('news', [NewsController::class, 'delete'])->name('news.delete');

        Route::get('vission_mission', [VissionMissionController::class, 'index'])->name('vission_mission');
        Route::get('vission_mission/create', [VissionMissionController::class, 'create'])->name('vission_mission.create');
        Route::post('vission_mission', [VissionMissionController::class, 'insert'])->name('vission_mission.insert');
        Route::get('vission_mission/{vission_mission}', [VissionMissionController::class, 'edit'])->name('vission_mission.edit');
        Route::put('vission_mission', [VissionMissionController::class, 'update'])->name('vission_mission.update');
        Route::delete('vission_mission', [VissionMissionController::class, 'delete'])->name('vission_mission.delete');
    });
});