<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Telegram Routes
|--------------------------------------------------------------------------
*/

Route::prefix('telegram')->namespace('Telegram')->group(function () {
    Route::post('/', 'BotController@index')->name('telegram.index');
    Route::get('set/webhook/{token}', 'BotController@setWbhook')->name('telegram.set.webhook');
});
