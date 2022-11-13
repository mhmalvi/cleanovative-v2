<?php

use App\Http\Controllers\CommercialBookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriptionController;
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

Route::view('/', 'pages.home')->name('home');

Route::view('services', 'pages.services')->name('services');

Route::view('service_details', 'pages.service_details')->name('service_details');

Route::view('about_us', 'pages.about_us')->name('about_us');

Route::view('faq', 'pages.faq')->name('faq');

Route::view('terms_and_conditions', 'pages.terms_and_conditions')->name('terms_and_conditions');

Route::view('privacy_policy', 'pages.privacy_policy')->name('privacy_policy');

Route::view('contact', 'pages.contact')->name('contact');

// Route::get('services/{service}', [ServiceController::class, 'details'])->name('services.details');

Route::view('services/house-cleaning', 'pages.services.house_cleaning')->name('service.house_cleaning');

Route::view('services/deep-cleaning', 'pages.services.deep_cleaning')->name('service.deep_cleaning');

Route::view('services/end-of-lease-cleaning', 'pages.services.end_of_lease_cleaning')->name('service.end_of_lease_cleaning');

Route::view('services/office-cleaning', 'pages.services.office_cleaning')->name('service.office_cleaning');

Route::view('services/party-event-cleaning', 'pages.services.party_event_cleaning')->name('service.party_event_cleaning');

Route::view('services/construction-cleaning', 'pages.services.construction_cleaning')->name('service.construction_cleaning');

Route::view('services/strata-cleaning', 'pages.services.strata_cleaning')->name('service.strata_cleaning');

Route::view('services/other-cleaning', 'pages.services.other_cleaning')->name('service.other_cleaning');

Route::view('book-now', 'pages.book_now')->name('book_now');

Route::view('gift-cards', 'pages.gift_cards')->name('gift_cards');

Route::view('signin', 'pages.signin')->name('signin');

Route::view('signup', 'pages.signup')->name('signup');

Route::view('full-checklist', 'pages.full_checklist')->name('full_checklist');

/**
 * For sending enquiry through contact form
 */
Route::post('contact', [ContactController::class, 'sendEnquiry']);

Route::post('booking', [CommercialBookingController::class, 'sendEnquiry']);

Route::view('test', 'mails.contact');

Route::post('subscribe', [SubscriptionController::class, 'subNewsletter']);

Route::view('nl-temp', 'mails.newsletter_subscribed');
