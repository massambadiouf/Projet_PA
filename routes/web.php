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

Route::get('/nnn', function () { return redirect('hrms/index'); });

/* PA */
Route::get('hrms', function ()                { return redirect('hrms/index'); });
Route::get('hrms/index',                      'HrmsController@index')->name('hrms.index');
Route::get('hrms/detail_pa',                      'HrmsController@detail_pa')->name('hrms.detail_pa');
Route::get('hrms/modifier_pa',                      'HrmsController@modifier_pa')->name('hrms.modifier_pa');
Route::get('hrms/utilisateur',                      'HrmsController@utilisateur')->name('hrms.utilisateur');

Route::get('hrms/modifier_utilisateur',                      'HrmsController@modifier_utilisateur')->name('hrms.modifier_utilisateur');


/* Authentication  */
Route::get('authentication', function ()        { return redirect('authentication/login'); });
Route::get('/',              'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register',           'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgotpassword',     'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
Route::get('authentication/error404',           'AuthenticationController@error404')->name('authentication.error404');
Route::get('authentication/error500',           'AuthenticationController@error500')->name('authentication.error500');

/* Chat app  */
Route::get('chatapp', function ()                 { return redirect('chatapp/chat'); });
Route::get('chatapp/chat',                      'ChatappController@chat')->name('chatapp.chat');