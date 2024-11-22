<?php

use Illuminate\Support\Facades\Route;
use Sypo\Test\Http\Controllers\Admin\TestController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/test'], function () {
    Route::controller(TestController::class)->group(function () {
        Route::get('', 'index')->name('admin.test.index');
    });
});