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

Route::get('/payment',[\App\Http\Controllers\PaymentController::class,'payment'])->name('payment');
Route::post('/payment-initiate',[\App\Http\Controllers\PaymentController::class,'initiate'])->name('initiate');
Route::post('/payment-success',[\App\Http\Controllers\PaymentController::class,'success'])->name('paysu');
Route::get('/',[\App\Http\Controllers\User\UserController::class,'index'])->name('home');
Route::post('/form-fill',[\App\Http\Controllers\User\UserController::class,'formfill'])->name('form-fill');
Route::get('/about',[\App\Http\Controllers\User\UserController::class,'about'])->name('about');
Route::get('/contact',[\App\Http\Controllers\User\UserController::class,'contact'])->name('contact');
Route::get('/shop',[\App\Http\Controllers\User\UserController::class,'shop'])->name('shoping');
Route::get('/diet',[\App\Http\Controllers\User\UserController::class,'diet'])->name('diet');
Route::get('/category/{id}',[\App\Http\Controllers\User\UserController::class,'cat'])->name('cats');
Route::get('/cart/{id}',[\App\Http\Controllers\User\UserController::class,'cart'])->name('carts');
Route::get('/cart/delete-item/{id}',[\App\Http\Controllers\User\UserController::class,'deletecart'])->name('cartdel');
Route::get('/cart/checkout/{id}',[\App\Http\Controllers\User\UserController::class,'checkout'])->name('checking');
Route::post('/cart/checkout/{id}',[\App\Http\Controllers\User\UserController::class,'checkouter'])->name('checking');

Route::post('/buy/product',[\App\Http\Controllers\User\UserController::class,'razorpay'])->name('razo');

Route::post('/carting',[\App\Http\Controllers\User\UserController::class,'addcart'])->name('carting');
Route::post('/register',[\App\Http\Controllers\User\UserController::class,'store'])->name('register');
Route::get('/download/{id}',[\App\Http\Controllers\User\UserController::class,'pdf'])->name('download');
Route::post('/payment',[App\Http\Controllers\User\UserController::class,'payment'])->name('pay');
Route::get('/invoice/{id}',[App\Http\Controllers\User\UserController::class,'invoice'])->name('invo');
Route::get('/insert',[\App\Http\Controllers\Admin\AdminController::class,'insertreq'])->name('insertprd');
Route::post('/insert',[\App\Http\Controllers\Admin\AdminController::class,'insertproduct'])->name('insertprd');
Route::post('/supplementary',[\App\Http\Controllers\Admin\AdminController::class,'supplementary'])->name('suppliinsert');
Route::post('/brandinsert',[\App\Http\Controllers\Admin\AdminController::class,'brandin'])->name('brandinsert');
Route::post('/materialinsert',[\App\Http\Controllers\Admin\AdminController::class,'materialin'])->name('materialinsert');
Route::post('/merchantinsert',[\App\Http\Controllers\Admin\AdminController::class,'merchantin'])->name('merchantinsert');
Route::get('/display',[\App\Http\Controllers\Admin\AdminController::class,'displayall'])->name('display');
Route::get('/supply',[\App\Http\Controllers\Admin\AdminController::class,'supplement'])->name('suppli');
Route::get('/item/{id}',[\App\Http\Controllers\Admin\AdminController::class,'itemall'])->name('items');
Route::get('/update/{id}',[\App\Http\Controllers\Admin\AdminController::class,'updateitem'])->name('update');
Route::post('/update/{id}',[\App\Http\Controllers\Admin\AdminController::class,'updating'])->name('update');
Route::get('/delete/{id}',[\App\Http\Controllers\Admin\AdminController::class,'deleteitem'])->name('delete');
Route::get('/checkout',[\App\Http\Controllers\Admin\AdminController::class,'checkout'])->name('check');

