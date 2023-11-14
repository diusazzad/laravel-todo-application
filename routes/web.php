<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ListController;
use App\Http\Controllers\User\SettingsController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\Welcome\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/','home')->name('home');

        Route::get('/featureform','featureForm')->name('feature.form');
        Route::post('/featureform','featureFormSave')->name('feature.form.save');
    });
});


Route::prefix('/user')->middleware('auth')->group(function () {

    Route::controller(DashboardController::class)->group(function(){
    // Dashboard and related routes
        Route::get('/dashboard','index')->name('home')->middleware(['auth', 'verified'])->name('dashboard');;
    });

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Tasks
    Route::prefix('tasks')->group(function () {
        Route::get('/upcoming', [TaskController::class, 'upcoming'])->name('tasks.upcoming');
        Route::get('/today', [TaskController::class, 'today'])->name('tasks.today');
        Route::get('/calendar', [TaskController::class, 'calendar'])->name('tasks.calendar');
        Route::get('/sticky-wall', [TaskController::class, 'stickyWall'])->name('tasks.stickyWall');
    });

    // Lists
    Route::prefix('lists')->group(function () {
        Route::get('/personal', [ListController::class, 'personal'])->name('lists.personal');
        Route::get('/work', [ListController::class, 'work'])->name('lists.work');
        Route::get('/list-1', [ListController::class, 'list1'])->name('lists.list1');
        Route::get('/add-new', [ListController::class, 'addNew'])->name('lists.addNew');
    });

     // Settings
     Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
        Route::get('/sign-out', [SettingsController::class, 'signOut'])->name('signOut');
    });
});



Route::fallback(function () {
    return view('fallbackPage');
});


require __DIR__.'/auth.php';
