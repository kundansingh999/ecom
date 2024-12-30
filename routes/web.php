<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\FrontendController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\CategoryController\categorycontroller;
use App\Http\Controllers\ProductController\productcontroller;





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [FrontendController::class,'home'])->name('/');

Route::get('product/{slug}', [FrontendController::class,'product']);

Route::get('product-detail/{slug}', [FrontendController::class,'product_detail']);

Route::get('cart', [FrontendController::class,'cart']);

Route::get('check-out', [FrontendController::class,'check_out']);

Route::get('about', [FrontendController::class,'about']);

Route::get('contact-us', [FrontendController::class,'contact_us']);

Route::get('/{slug}', [FrontendController::class,'product']);


//  Route::get('login', [FrontendController::class,'login']);
// Route::get('signup', [FrontendController::class,'signup']);



Route::prefix('admin')->group(function(){

Route::get('edit-product/{id}', [Admincontroller::class,'EditProduct']);



Route::get('product', [AdminController::class,'product']);
Route::get('admin/category', [AdminController::class,'category']);
Route::get('payment', [AdminController::class,'payment']);
Route::get('order', [AdminController::class,'order'])->name('admin/order');
Route::get('banner', [AdminController::class,'banner']);
Route::get('brand', [AdminController::class,'brand']);
Route::get('contact-page', [AdminController::class,'contact_page']);
Route::get('admin-account-page', [AdminController::class,'admin_account_page']);
Route::get('user', [AdminController::class,'user']);
Route::get('invoice', [AdminController::class,'invoice']);



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

Route::post('add-category', [categorycontroller::class,'AddCategory']);
Route::post('add-slider', [categorycontroller::class,'Addslider']);


Route::post('add-product', [productcontroller::class,'AddProduct']);
Route::post('update-product', [productcontroller::class,'EditProduct']);
Route::get('add-cart/{product_id}/{user_id}', [productcontroller::class,'Addcart']);


Route::get('category-delete', [categorycontroller::class,'categorydelete']);
Route::get('remove-product/{id}', [productcontroller::class,'removeproduct']);

























