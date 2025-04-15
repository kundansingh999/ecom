<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\FrontendController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\CategoryController\categorycontroller;
use App\Http\Controllers\ProductController\productcontroller;
use App\Http\Controllers\orderController\ordercontroller;
use App\Http\Controllers\invoivecontroller\invoicecontroller;

use App\Http\Middleware\checkadmin;





// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
     Route::get('user/account', [FrontendController::class,'Account']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('admin')->middleware(['checkadmin'])->group(function(){
        Route::get('edit-product/{id}', [Admincontroller::class,'EditProduct']);
        Route::get('dashboard', [AdminController::class,'dashboard'])->name('admin/dashboard');
        Route::get('product', [AdminController::class,'product']);
        Route::get('category', [AdminController::class,'category']);
        Route::get('payment', [AdminController::class,'payment']);
        Route::get('order', [AdminController::class,'order'])->name('admin/order');
        Route::get('banner', [AdminController::class,'banner']);
        Route::get('brand', [AdminController::class,'brand']);
        Route::get('contact-page', [AdminController::class,'contact_page']);
        Route::get('admin-account-page', [AdminController::class,'admin_account_page']);
        Route::get('user', [AdminController::class,'user']);
        Route::get('invoice', [AdminController::class,'invoice']);
        Route::get('invoice/create', [AdminController::class,'invoice_create']);
        Route::get('directinvoice', [AdminController::class,'direct_invoice']);
        Route::get('direct-invoice/{invoice_no}', [AdminController::class,'print_invoice']);
        Route::get('search-invoice', [AdminController::class,'search_invoice']);
        




        Route::get('search-data', [AdminController::class,'search_data']);
        Route::get('product-create', [AdminController::class,'product_create']);
        Route::get('category-create', [AdminController::class,'category_create']);
        Route::get('brand-create', [AdminController::class,'brand_create']);
        Route::get('contact-create', [AdminController::class,'contactcreate']);
        Route::get('banner-create', [AdminController::class,'banner_create']);
        Route::get('order-create', [AdminController::class,'order_create']);
        Route::get('payment-create', [AdminController::class,'payment_create']);
        Route::get('user-create', [AdminController::class,'user_create']);
        Route::get('admin-create', [AdminController::class,'admin_create']);
        Route::get('slider-create', [AdminController::class,'slider_create']);
        });

});


require __DIR__.'/auth.php';


Route::get('/', [FrontendController::class,'home'])->name('/');

Route::get('product/{slug}', [FrontendController::class,'product']);

Route::get('product-detail/{slug}/{id}', [FrontendController::class,'product_detail']);

Route::get('cart', [FrontendController::class,'cart']);

Route::get('check-out', [FrontendController::class,'check_out']);

Route::get('about', [FrontendController::class,'about']);

Route::get('contact-us', [FrontendController::class,'contact_us']);

Route::get('/{slug}', [FrontendController::class,'product']);

Route::get('order-message', [FrontendController::class,'ordermessage']);



//  Route::get('login', [FrontendController::class,'login']);
// Route::get('signup', [FrontendController::class,'signup']);




Route::post('add-category', [categorycontroller::class,'AddCategory']);
Route::post('add-slider', [categorycontroller::class,'Addslider']);


Route::post('add-product', [productcontroller::class,'AddProduct']);
Route::post('update-product', [productcontroller::class,'EditProduct']);
Route::get('add-cart/{product_id}/{user_id}', [productcontroller::class,'Addcart']);


Route::get('category-delete', [categorycontroller::class,'categorydelete']);
Route::get('remove-product/{id}', [productcontroller::class,'removeproduct']);

Route::get('test/logout', [categorycontroller::class,'test_logout']);

Route::get('increment-product/{id}', [productcontroller::class,'IncrementProduct']);
Route::get('decrement-product/{id}', [productcontroller::class,'decrementProduct']);

Route::post('order-now', [ordercontroller::class,'ordernow']);
Route::get('change-order-status/{id}', [ordercontroller::class,'changeOrder']);


Route::get('search/products', [FrontendController::class,'searchProduct']);

Route::get('buy-now/{id}', [FrontendController::class,'BuyNow']);

Route::post('user/ordercancel', [ordercontroller::class,'Ordercancel']);

Route::post('contact/save', [ordercontroller::class,'ContactUs']);


Route::post('user/feedback', [productcontroller::class,'userfeedback']);

Route::get('user/orderhistory', [ordercontroller::class,'OrderHistory']);


Route::get('admin/convert-user/{id}', [productcontroller::class,'convert_user']);
Route::get('admin/convert-admin/{id}', [productcontroller::class,'convert_admin']);

Route::get('admin/block-user/{id}', [productcontroller::class,'block_user']);
Route::get('admin/unblock-user/{id}', [productcontroller::class,'unblock_user']);

Route::post('create-invoice', [invoicecontroller::class,'createinvoice']);

