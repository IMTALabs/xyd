<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'home'])->name('home');

Route::get('/contact-us', [LandingController::class, 'contactUs'])->name('contact-us');

Route::get('/about-us', [LandingController::class, 'aboutUs'])->name('about-us');
Route::get('/long-term-vision', [LandingController::class, 'longTermVision'])->name('long-term-vision');
Route::get('/business-enterprise', [LandingController::class, 'businessEnterprise'])->name('business-enterprise');
Route::get('/management-team', [LandingController::class, 'managementTeam'])->name('management-team');
Route::get('/our-quality', [LandingController::class, 'ourQuality'])->name('our-quality');
Route::get('/careers', [LandingController::class, 'careers'])->name('careers');

Route::get('/support-center', [LandingController::class, 'supportCenter'])->name('support-center');
Route::get('/faq', [LandingController::class, 'faq'])->name('faq');

Route::get('/company-news', [LandingController::class, 'companyNews'])->name('company-news');
Route::get('/resources', [LandingController::class, 'resources'])->name('resources');

Route::get('/land-freight', [LandingController::class, 'landFreight'])->name('land-freight');
Route::get('/sea-freight', [LandingController::class, 'seaFreight'])->name('sea-freight');
Route::get('/air-freight', [LandingController::class, 'airFreight'])->name('air-freight');
Route::get('/warehouse', [LandingController::class, 'warehouse'])->name('warehouse');

Route::get('/main-business-summary', [LandingController::class, 'mainBusinessSummary'])->name('main-business-summary');
Route::get('/supply-chain-solution', [LandingController::class, 'supplyChainSolution'])->name('supply-chain-solution');
Route::get('/a-to-z', [LandingController::class, 'aToZ'])->name('a-to-z');
Route::get('/consulting-and-quotation', [LandingController::class, 'consultingAndQuotation'])->name('consulting-and-quotation');
Route::get('/service-usage-process', [LandingController::class, 'serviceUsageProcess'])->name('service-usage-process');
