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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/fuelpurchase', 'FuelPurchaseController');

Route::resource('/fuel', 'FuelController');

Route::resource('/lubricant', 'LubricantController');

Route::resource('/pumper', 'PumperController');

Route::resource('/pump', 'PumpController');

Route::resource('/debtor', 'DebtorController');

Route::resource('/tank', 'TankController');

Route::resource('/fuelsale', 'FuelSaleController');

Route::resource('/lubricantsale', 'LubricantSaleController');

Route::resource('/lubricantpurchase', 'LubricantPurchaseController');

Route::resource('/otherpurchase', 'OtherPurchaseController');

Route::resource('/bank', 'BankDepositController');

Route::resource('/deposit_debtor', 'DepositDebtorController');




