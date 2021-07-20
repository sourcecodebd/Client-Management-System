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
    //return view('welcome');
    echo "Welcome";
});

Route::get('/registration/customer', 'CRegController@index')->name('Creg.index');
Route::post('/registration/customer', 'CRegController@Creg');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index'])->name('home.index');

    // From Customer Section: Free to access

    Route::get('/home/customerlist', 'HomeController@Clist')->name('home.Clist');
    Route::get('/home/edit/customer/{id}', 'HomeController@Cedit')->name('home.Cedit');
    Route::post('/home/edit/customer/{id}', 'HomeController@Cupdate');
    Route::get('/home/details/customer/{id}', 'HomeController@Cshow')->name('home.Cshow');

    // From Sales Section: Free to access

    Route::get('/system/sales/sales_log', 'Physical_Store_Controller@salesLoglist')->name('system.salesLog');
    Route::get('/system/sales/social_media', 'Physical_Store_Controller@socialMedialist')->name('system.socialMedia');
    Route::get('/system/sales/ecommerce', 'Physical_Store_Controller@ecommercelist')->name('system.ecommerce');

    // From Vendor Section: Free to access

    Route::get('/system/product_management/existing_products','ProductController@Elist')->name('product.Elist');
    Route::get('/system/product_management/upcoming_products','ProductController@Ulist')->name('product.Ulist');

    // Admin Section: Restriction to access

        Route::group(['middleware'=> 'admin'], function(){

        Route::get('/home/create/customer', 'HomeController@Ccreate')->middleware('sess')->name('home.Ccreate');
        Route::post('/home/create/customer', 'HomeController@Cstore');

        Route::get('/home/delete/customer/{id}', 'HomeController@Cdelete')->name('home.Cdelete');
        Route::post('/home/delete/customer/{id}', 'HomeController@Cdestroy');

    });

    // Sales Section: Restriction to access

    Route::group(['middleware'=> 'sales'], function(){

        Route::get('/system/sales/physical_store', 'Physical_Store_Controller@physicalCreate')->name('system.physicalCreate');
        Route::post('/system/sales/physical_store', 'Physical_Store_Controller@physicalStore');

        Route::get('/system/sales/sales_log/sold', 'Physical_Store_Controller@soldStat')->name('system.sold');
        Route::get('/system/sales/sales_log/pending', 'Physical_Store_Controller@pendingStat')->name('system.pending');

        Route::get('/system/sales/physical_store/download_sales-data_PDF', 'Physical_Store_Controller@downloadPDF')->name('downloadPDF');
        Route::get('/system/sales/physical_store/download_sales-data_PDF/sold', 'Physical_Store_Controller@soldPDF')->name('soldPDF');
        Route::get('/system/sales/physical_store/download_sales-data_PDF/pending', 'Physical_Store_Controller@pendingPDF')->name('pendingPDF');

        Route::get('/system/sales/physical_store/download_sales-data', 'Physical_Store_Controller@downloadExcel')->name('downloadExcel');
        Route::get('/system/sales/physical_store/upload_sales-data', 'Physical_Store_Controller@uploadExcelview');
        Route::post('/system/sales/physical_store/upload_sales-data', 'Physical_Store_Controller@upload')->name('uploadExcel');

    });

    // Vendor Section: Restriction to access

    Route::group(['middleware'=> 'vendor'], function(){

        Route::get('/product_management','ProductController@index')->name('system.product');

        Route::get('/system/product_management/edit/existing_products/{id}','ProductController@Eedit')->name('product.Eedit');
        Route::post('/system/product_management/edit/existing_products/{id}','ProductController@Eupdate');
        Route::get('/system/product_management/delete/existing_products/{id}','ProductController@Edelete')->name('product.Edelete');
        Route::post('/system/product_management/delete/existing_products/{id}','ProductController@Edestroy');
        Route::get('/system/product_management/details/existing_products/{id}/product_name/{example}','ProductController@Eshow')->name('product.Eshow');
    
        
        Route::get('/system/product_management/edit/upcoming_products/{id}','ProductController@Uedit')->name('product.Uedit');
        Route::post('/system/product_management/edit/upcoming_products/{id}','ProductController@Uupdate');
        Route::get('/system/product_management/delete/upcoming_products/{id}','ProductController@Udelete')->name('product.Udelete');
        Route::post('/system/product_management/delete/upcoming_products/{id}','ProductController@Udestroy');
        Route::get('/system/product_management/details/upcoming_products/{id}/product_name/{example}','ProductController@Ushow')->name('product.Ushow');
    
        Route::get('/system/product_management/add_product','ProductController@Pcreate')->name('product.Pcreate');
        Route::post('/system/product_management/add_product','ProductController@Pstore');
    });

    

    Route::resource('/product', 'ProductControllerOld');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});