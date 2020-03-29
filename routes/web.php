<?php

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
  return view('welcome');
});
 
Auth::routes();

// Normal Page
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subscription', 'HomeController@subscription')->name('subscription');
//Route::get('/Video', 'HomeController@subscription')->name('subscription');


// Admin Page
Route::get('/PaymentsMethod', 'OtherController@UserSubscription');
Route::get('/UploadVideo', 'VideoController@Upload')->name('UploadVideo');
Route::POST('/VideoUploaded', 'VideoController@Store')->name('VideoUploaded');
Route::get('/CustomerList/', 'ListofRecordsController@CustomerIndex')->name('List of Customer');
Route::get('/AdminList/', 'ListofRecordsController@AdminIndex')->name('List of Admins');
Route::get('/Promote/{UserLevel}/{id}', 'PromoteController@PromoteEdit')->where('id', '[0-9]+')->name('Promote Customer as Admin/Demote Admin as Customer');
Route::get('/Approve/Customer/{ApproveTag}/{id}', 'PromoteController@ApproveCustomerEdit')->name('Approve the Subscription of Customer');


// Customer Page
Route::get('/subscribetoPlan/{subscriptionID}', 'UserSubscriptionController@store');
Route::get('/PaymentsMethod/{subscriptionID}', 'UserSubscriptionController@view');
Route::get('/Video/Posted/{VideoID}', 'VideoPostedController@index')->name('Posted Video Site');


// List for Customer/Guest/Admin
Route::get('/VideoList', 'ListofRecordsController@VideoIndex')->name('List of Posted Video');
