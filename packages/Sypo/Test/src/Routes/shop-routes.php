<?php

use Illuminate\Support\Facades\Route;
use Sypo\Test\Http\Controllers\Shop\TestController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'test'], function () {
    Route::get('', [TestController::class, 'index'])->name('shop.test.index');
});