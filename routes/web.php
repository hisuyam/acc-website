<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
        Route::inertia('dashboard', 'dashboard')->name('dashboard');
        Route::inertia('/about', 'about')->name('about');
        Route::inertia('/admission', 'admission')->name('admission');
        Route::inertia('/academe', 'academe')->name('academe');
        Route::inertia('/student-alumni', 'student-alumni')->name('student-alumni');
});

require __DIR__.'/settings.php';
