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

//travelia controller starts
Route::get('/travelia','TraveliaController@index');
Route::get('/travelia/destinations/{division}','TraveliaController@destinations');
Route::post('/travelia','TraveliaController@registration');

//travelia controller ends


//login controller starts
Route::post('/login','LoginController@index');
//login controller ends

//logout controller starts
Route::get('/logout','LogoutController@index');
//logout controller ends

//admin controller starts
Route::group(['middleware'=>['type']], function(){
    Route::get('/admin','AdminController@index');

    Route::get('/admin/adminTraveller','AdminController@adminTravellerinfo');
    Route::post('/admin/adminTraveller','AdminController@adminUserinfoPost');
    Route::get('/admin/adminTravelGuide','AdminController@adminTravelGuiderinfo');
    Route::post('/admin/adminTravelGuide','AdminController@adminUserinfoPost');
    Route::get('/admin/adminHotelEmp','AdminController@adminHotelempinfo');
    Route::post('/admin/adminHotelEmp','AdminController@adminUserinfoPost');
    Route::get('/admin/adminCustCare','AdminController@adminCustcareinfo');
    Route::post('/admin/adminCustCare','AdminController@adminUserinfoPost');
    Route::get('/admin/adminHotelinfo','AdminController@adminHotelinfo');
    Route::post('/admin/adminHotelinfo','AdminController@adminHotelinfoPost');
    Route::get('/admin/adminTravelPlace','AdminController@adminTravelPlace');
    Route::post('/admin/adminTravelPlace','AdminController@adminTravelPlacePost');

    Route::get('/admin/adminAddCust','AdminController@adminAddCust');
    Route::post('/admin/adminAddCust','AdminController@adminAddCustPost');
    Route::get('/admin/adminProfile','AdminController@adminProfile');
    Route::post('/admin/adminProfile','AdminController@adminProfilePost');
    Route::get('/admin/adminCustSalarySheet','AdminController@custSalarySheet');
    Route::get('/admin/adminCustSalarySheet','AdminController@custSalarySheetPost');
    Route::get('/admin/adminServiceCharge','AdminController@serviceCharge');
    Route::post('/admin/adminServiceCharge','AdminController@serviceChargePost');
});	

//admin controller ends


//guider controller starts
Route::group(['middleware'=>['type']], function(){
    Route::get('/guider','GuiderController@index');
    Route::get('/guider/guiderProfile','GuiderController@profile');
    Route::post('/guider/guiderProfile','GuiderController@profilePost');
    Route::get('/guider/guiderAddPlace','GuiderController@addPlace');
    Route::get('/guider/guiderMyPlaces','GuiderController@myPlace');
    Route::post('/guider/guiderMyPlaces','GuiderController@myPlacePost');
    Route::get('/guider/guiderUpdatePlace/{id}','GuiderController@updatePlace')->name('guider.updatePlace');
    Route::post('/guider/guiderUpdatePlace/{id}','GuiderController@updatePlacePost')->name('guider.updatePlace');
    Route::post('/guider/guiderAddPlace','GuiderController@addPlacePost');
    Route::get('/guider/guiderDestinations/{division}','GuiderController@destinations');
});	

//guider controller ends

//traveller controller starts
Route::group(['middleware'=>['type']], function(){
    Route::get('/traveller','TravellerController@index');
    Route::get('/traveller/travellerProfile','TravellerController@profile');
    Route::post('/traveller/travellerProfile','TravellerController@profilePost');
    Route::get('/traveller/travellerDestination/{division}','TravellerController@destination');
    Route::post('/traveller/travellerDestination/{division}','TravellerController@destinationPost');
    Route::post('/traveller/travellerHotels','TravellerController@hotelPost');
    Route::post('/traveller/travellerBooking','TravellerController@bookingPost');
    Route::get('/traveller/travellerInvoice','TravellerController@invoice')->name('traveller.invoice');
    Route::post('/traveller/travellerInvoice','TravellerController@invoicePost')->name('traveller.invoice');
    Route::get('/traveller/travellerMyBooking','TravellerController@mybooking');
    Route::post('/traveller/travellerMyBooking','TravellerController@mybookingPost');
});	
//traveller controller ends

//hotel part starts
Route::group(['middleware'=>['type']], function(){
    Route::get('/hotel','HotelController@index');
    Route::post('/hotel','HotelController@indexPost');
    Route::get('/hotel/hotelProfile','HotelController@profile');
    Route::post('/hotel/hotelProfile','HotelController@profilePost');
    Route::get('/hotel/hotelAdd','HotelController@hotelAdd');
    Route::post('/hotel/hotelAdd','HotelController@hotelAddPost');
    Route::get('/hotel/hotelReq','HotelController@hotelReq');
    Route::post('/hotel/hotelReq','HotelController@hotelReqPost');
});	
//hotel part ends