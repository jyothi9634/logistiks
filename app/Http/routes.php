<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('memberRegistration','RegistrationController@index');
Route::any('memberRegistration/privacyPolicy','RegistrationController@privacyPolicy');
Route::any('memberRegistration/termsOfuse','RegistrationController@termsOfuse');
Route::any('memberRegistration/cancellationPolicy','RegistrationController@cancellationPolicy');

Route::any('registration/store','RegistrationController@store');
//Route::any('individualRegistration','RegistrationController@indvReg');
Route::any('validateId','RegistrationController@validateId');

Route::any('/getlocationdetails','RegistrationController@getlocationdetails');
Route::any('individualRegistration/store','RegistrationController@storeIndvReg');
Route::any('individualRegistration/confirmRegistration','RegistrationController@confirmRegistration');
Route::any('userSubscription','RegistrationController@userSubscription');
Route::any('marketplaceRegistration/{registered_id}','RegistrationController@marketplaceRegistration');
Route::any('/otptest' ,'RegistrationController@otptest'); 
Route::any('validateUserEmail','RegistrationController@validateUserEmail');
Route::any('sendOtp','RegistrationController@sendOtp');
Route::any('saveMarketplaceReg','RegistrationController@saveMarketplaceReg');
Route::any('/checkAuth','LoginController@checkAuth');
Route::any('dashboard','LoginController@dashboard');
Route::any('/forgotPassword','LoginController@forgotPassword');
Route::any('/sendMail','LoginController@sendMail');
Route::any('/inviteUser','LoginController@inviteUser');

Route::any('/user_activation','RegistrationController@userActivation');
Route::any('/new_user_activation','RegistrationController@newuserActivation');
Route::any('paymentPost/{buyer_user_id}','PaymentPostController@paymentPost');
Route::any('paymentResponse','PaymentPostController@paymentResponse');
Route::any('paymentConfirm','PaymentPostController@paymentConfirm');
Route::any('paymentForBook','PaymentPostController@paymentForBook');
Route::any('paymentBookResponse','PaymentPostController@paymentBookResponse');
Route::any('thankYouOrder','PaymentPostController@thankYouOrder');









Route::any('logistiks/Buyersearch','LogistiksController@buyerSearch');

Route::any('/buyer/search' ,'BuyerSearchController@index');  

Route::any('/buyer/srchPost' ,'BuyerSearchController@buyerSearch');  
Route::any('/buyer/bookNow/{seller_user_id}/{post_id}' ,'BuyerSearchController@bookNow');  
Route::any('/buyer/Cart/{buyer_user_id}/{seller_user_id}/{post_id}' ,'BuyerSearchController@Cart');  
Route::any('/buyer/buyerGsa/{buyer_user_id}/{seller_user_id}' ,'BuyerSearchController@buyerGsa');  
Route::any('/buyer/buyerConfirmation/{buyer_user_id}' ,'BuyerSearchController@buyerConfirmation');  
Route::any('/buyer/buyerBilling' ,'BuyerSearchController@buyerBilling');
Route::any('/buyer/deleteOrder/{seller_user_id}/{buyer_user_id}/{post_id}/{order_id}' ,'BuyerSearchController@deleteOrder'); 
Route::any('/SellerRateCard','SellerPostController@index');
Route::post('/check','SellerPostController@check');
Route::any('/user/logOut','LoginController@logOut');



Route::any('buyerFtlFilter', 'BuyerSearchController@buyerFtlFilter');
Route::any('getUserDeatils', 'BuyerSearchController@getUserDeatils');
Route::any('newMail', 'BuyerSearchController@newMail');

Route::any('/form','SellerPostController@index');
Route::any('/check','SellerPostController@check');



