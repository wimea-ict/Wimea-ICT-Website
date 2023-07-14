<?php

use App\Http\Controllers\aboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumericalWeatherController;
use App\Http\Controllers\WeatherDataController;
use App\Http\Controllers\WeatherInformationController;
use App\Http\Controllers\WeatherStationController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MonthlyProgressController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\docViewController;
use App\Http\Controllers\TechnicalDocumentsController;
use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("layout.app");
});
Route::get("/",[IndexController::class , "index"])->name("/");
Route::get("/numericalweather", [NumericalWeatherController::class ,"index"])->name("numericalweather");
Route::get("/numericalweather", [docViewController::class ,"rc1"])->name("numericalweather");
Route::get("/weatherinformation", [WeatherInformationController::class ,"index"])->name("weatherinformation");
Route::get("/weatherstation", [WeatherStationController::class ,"index"])->name("weatherstation");

Route::get("/editorial", [EditorialController::class ,"index"])->name("editorial");
Route::get("/monthlyprogress", [MonthlyProgressController::class ,"index"])->name("monthlyprogress");
Route::get("/weatherdata", [WeatherDataController::class ,"index"])->name("weatherdata");
Route::get("/weatherdata", [docViewController::class ,"index"])->name("weatherdata");

Route::get("/weatherinformation", [WeatherInformationController::class ,"index"])->name("weatherinformation");
Route::get("/weatherinformation", [docViewController::class ,"rc4"])->name("weatherinformation");
Route::get("/weatherstation", [WeatherStationController::class ,"index"])->name("weatherstation");
Route::get("/weatherstation", [docViewController::class ,"rc3"])->name("weatherstation");
Route::get("/media", [MediaController::class ,"index"])->name("media");
Route::get("/newsletter", [NewsletterController::class ,"index"])->name("newsletter");
Route::get("/newsletter", [docViewController::class ,"newsletter"])->name("newsletter");
Route::get("/publication", [PublicationController::class ,"index"])->name("publication");
Route::get("/publication", [docViewController::class ,"publication"])->name("publication");
Route::get("/intern", [InternController::class ,"index"])->name("intern");
Route::get("/team", [TeamController::class ,"index"])->name("team");
Route::get("/gallery", [GalleryController::class ,"index"])->name("gallery");
Route::get("/gallery", [PhotosController::class ,"allphotos"])->name("gallery");
Route::get("/forum", [ForumController::class ,"index"])->name("forum");
Route::get("/contact", [ContactUsController::class ,"index"])->name("contact");
Route::get("/photos", [PhotosController::class ,"index"])->name("photos");
Route::get("/photos", [PhotosController::class ,"index"])->name("photos");

Route::get("/about", [aboutusController::class ,"index"])->name("aboutus");

//technical documents
Route::get("/technicaldocuments", [TechnicalDocumentsController::class ,"index"])->name("technicaldocuments");
Route::post("/technicaldocuments", [TechnicalDocumentsController::class ,"upload"]);
Route::post("/photos", [PhotosController::class ,"upload"]);
Route::get("/view_documents", [WeatherDataController::class ,"fetchDocument"]);

//Route::get('edituser/{doc_Id}',[docViewController:: class, "show"])->name("technicaldocuments");
Route::get('edituser/{doc_Id}',[docViewController::class, "show"]);

Route::post('edit/{doc_Id}',[docViewController:: class, "editdocument"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products', 'App\Http\Controllers\ProductController');
