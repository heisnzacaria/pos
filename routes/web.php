<?php
use App\Http\Controllers\PdfController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\invoicesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CertifController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SignatureController;

Route::get('/', function () {
    return redirect('/admin');
});

Auth::routes();


//navigation Routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('orders', OrderController::class);

    //download documents:
    Route::get('/downloadwork',[PdfController::class,'downloadwork'])->name('downloadwork');;
    Route::get('/downloadstage',[PdfController::class, 'downloadstage'])->name('downloadstage');;

    //page document
    Route::get('/downloads', [PdfController::class, 'index'])->name('downloads.index');

//invoices
Route::get('invoices/{id}', [OrderController::class, 'invoice'])->name('invoices.index');
Route::get('quote', [ProductController::class, 'quote'])->name('quote.index');

//shopping cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/change-qty', [CartController::class, 'changeQty']);
    Route::delete('/cart/delete', [CartController::class, 'delete']);
    Route::delete('/cart/empty', [CartController::class, 'empty']);

//work certif
    Route::get('attestationdetravail', [EmployeController::class, 'index']);
Route::post('new', [EmployeController::class, 'new']);
Route::get('show', [EmployeController::class, 'show']);
Route::get('printwork', [EmployeController::class, 'print']);

//intership Certif
Route::get('attestationdestage', [InternController::class, 'index']);
Route::post('newi', [InternController::class, 'new']);
Route::get('showi', [InternController::class, 'show']);
Route::get('printintern', [InternController::class, 'print']);

//formation certif
Route::get('attestationdeformation', [CertifController::class, 'index']);
Route::post('newc', [CertifController::class, 'new']);
Route::get('showc', [CertifController::class, 'show']);
Route::get('print', [CertifController::class, 'print']);

//company details
Route::get('settings-company', [CompanyController::class, 'index']);
Route::post('update_comp', [CompanyController::class, 'update']);
Route::get('show_comp', [CompanyController::class, 'show']);

//signature
Route::get('signature-pad',[SignatureController::class ,'index']);
Route::post('signature-pad',[SignatureController::class ,'store']);


});

//paper documents
//-- work
// work stuff
Route::get('attestationdetravail', [EmployeController::class, 'index']);
Route::post('new', [EmployeController::class, 'new']);
Route::get('show', [EmployeController::class, 'show']);
Route::get('printwork', [EmployeController::class, 'print']);

// certif
Route::get('attestationdeformation', [CertifController::class, 'index']);
Route::post('newc', [CertifController::class, 'new']);
Route::get('showc', [CertifController::class, 'show']);
Route::get('printc', [CertifController::class, 'print']);


// internship Certificate
Route::get('attestationdestage', [InternController::class, 'index']);
Route::post('newi', [InternController::class, 'new']);
Route::get('showi', [InternController::class, 'show']);
Route::get('printintern', [InternController::class, 'print']);


//company details
Route::get('settings-company', [CompanyController::class, 'index']);
Route::post('update_comp', [CompanyController::class, 'update']);
Route::get('show_comp', [CompanyController::class, 'show']);

//signature
Route::get('signature-pad',[SignatureController::class ,'index']);
Route::post('signature-pad',[SignatureController::class ,'store']);
