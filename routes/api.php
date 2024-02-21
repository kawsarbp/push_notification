<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Kutia\Larafirebase\Facades\Larafirebase;

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


//Route::get('/test', function () {
//    $fcmTokens = User::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();
//    return Larafirebase::withTitle('Test Title')->withBody('Test body')->sendNotification($fcmTokens);
//});

Route::patch('/device-token-update', [SiteController::class, 'fcmTokenUpdate'])->name('fcmTokenUpdate');
Route::patch('/fcm-token', [SiteController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[SiteController::class,'notification'])->name('notification');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
