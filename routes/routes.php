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
Route::group(['middleware' => ['auth']], function() {
  // Categoy Transaction
  Route::get('/categorytransactions', 'CategoryTransactionController@index')->name('categorytransactions.index');
  Route::get('/categorytransactions/create', 'CategoryTransactionController@create')->name('categorytransactions.create');
  Route::post('/categorytransactions', 'CategoryTransactionController@store')->name('categorytransactions.store');
  Route::get('/categorytransactions/{id}', 'CategoryTransactionController@show')->name('categorytransactions.show');
  Route::post('/categorytransactions/{id}', 'CategoryTransactionController@update')->name('categorytransactions.update');
  Route::get('/categorytransactions/{id}/delete', 'CategoryTransactionController@destroy')->name('categorytransactions.destroy');

  // Bank
  Route::get('/banks', 'BankController@index')->name('banks.index');
  Route::get('/banks/create', 'BankController@create')->name('banks.create');
  Route::post('/banks', 'BankController@store')->name('banks.store');
  Route::get('/banks/{id}', 'BankController@show')->name('banks.show');
  Route::post('/banks/{id}', 'BankController@update')->name('banks.update');
  Route::get('/banks/{id}/delete', 'BankController@destroy')->name('banks.destroy');

  // Debt
  Route::get('/debts', 'DebtController@index')->name('debts.index');
  Route::get('/debts/create', 'DebtController@create')->name('debts.create');
  Route::post('/debts', 'DebtController@store')->name('debts.store');
  Route::get('/debts/{id}', 'DebtController@show')->name('debts.show');
  Route::post('/debts/{id}', 'DebtController@update')->name('debts.update');
  Route::get('/debts/{id}/delete', 'DebtController@destroy')->name('debts.destroy');

  // Active
  Route::get('/actives', 'ActiveController@index')->name('actives.index');
  Route::get('/actives/create', 'ActiveController@create')->name('actives.create');
  Route::post('/actives', 'ActiveController@store')->name('actives.store');
  Route::get('/actives/{id}', 'ActiveController@show')->name('actives.show');
  Route::post('/actives/{id}', 'ActiveController@update')->name('actives.update');
  Route::get('/actives/{id}/delete', 'ActiveController@destroy')->name('actives.destroy');

  // Service
  Route::get('/services', 'ServiceController@index')->name('services.index');
  Route::get('/services/create', 'ServiceController@create')->name('services.create');
  Route::post('/services', 'ServiceController@store')->name('services.store');
  Route::get('/services/{id}', 'ServiceController@show')->name('services.show');
  Route::post('/services/{id}', 'ServiceController@update')->name('services.update');
  Route::get('/services/{id}/delete', 'ServiceController@destroy')->name('services.destroy');

  // TypeActive
  Route::get('/typeactives', 'TypeactiveController@index')->name('typeactives.index');
  Route::get('/typeactives/create', 'TypeactiveController@create')->name('typeactives.create');
  Route::post('/typeactives', 'TypeactiveController@store')->name('typeactives.store');
  Route::get('/typeactives/{id}', 'TypeactiveController@show')->name('typeactives.show');
  Route::post('/typeactives/{id}', 'TypeactiveController@update')->name('typeactives.update');
  Route::get('/typeactives/{id}/delete', 'TypeactiveController@destroy')->name('typeactives.destroy');
  
  // Invoice
  Route::get('/invoices', 'InvoiceController@index')->name('invoices.index');
  Route::get('/invoices/create', 'InvoiceController@create')->name('invoices.create');
  Route::post('/invoices', 'InvoiceController@store')->name('invoices.store');
  Route::get('/invoices/{serial}', 'InvoiceController@show')->name('invoices.show');
  Route::post('/invoices/{serial}', 'InvoiceController@update')->name('invoices.update');
  Route::get('/invoices/{serial}/delete', 'InvoiceController@destroy')->name('invoices.destroy');

  //Address
  Route::get('/addresses', 'AddressController@index')->name('addresses.index');
  Route::get('/addresses/create', 'AddressController@create')->name('addresses.create');
  Route::post('/addresses', 'AddressController@store')->name('addresses.store');
  Route::get('/addresses/{id}', 'AddressController@show')->name('addresses.show');
  Route::post('/addresses/{id}', 'AddressController@update')->name('addresses.update');
  Route::get('/addresses/{id}/delete', 'AddressController@destroy')->name('addresses.destroy');

  // Type Transactions
  Route::get('/typetransactions', 'TypeTransactionController@index')->name('typetransactions.index');
  Route::get('/typetransactions/create', 'TypeTransactionController@create')->name('typetransactions.create');
  Route::post('/typetransactions', 'TypeTransactionController@store')->name('typetransactions.store');
  Route::get('/typetransactions/{id}', 'TypeTransactionController@show')->name('typetransactions.show');
  Route::post('/typetransactions/{id}', 'TypeTransactionController@update')->name('typetransactions.update');
  Route::get('/typetransactions/{id}/delete', 'TypeTransactionController@destroy')->name('typetransactions.destroy');

  // Subcategory Transactions
  Route::get('/subcategorytransactions', 'SubcategoryTransactionController@index')->name('subcategorytransactions.index');
  Route::get('/subcategorytransactions/create', 'SubcategoryTransactionController@create')->name('subcategorytransactions.create');
  Route::post('/subcategorytransactions', 'SubcategoryTransactionController@store')->name('subcategorytransactions.store');
  Route::get('/subcategorytransactions/{id}', 'SubcategoryTransactionController@show')->name('subcategorytransactions.show');
  Route::post('/subcategorytransactions/{id}', 'SubcategoryTransactionController@update')->name('subcategorytransactions.update');
  Route::get('/subcategorytransactions/{id}/delete', 'SubcategoryTransactionController@destroy')->name('subcategorytransactions.destroy');

  // Profile
  Route::get('/profile', 'ProfileController@index')->name('profile.index');
  Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
  Route::post('/profile', 'ProfileController@store')->name('profile.store');
  Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');
  Route::post('/profile/{id}', 'ProfileController@update')->name('profile.update');
  Route::get('/profile/{id}/delete', 'ProfileController@destroy')->name('profile.destroy');

  // Beneficiary
  Route::get('/beneficiaries', 'BeneficiaryController@index')->name('beneficiaries.index');
  Route::get('/beneficiaries/create', 'BeneficiaryController@create')->name('beneficiaries.create');
  Route::post('/beneficiaries', 'BeneficiaryController@store')->name('beneficiaries.store');
  Route::get('/beneficiaries/{id}', 'BeneficiaryController@show')->name('beneficiaries.show');
  Route::post('/beneficiaries/{id}', 'BeneficiaryController@update')->name('beneficiaries.update');
  Route::get('/beneficiaries/{id}/delete', 'BeneficiaryController@destroy')->name('beneficiaries.destroy');

  // Type Sale
  Route::get('/typesale', 'TypeSaleController@index')->name('typesale.index');
  Route::get('/typesale/create', 'typeSaleController@create')->name('typesale.create');
  Route::post('/typesale', 'typeSaleController@store')->name('typesale.store');
  Route::get('/typesale/{id}', 'typeSaleController@show')->name('typesale.show');
  Route::post('/typesale/{id}', 'typeSaleController@update')->name('typesale.update');
  Route::get('/typesale/{id}/delete', 'typeSaleController@destroy')->name('typesale.destroy');

  // Type Product
  Route::get('/typeproduct', 'TypeProductController@index')->name('typeproduct.index');
  Route::get('/typeproduct/create', 'TypeProductController@create')->name('typeproduct.create');
  Route::post('/typeproduct', 'TypeProductController@store')->name('typeproduct.store');
  Route::get('/typeproduct/{id}', 'TypeProductController@show')->name('typeproduct.show');
  Route::post('/typeproduct/{id}', 'TypeProductController@update')->name('typeproduct.update');
  Route::get('/typeproduct/{id}/delete', 'TypeProductController@destroy')->name('typeproduct.destroy');

  // Sale
  Route::get('/sale', 'SaleController@index')->name('sale.index');
  Route::get('/sale/create', 'SaleController@create')->name('sale.create');
  Route::post('/sale', 'SaleController@store')->name('sale.store');
  Route::get('/sale/{id}', 'SaleController@show')->name('sale.show');
  Route::post('/sale/{id}', 'SaleController@update')->name('sale.update');
  Route::get('/sale/{id}/delete', 'SaleController@destroy')->name('sale.destroy');

// Payroll
  Route::get('/payroll', 'PayrollController@index')->name('payroll.index');
  Route::get('/payroll/create', 'PayrollController@create')->name('payroll.create');
  Route::post('/payroll', 'PayrollController@store')->name('payroll.store');
  Route::get('/payroll/{serial}', 'PayrollController@show')->name('payroll.show');
  Route::post('/payroll/{serial}', 'PayrollController@update')->name('payroll.update');
  Route::get('/payroll/{serial}/delete', 'payrollController@destroy')->name('payroll.destroy');

  // Task
  Route::get('/sask', 'SaskController@index')->name('sask.index');
  Route::get('/sask/create', 'SaskController@create')->name('sask.create');
  Route::post('/sask', 'SaskController@store')->name('sask.store');
  Route::get('/sask/{id}', 'SaskController@show')->name('sask.show');
  Route::post('/sask/{id}', 'SaskController@update')->name('sask.update');
  Route::get('/sask/{id}/delete', 'SaskController@destroy')->name('sask.destroy');

  // Products
  Route::resource('products', ProductController::class);

  // Language
  Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');

  // Currency
  Route::get('currency/{currency}', 'CurrencyController@swap')->name('currency.swap');

  // Transaction
  Route::get('/transactions', 'TransactionController@index')->name('transactions.index');
  Route::get('/transactions/create', 'TransactionController@create')->name('transactions.create');
  Route::post('/transactions', 'TransactionController@store')->name('transactions.store');
  Route::get('/transactions/{id}', 'TransactionController@show')->name('transactions.show');
  Route::post('/transactions/{id}', 'TransactionController@update')->name('transactions.update');
  Route::get('/transactions/{id}/delete', 'TransactionController@destroy')->name('transactions.destroy');

  // Categoy active
  Route::get('/categoryactives', 'CategoryActiveController@index')->name('categoryactives.index');
  Route::get('/categoryactives/create', 'CategoryActiveController@create')->name('categoryactives.create');
  Route::post('/categoryactives', 'CategoryActiveController@store')->name('categoryactives.store');
  Route::get('/categoryactives/{id}', 'CategoryActiveController@show')->name('categoryactives.show');
  Route::post('/categoryactives/{id}', 'CategoryActiveController@update')->name('categoryactives.update');
  Route::get('/categoryactives/{id}/delete', 'CategoryActiveController@destroy')->name('categoryactives.destroy');
});
