<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login','App\Http\Controllers\Admin\AuthController@login')->name('admin.login');//login for admin

Route::prefix('admin')->middleware(['auth',\App\Http\Middleware\checkAdmin::class])
    ->namespace('App\Http\Controllers\Admin')
    ->group(function () {
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/profile/edit/{id}', 'AdminController@editProfile')->name('admin.profile.edit');
        Route::put('/profile/update/{user}', 'AdminController@updateProfile')->name('admin.profile.update');
        //notifications
        // Route::get('/notifications/{notification}/mark-as-read', 'NotificationController@markAsRead')->name('admin.notifications.markAsRead');
        //options
        // Route::resource('options', 'OptionController',['as'=>'admin']);
        // Route::post('option/{id}/add-value', 'OptionController@addValue')->name('admin.options.addValue');
        // Route::delete('option/value/{id}/delete', 'OptionController@deleteValue')->name('admin.options.deleteValue');
        //ajax
        // Route::get('/get-sub-categories/{id}/{productID?}', 'AjaxController@getSubCategories');
        // Route::get('/getProducts', 'AjaxController@getProducts');
        // Route::get('/getCategories', 'AjaxController@getCategories');
        // Route::get('/products/remove-image/{id}' , 'ProductController@removeImage');
        // Route::get('/comments/change-status' , 'CommentController@changeStatus')->name('admin.comments.changeStatus');
        // Route::put('/orders/change-payment-status' , 'OrderController@changePaymentStatus')->name('admin.orders.changePaymentStatus');
        // Route::post('/orders/change-status' , 'OrderController@changeStatus')->name('admin.orders.changeStatus');
        // Route::post('/orders/add-invoice/{id}' , 'OrderController@addInvoice')->name('admin.orders.add-invoice');

        //Route::get('/invoices/export-pdf/{id}' , 'InvoiceController@exportPdf')->name('admin.invoices.exportPdf');
        // Route::post('/invoices/change-status' , 'InvoiceController@changeStatus')->name('admin.invoices.changeStatus');

        Route::resources([
           'articles'=>ArticleController::class,
           'comments'=>CommentController::class,
        ]);
        Route::get('comments/accept/{comment}',[CommentController::class,'accept'])->name('comment.accept');
        Route::get('comments/reject/{comment}',[CommentController::class,'reject'])->name('comment.reject');
    });