/*Admin*/
Route::group(['prefix'=> 'admin','as' => 'admin.'],function(){
    Route::get('/login',[App\Http\Controllers\Admin\AdminLoginController::class,'login'])->name('login');
    Route::post('/login',[App\Http\Controllers\Admin\AdminLoginController::class,'auth'])->name('login');


    Route::group(['middleware' =>['auth:admin']], function (){
        Route::get('/',[App\Http\Controllers\Admin\AdminController::class,'dash'])->name('dash');
        Route::get('/reg',[App\Http\Controllers\Admin\AdminController::class,'reg'])->name('regis');
        Route::get('/mem',[App\Http\Controllers\Admin\AdminController::class,'mem'])->name('member');
        Route::get('/monthly-fee',[App\Http\Controllers\Admin\AdminController::class,'month'])->name('monthly');
        Route::get('/message',[App\Http\Controllers\Admin\AdminController::class,'message'])->name('message');
       // Route::get('/insert',[\App\Http\Controllers\Admin\AdminController::class,'insertreq'])->name('insertprd');
       Route::get('/addproduct',[App\Http\Controllers\Admin\AdminController::class,'product'])->name('pro');
        Route::post('/addproduct',[\App\Http\Controllers\Admin\AdminController::class,'insertproduct'])->name('pro');
        Route::post('/diet-add',[\App\Http\Controllers\Admin\AdminController::class,'insertdiet'])->name('insertdiet');

        Route::get('/pending-oders',[App\Http\Controllers\Admin\AdminController::class,'pending'])->name('pend');
        Route::get('/confirm-oders/{id}',[App\Http\Controllers\Admin\AdminController::class,'confirmodd'])->name('confirm');
        Route::post('/confirm-oders/{id}',[App\Http\Controllers\Admin\AdminController::class,'confirmoddd'])->name('confirm');
        Route::get('/delivered-oders',[App\Http\Controllers\Admin\AdminController::class,'delivered'])->name('deliver');
        Route::get('/add-merchant',[App\Http\Controllers\Admin\AdminController::class,'addmer'])->name('addmerch');
        Route::post('/add-merchant',[App\Http\Controllers\Admin\AdminController::class,'addmerr'])->name('addmerch');
        Route::get('/add-trainer',[App\Http\Controllers\Admin\AdminController::class,'addtrain'])->name('addtrainer');

        Route::post('/add-trainer',[App\Http\Controllers\Admin\AdminController::class,'addtrainn'])->name('addtrainer');

        Route::get('/confirm-product',[App\Http\Controllers\Admin\AdminController::class,'crmprd'])->name('prdconfirm');
        Route::get('/confirm-product/{id}',[App\Http\Controllers\Admin\AdminController::class,'crmprdd'])->name('prdconfirmm');
        Route::get('/logout',[App\Http\Controllers\Admin\AdminLoginController::class,'logout'])->name('logout');
    });

    });

    Route::group(['prefix'=> 'user','as' => 'user.'],function(){
        Route::get('/login',[App\Http\Controllers\User\UserloginController::class,'login'])->name('login');
        Route::post('/login',[App\Http\Controllers\User\UserloginController::class,'auth'])->name('login');
        Route::get('/register',[App\Http\Controllers\User\UserloginController::class,'register'])->name('signup');

        Route::post('/register',[App\Http\Controllers\User\UserloginController::class,'registersave'])->name('signup');
        Route::get('/download-invoice/{id}',[\App\Http\Controllers\User\UserController::class,'monthpdf'])->name('ppdf');


        Route::group(['middleware' =>['auth']], function (){


            Route::get('/',[App\Http\Controllers\User\UserController::class,'userdash'])->name('dash');
            Route::get('/monthly-fees-details',[App\Http\Controllers\User\UserController::class,'monthh'])->name('monthly-fee');
            Route::get('/monthly-fees',[App\Http\Controllers\User\UserController::class,'month'])->name('monthly');
            Route::post('/monthly-fees',[App\Http\Controllers\User\UserController::class,'months'])->name('monthly');
            Route::post('/monthly-payment',[App\Http\Controllers\User\UserController::class,'paymentmonth'])->name('paymonth');
            Route::get('/logout',[App\Http\Controllers\User\UserloginController::class,'logout'])->name('logout');
            Route::get('/view-attendance',[App\Http\Controllers\User\UserController::class,'viewat'])->name('atview');
            Route::post('/view-attendance',[App\Http\Controllers\User\UserController::class,'viewatt'])->name('atview');

            Route::get('/changepassword',[App\Http\Controllers\User\UserController::class,'changepassreq'])->name('changepass');
            Route::post('/changepassword',[App\Http\Controllers\User\UserController::class,'changepass'])->name('changepass');

            Route::get('/myoder/{id}',[App\Http\Controllers\User\UserController::class,'myoder'])->name('oder');
            Route::get('/merchant',[App\Http\Controllers\User\UserController::class,'merchant'])->name('merdash');
            Route::get('/add-attendence',[App\Http\Controllers\User\UserController::class,'addattend'])->name('addatten');
            Route::post('/add-attendence',[App\Http\Controllers\User\UserController::class,'addattendd'])->name('addatten');
            Route::get('/trainer',[App\Http\Controllers\User\UserController::class,'trainer'])->name('traindash');


            Route::get('/addproduct',[App\Http\Controllers\User\UserController::class,'product'])->name('pro');
            Route::post('/addproduct',[\App\Http\Controllers\User\UserController::class,'insertproduct'])->name('pro');
            Route::get('/pending-oders',[App\Http\Controllers\User\UserController::class,'pending'])->name('pend');
            Route::get('/confirm-oders/{id}',[App\Http\Controllers\User\UserController::class,'confirmodd'])->name('confirm');
            Route::post('/confirm-oders/{id}',[App\Http\Controllers\User\UserController::class,'confirmoddd'])->name('confirm');
            Route::get('/delivered-oders',[App\Http\Controllers\User\UserController::class,'delivered'])->name('deliver');
            Route::get('/product-show',[App\Http\Controllers\User\UserController::class,'showprd'])->name('prdd');

        });
    });
