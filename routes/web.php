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
	return redirect()->route('products.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
//Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/registration', 'UserRegistrationController@index')->name('registration.index');
Route::post('/registration', 'UserRegistrationController@store');

Route::get('/user/products', 'UserProductController@index')->name('products.index');
Route::get('/user/products_all/details/{id}', 'UserProductController@details')->name('userProduct.details');

Route::group(['middleware' => ['sess']], function () {

	Route::resource('/admin', 'AdminController');

	//registration

	Route::get('/admin/emp/registration', 'AdminRegistrationController@index')->name('admin.registration');

	Route::post('/admin/emp/registration', 'AdminRegistrationController@store');

	// Route::get('/admin/emp/reg', 'AdminRegistrationController');

	Route::get('/admin/employees/show', 'AdminRegistrationController@employeeShow')->name('reg.employeeAll');

	Route::get('/admin/customers/show', 'AdminController@customers')->name('admin.customers');

	//admin product
	Route::resource('/adminProduct', 'AdminProductsController');

	Route::get('/admin_Product/add', 'AdminProductsController@addProducts')->name('adminProduct.addProducts');

	Route::get('/admin_Product/details/{id}', 'AdminProductsController@details')->name('adminProduct.details');

	Route::get('/admin_Product/show', 'AdminProductsController@show_all')->name('adminProduct.show');

	Route::post('/admin_Product/show', 'AdminProductsController@categoryShow');

	Route::post('/admin_Product/edit/{id}', 'AdminProductsController@update');

	Route::get('/admin-Product/edit/{id}', 'AdminProductsController@productEdit')->name('adminProduct.edit');

	Route::post('/admin_Product/update/{id}', 'AdminProductsController@product_Update');

	Route::get('/admin_Product/update/{id}', 'AdminProductsController@productUpdate')->name('adminProduct.update');

	Route::post('/admin_Product/add', 'AdminProductsController@store');

	//invoice

	Route::get('/admin/sale/show', 'InvoiceController@invoiceSales')->name('invoice.sales');

	Route::get('/admin/sale/showAdmin', 'InvoiceController@invoiceSalesAdmin')->name('invoice.salesAdmin');

	Route::get('/admin/sale/deliver/{id}', 'InvoiceController@invoiceDeliver')->name('invoice.deliver');

	Route::get('/admin/sale/cancel/{id}', 'InvoiceController@invoiceCancel')->name('invoice.cancel');

	//report
	Route::get('/admin/report/buy_history', 'ReportController@buyHistory')->name('report.buyHistory');

	Route::get('/admin/report/buy_history-all', 'ReportController@buyHistoryTotal')->name('report.buyHistoryAll');

	Route::get('/admin/report/orderlist', 'OrderListController@orderList')->name('report.orderList');
	Route::get('/admin/report/canceled', 'OrderListController@cancelList')->name('report.cancelList');
	Route::get('/admin/report/sales', 'OrderListController@salesList')->name('report.salesList');


	Route::get('/admin/report/orderlist-all', 'OrderListController@orderListTotal')->name('report.orderListAll');

	Route::get('/admin/order/{id}', 'OrderListController@orderDetails')->name('order.orderDetails');
	//product
	Route::resource('/product', 'ProductController');

	//user main
	// Route::resource('/user_main', 'UserMainController');

	//user product
	// Route::resource('/user/products', 'UserProductController');
	Route::get('/user/profile', 'UserMainController@profile')->name('user.profile');

	Route::post('/user/profile', 'UserMainController@updateProfile');

	Route::get('/user/password', 'UserMainController@password')->name('user.password');

	Route::post('/user/password', 'UserMainController@updatePassword');

	Route::get('/user/products_all', 'UserProductController@showAll')->name('products.showall');

	Route::get('/user/products_all/show/{categ_id}', 'UserProductController@showAllSearch')->name('products.showallsearch');

	Route::post('/user/products_all/show/{categ_id}', 'UserProductController@showAllSearchAll');

	Route::post('/user/products_all/details/{id}', 'UserProductController@addToCart');

	//user cart
	Route::get('/user/cart/add/{id}', 'UserCartController@addToCart')->name('userCart.add');

	Route::get('/user/cart/add_all/{id}', 'UserCartController@addToCartBack')->name('userCart.addToCartBack');

	Route::get('/user/cart/add_wishlst/{id}', 'UserCartController@addToCartWish')->name('userCart.addToCartWish');

	Route::get('/user/cart/delete/{id}', 'UserCartController@deleteFromCart')->name('userCart.delete');

	Route::get('/user/cart/show', 'UserCartController@cartShowAll')->name('cart.showAll');

	Route::get('/user/cart/checkout', 'UserCartController@checkOut')->name('cart.checkOut');

	Route::post('/user/cart/checkout', 'UserCartController@checkDone');

	//invoice

	Route::get('/user/invoice', 'InvoiceController@index')->name('invoice.index');

	//user wish list

	Route::get('/user/wishlist/add/{id}', 'UserWishlistController@addToWish')->name('userWishlist.addToWish');

	Route::get('/user/wishlist/add/detail/{id}', 'UserWishlistController@addToWishDetail')->name('userWishlist.addToWishDetail');

	Route::get('/user/wishlistCat/add/{id}', 'UserWishlistController@addToWishAll')->name('userWishlist.addToWishAll');

	Route::get('/user/wishlist/delete/{id}', 'UserWishlistController@deleteFromWish')->name('userWishlist.deleteFromWish');

	Route::get('/user/wishlistCat/delete/{id}', 'UserWishlistController@deleteFromWishAll')->name('userWishlist.deleteFromWishAll');

	Route::get('/user/wishlistCat/detail/delete/{id}', 'UserWishlistController@deleteFromWishAllDetail')->name('userWishlist.deleteFromWishAllDetail');

	Route::get('/user/wishlist/show', 'UserWishlistController@wishlistShow')->name('wishlist.show');

});
