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


Route::get('/', [FrontendController::class,'home']);

Route::get('product', [FrontendController::class,'product']);

Route::get('product-detail/{slug}', [FrontendController::class,'product_detail']);

Route::get('cart', [FrontendController::class,'cart']);

Route::get('check-out', [FrontendController::class,'check_out']);

Route::get('about', [FrontendController::class,'about']);

Route::get('contact-us', [FrontendController::class,'contact_us']);


//  Route::get('login', [FrontendController::class,'login']);
// Route::get('signup', [FrontendController::class,'signup']);





Route::get('admin/product', [AdminController::class,'product']);
Route::get('admin/category', [AdminController::class,'category']);
Route::get('admin/payment', [AdminController::class,'payment']);
Route::get('admin/order', [AdminController::class,'order']);
Route::get('admin/banner', [AdminController::class,'banner']);
Route::get('admin/brand', [AdminController::class,'brand']);
Route::get('admin/contact-page', [AdminController::class,'contact_page']);
Route::get('admin/admin-account-page', [AdminController::class,'admin_account_page']);
Route::get('admin/user', [AdminController::class,'user']);
Route::get('admin/invoice', [AdminController::class,'invoice']);



Route::get('admin/product-create', [AdminController::class,'product_create']);
Route::get('admin/category-create', [AdminController::class,'category_create']);
Route::get('admin/brand-create', [AdminController::class,'brand_create']);

Route::get('admin/contact-create', [AdminController::class,'contactcreate']);
Route::get('admin/banner-create', [AdminController::class,'banner_create']);

Route::get('admin/order-create', [AdminController::class,'order_create']);
Route::get('admin/payment-create', [AdminController::class,'payment_create']);
Route::get('admin/user-create', [AdminController::class,'user_create']);
Route::get('admin/admin-create', [AdminController::class,'admin_create']);

Route::post('add-category', [categorycontroller::class,'AddCategory']);
Route::post('add-product', [productcontroller::class,'AddProduct']);


Route::get('category-delete', [categorycontroller::class,'categorydelete']);























