<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::inertia('dashboard/post', 'dashboard/post')->name('dashboard.post');
    Route::inertia('dashboard/settings', 'dashboard/settings')->name('dashboard.settings');
    Route::inertia('dashboard/analytics', 'dashboard/analytics')->name('dashboard.analytics');
    Route::inertia('dashboard/pages', 'dashboard/pages')->name('dashboard.pages');
    Route::inertia('dashboard/media', 'dashboard/media')->name('dashboard.media');
    Route::inertia('dashboard/comments', 'dashboard/comments')->name('dashboard.comments');
    Route::inertia('dashboard/message', 'dashboard/message')->name('dashboard.message');
});

require __DIR__.'/settings.php';
