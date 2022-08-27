<?php
use Illuminate\Support\Facades\Route;

Route::resource('investment-plans', 'InvestmentPlanController');

Route::get('dashboard', 'AdminController@index')->name('admin-dashboard');
Route::get('all-users', 'AdminController@listUsers')->name('manage-users');
Route::get('user-details/{id}', 'AdminController@show')->name('show-user')->where('id', '[0-9]+');
Route::get('user-withdraw/details/{id}', 'AdminController@user_withdraw')->name('user_withdraw.show')->where('id', '[0-9]+');

Route::get('/user_verify/{user}', 'AdminController@verifyUser')->name('verify_user')->middleware('auth');
Route::get('/suspend_user/{user}', 'AdminController@suspendUser')->name('suspend_user')->middleware('auth');
Route::get('/approve/{withdraw}', 'AdminController@approve_withdraw')->name('approve_withdraw')->middleware('auth');
Route::get('/reject/{id}', 'AdminController@reject_withdraw')->name('reject_withdraw')->middleware('auth');
Route::get('/withdrawals', 'AdminController@users_withdraw')->name('withdraw.admin')->middleware('auth');
Route::get('withdraw-details/{id}', 'AdminController@show_withdraw')->name('show-withdraw')->where('id', '[0-9]+');
Route::get('/withdrawal/{id}', 'AdminController@withdraw_single')->name('single_withdraw.view');
Route::post('/withdrawal/update-hash/{id}', 'AdminController@update_hash')->name('update_hash.store');
Route::post('withdrawal/send-bonus/{id}', 'AdminController@update_acct')->name('update_acct.store');
//Route::delete('withdrawal/{id}/delete', 'AdminController@delete_withdrawal')->name('delete_withdrawal')->where('id', '[0-9]+');


Route::get('user-deposit/details/{id}', 'AdminDeposit@show_user_deposit')->name('user_deposit')->where('id', '[0-9]+');
Route::get('/approve/deposit/{deposit}', 'AdminDeposit@approve_deposit')->name('approve_deposit')->middleware('auth');
Route::get('/deposit', 'AdminDeposit@all_deposits')->name('deposit.admin')->middleware('auth');
Route::get('withdraw-details/{id}', 'AdminDeposit@show_deposit')->name('show-deposit')->where('id', '[0-9]+');
Route::get('/reject/deposit/{deposit_reject}', 'AdminDeposit@reject_deposit')->name('reject_deposit')->middleware('auth');
Route::get('/deposit/transaction={id}', 'AdminDeposit@deposit_view_single')->name('single_deposit.view');

Route::delete('user/{id}/delete', 'AdminController@delete_user')->name('delete_user');
Route::delete('withdrawal/{id}/delete', 'AdminController@delete_withdrawal')->name('delete_withdrawal');
Route::delete('deposit/{id}/delete', 'AdminDeposit@delete_deposit')->name('delete_deposit');

Route::post('fund/account/{id}', 'AdminController@fund_account')->name('fund_account');
Route::post('send/bonus/{id}', 'AdminController@bonus')->name('bonus');
//
Route::get('user/message/{id}', 'MessagesController@index')->name('user_message')->where('id', '[0-9]+');
Route::get('user/message/create/{id}', 'MessagesController@create')->name('create');
Route::post('user/message/store', 'MessagesController@store')->name('msg_store');
Route::get('user/message/details/{id}', 'MessagesController@show')->name('msg_show');
Route::delete('user/message/delete/{id}', 'MessagesController@destroy')->name('delete_msg');

Route::get('user/verify_user/{id}', 'AdminController@verify_user')->name('verify_user');

//Setting route
Route::get('setting', "SettingsController@create")->name('setting.create');
Route::post('setting/store', "SettingsController@store")->name('setting.store');

Route::get('referrals', 'ReferralController@index')->name('ref.index')















?>
