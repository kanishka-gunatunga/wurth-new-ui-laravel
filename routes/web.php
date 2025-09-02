<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password-1', function () {
    return view('forgot_password_screen_1');
});

Route::get('/forgot-password-2', function () {
    return view('forgot_password_screen_2');
});


// ###################################################################  FINANCE    ###############################################################################
// finance dashboard
Route::get('/dashboard', function () {
    return view('finance.dashboard');
});
// add new collection
Route::get('/add-new-collection', function () {
    return view('finance.all-collections.add-new-collection');
});
// add new collection-> add new payment
Route::get('/add-new-payment', function () {
    return view('finance.all-collections.add-new-payment');
});
// advance payments
Route::get('/advance-payments', function () {
    return view('finance.all-collections.advance-payments');
});

// all outstanding
Route::get('/all-outstanding', function () {
    return view('finance.all-collections.all-outstanding');
});

// all receipts
Route::get('/all-receipts', function () {
    return view('finance.all-collections.all-reciepts');
});

// cash deposits
Route::get('/cash-deposits', function () {
    return view('finance.deposit.cash-deposits');
});


// cheque deposits
Route::get('/cheque-deposits', function () {
    return view('finance.deposit.cheque-deposits');
});


// fund transfers
Route::get('/fund-transfers', function () {
    return view('finance.deposit.fund-transfers');
});

// card payments
Route::get('/card-payments', function () {
    return view('finance.deposit.card-payments');
});
// invoice-inner
Route::get('/invoices-inner', function () {
    return view('finance.all-collections.invoices-inner');
});


// return cheques
Route::get('/return-cheques', function () {
    return view('finance.return-cheques');
});
// return cheque details
Route::get('/return-cheque-details', function () {
    return view('finance.return-cheque-details');
});

// add new return cheque
Route::get('/add-new-return-cheque', function () {
    return view('finance.add-new-return-cheque');
});


// payment slip
Route::get('/payment-slip', function () {
    return view('finance.payment-slip');
});


// write off
Route::get('/write-off', function () {
    return view('finance.write-off');
});


// set off
Route::get('/set-off', function () {
    return view('finance.set-off');
});


// upload
Route::get('/upload', function () {
    return view('finance.upload');
}); 

// customers
Route::get('/customers', function () {
    return view('finance.customers');
}); 

// inquiries
Route::get('/inquiries', function () {
    return view('finance.inquiries');
});

// notifications
Route::get('/notifications', function () {
    return view('finance.notifications.notifications');
});


Route::get('/create-notification', function () {
    return view('finance.notifications.create-notification');
});









// ###################################################################  ADMIN    ###############################################################################


Route::get('/access-control', function () {
    return view('admin.access-control');
});


Route::get('/activity-log-details', function () {
    return view('admin.security.activity-log-details');
});


Route::get('/activity-log', function () {
    return view('admin.security.activity-log');
});


Route::get('/admin-customers', function () {
    return view('admin.customers');
});

Route::get('/admin-add-new-customer', function () {
    return view('admin.add-new-customer');
});


Route::get('/admin-add-new-division', function () {
    return view('admin.add-new-division');
});


Route::get('/admin-division-management', function () {
    return view('admin.admin-division-management');
});


Route::get('/admin-backup', function () {
    return view('admin.security.backup');
});


Route::get('/admin-add-new-user', function () {
    return view('admin.add-new-user');
});


Route::get('/admin-user-management', function () {
    return view('admin.user-management');
});

Route::get('/admin-division-management-details', function () {
    return view('admin.division-management-details');
});


Route::get('/admin-edit-temporary-customer', function () {
    return view('admin.edit-temporary-customer');
});


Route::get('/admin-view-user', function () {
    return view('admin.view-user');
});

Route::get('/admin-customer-details', function () {
    return view('admin.customer-details');
});

Route::get('/admin-reports', function () {
    return view('admin.reports');
});



Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin-locked-users', function () {
    return view('admin.security.locked-users');
});