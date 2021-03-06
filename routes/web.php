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
Route::POST('/order-now', [App\Http\Controllers\ProductController::class, 'order_now']);

Route::POST('/order', [App\Http\Controllers\ProductController::class, 'order']);

Route::get('/order', function(){
	return Redirect('/')->with('error','Please Pick a product');
});

/*Route::get('/user/{name}', [App\Http\Controllers\WebPageController::class,'page']);
*/
Route::get('/dealers', [App\Http\Controllers\DealerController::class, 'index']);

Route::get('/compare-specifications', [App\Http\Controllers\CompareController::class, 'index']);

Route::get('/about-us',function (){
	return view('about-us');
});
Route::get('/policies',function (){
	return view('policies');
});
Route::get('/terms-conditions',function (){
	return view('terms-conditions');
});

Route::get('/mobile/colors/{id}',[App\Http\Controllers\ProductController::class, 'colors']);


Route::get('/product/{id_enc}',[App\Http\Controllers\ProductController::class, 'details']);

Route::get('/mobile/details/{id}',[App\Http\Controllers\CompareController::class, 'show_left']);
Route::get('/mobile/compare_details/{name}',[App\Http\Controllers\CompareController::class, 'show_right']);

Route::get('/mobile/compare_details_right/{name}',[App\Http\Controllers\CompareController::class, 'show']);


Route::get('/',[App\Http\Controllers\ProductController::class, 'index']);

Route::get('/products', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
/*
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
*/

Route::get('/admin/dealers', [App\Http\Controllers\Admin\DealerController::class, 'index']);

Route::get('/admin/slider', [App\Http\Controllers\Admin\SliderController::class, 'index']);
 
 Route::get('/admin', function(){
	return view('auth.login');
});
 Route::middleware(['VerifyRequest'])->group(function () {
 
Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/")
      ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});


Route::PUT('/admin/product/{id}',[App\Http\Controllers\Admin\ProductController::class, 'destroy']);
Route::PUT('/admin/order/{id}',[App\Http\Controllers\Admin\OrderController::class, 'destroy']);

Route::get('/mobile/create', function () {
    return view('admin.add_product');
});

Route::get('/dealer/create', function () {
    return view('admin.add_dealer');
});

Route::get('/admin/add-page', function () {
    return view('admin.add_page');
});

Route::get('/admin/info/{id}', [App\Http\Controllers\Admin\SpecificationController::class,'specifications']);

Route::get('/admin/video/{id}', [App\Http\Controllers\Admin\ProductController::class,'video_view']);


Route::get('/admin/specifications/{id}', [App\Http\Controllers\Admin\SpecificationController::class,'update_specifications']);

Route::get('/admin/colors/{id}', [App\Http\Controllers\Admin\SpecificationController::class,'update_colors']);


Route::post('/admin/specifications', [App\Http\Controllers\Admin\SpecificationController::class,'store']);


Route::post('/admin/create-page', [App\Http\Controllers\Admin\DashboardController::class,'store']);


Route::post('/admin/update-specifications', [App\Http\Controllers\Admin\SpecificationController::class,'update']);

Route::post('/admin/update-sleek', [App\Http\Controllers\Admin\ProductController::class,'sleek_update']);
 

 Route::post('/admin/update-product', [App\Http\Controllers\Admin\ProductController::class,'update_product']);


Route::post('/admin/update-order', [App\Http\Controllers\Admin\OrderController::class,'update_order']);


Route::get('/admin/sleek/{id}', [App\Http\Controllers\Admin\ProductController::class,'update_sleek_view']);

Route::get('/admin/creativity/{id}', [App\Http\Controllers\Admin\ProductController::class,'update_creativity_view']);

Route::post('/admin/dealer', [App\Http\Controllers\Admin\DealerController::class,'store']);

Route::post('/admin/product/create', [App\Http\Controllers\Admin\ProductController::class,'store']);
Route::post('/admin/product/creativity', [App\Http\Controllers\Admin\ProductController::class,'creativity']);

Route::post('/admin/product/colors', [App\Http\Controllers\Admin\ProductController::class,'colors']);


Route::post('/admin/update-creativity', [App\Http\Controllers\Admin\ProductController::class,'update_creativity']);


Route::post('/admin/update-colors/', [App\Http\Controllers\Admin\ProductController::class,'update_colors']);

Route::post('/admin/add-videos/', [App\Http\Controllers\Admin\ProductController::class,'videos']);

Route::post('/admin/verify-product', [App\Http\Controllers\Admin\ProductController::class,'verify_product']);

Route::get('/admin/update-product/{id}', [App\Http\Controllers\Admin\ProductController::class,'update_product_view']);

Route::PUT('/admin/update-slider', [App\Http\Controllers\Admin\SliderController::class,'view']);


Route::get('/admin/view-product/{id}', [App\Http\Controllers\Admin\ProductController::class,'detail_view']);


Route::get('/admin/orders', [App\Http\Controllers\Admin\OrderController::class,'index']);

Route::get('/admin/home', [App\Http\Controllers\Admin\OrderController::class,'index']);


Route::get('/admin/products',[App\Http\Controllers\Admin\ProductController::class,'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 });
 Auth::routes();
 
