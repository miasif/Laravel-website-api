<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Chart Route
Route::get('/chartdata', [ChartController::class, 'onAllSelect']);
//Client Review Route
Route::get('/clientReview', [ClientReviewController::class, 'onAllSelect']);
//Contact Form Route
Route::post('/constctSend', [ContactController::class, 'constctSend']);
//Courses Route
Route::get('/courses-home', [CoursesController::class, 'onSelectFour']);
Route::get('/courses-all', [CoursesController::class, 'onAllSelect']);
Route::post('/courses-details', [CoursesController::class, 'onSelectDetails']);
//Footers Route
Route::get('/footer', [FooterController::class, 'onAllSelect']);
//Information Route
Route::get('/information', [InformationController::class, 'onAllSelect']);
//Service Route
Route::get('/service', [ServiceController::class, 'onAllSelect']);
//Project Route
Route::get('/project-home', [ProjectController::class, 'onSelectThree']);
Route::get('/project-all', [ProjectController::class, 'onAllSelect']);
Route::post('/project-details', [ProjectController::class, 'onSelectDetails']);
//Home Page Etc Route
Route::get('/home/video', [HomePageEtcController::class, 'selectVideo']);
Route::get('/home/total', [HomePageEtcController::class, 'selectTotal']);
Route::get('/home/tech', [HomePageEtcController::class, 'onASelectTech']);
Route::get('/home/title', [HomePageEtcController::class, 'onSelectTitle']);





