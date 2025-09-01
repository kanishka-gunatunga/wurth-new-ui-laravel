<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ############                    finance              #############
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