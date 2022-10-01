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

Route::post('auth', 'Auth\LoginController@validateLogin')->name("login.auth");

Route::get('/register','Auth\RegisterController@showRegistrationForm')->name("register.view");
Route::post('/register/submit', 'Auth\RegisterController@validateRegister')->name("register.auth");




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/password', 'FileController@changePasswordView')->name('password.change.view');
Route::post('/password/change', 'FileController@changePassword')->name('password.change');

Route::prefix('schedule')->group(function () {
    Route::name('schedule.')->group(function () {
        Route::get('index', 'ScheduleController@dataSchedule')->name('show');
        Route::get('index/ROB', 'ScheduleController@dataScheduleROB')->name('show.ROB');
        Route::get('index/ROM', 'ScheduleController@dataScheduleROM')->name('show.ROM');
        Route::get('index/ROH', 'ScheduleController@dataScheduleROH')->name('show.ROH');
        Route::get('show/add/schedule', 'ScheduleController@showAddSchedule')->name('show.add.schedule');
        Route::post('add', 'ScheduleController@addSchedule')->name('add');
        Route::get('show/baytype/{id}', 'ScheduleController@showAddBayType')->name('show.baytype');
        Route::get('show/equipmentout/{id}', 'ScheduleController@showAddEquipmentOut')->name('show.equipmentout');
    });
});
