<?php

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


//Trade route
//Route::view('/', 'pages.index')->name('index');
Route::get('/', 'AbstractController@homepage')->name('index');

Route::view('about', 'pages.about')->name('about');
Route::view('faq', 'pages.faq')->name('faq');
Route::view('rules', 'pages.rules')->name('rules');
Route::view('contact-us', 'pages.contact')->name('contact');


Route::get('contact','ContactFormController@create')->name('contact');
Route::post('contact-us/store','ContactFormController@store')->name('contact.store');


Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('dashboard', 'UserController@dashboard')->name('user_dashboard');

    Route::get('withdrawal/history', 'WithdrawController@index')->name('user_withdraw_history');
    Route::get('withdrawal', 'WithdrawController@create')->name('user_withdrawal');
    Route::post('withdraw-fund/store', 'WithdrawController@store')->name('user_withdraw.store');

    Route::get('deposit', 'DepositController@plans')->name('user_deposits');
    Route::get('deposit/{slug}/fund', 'DepositController@plan_details')->name('plan_details');
    Route::get('transactionXAIR3{id}x$532xz', 'DepositController@deposit_details')->name('user_deposits.view');
    Route::post('transaction/proof', 'DepositController@process_deposit')->name('user_deposits.store');
    Route::post('deposit/fund/{slug}','DepositController@make_deposit')->name('deposit.store');
    Route::get('deposit-history', 'DepositController@deposit_history')->name('user_deposit_list');
    Route::get('my-plans', 'DepositController@my_plans')->name('user_plans');


    Route::get('security', 'UserController@security')->name('security');
    Route::post('security/store', 'UserController@update')->name('password_update');
    Route::get('profile', 'UserController@user_details')->name('user_details');
    Route::post('profile/store', 'UserController@personal_info_store')->name('personal_info_store');
    Route::post('kyc/store', 'UserController@kyc_store')->name('kyc_store');


    Route::get('my-earnings', 'DepositController@earning')->name('user_earnings');

    Route::get('referrals', function () {
        return view('dashboard.referrals');
    })->name('user_referrals')->middleware('auth');

    Route::resource('share', 'ShareController');

    Route::get('referral', "UserController@all_referrals")->name('all_referrals');
    Route::get('messages', 'UserController@messages')->name('messages');
    Route::get('messages/{id}details', 'UserController@show_messages')->name('show_messages');


//    Route::get('test/', "UserController@testFunction");

});





