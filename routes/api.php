<?php

use App\Http\Controllers\API\CreateNotificationController;
use App\Http\Controllers\API\CreateNotificationRabbitController;
use App\Http\Controllers\API\GetNotificationController;
use App\Http\Controllers\API\SendToRabbitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::prefix('/v1')->group(function(){
    Route::get('notification', [GetNotificationController::class, 'getNotification'])->name('api.v1.getNotification');
    Route::post('notification', [CreateNotificationController::class, 'createNotification'])->name('api.v1.notification');
    Route::post('send-rabbit', [SendToRabbitController::class, 'sendToRabbit'])->name('api.v1.send-rabbit');
    Route::post('notification/rabbit', [CreateNotificationRabbitController::class, 'createNotificationRabbit'])->name('api.v1.notification.rabbit');
});
