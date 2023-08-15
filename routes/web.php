<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;
use App\Mail\FulfillMail;
use Illuminate\Support\Facades\Mail;

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

//login route
Route::get('/register', function () {
    return view('register');
});

//Shopping Page Route
Route::get('/', function () {
    return view('shoppingHomePage');
});
Route::get('/customerLoginPage', function () {
    return view('customerLoginPage');
});
Route::get('/customerRegisterPage', function () {
    return view('customerRegisterPage');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::post('/addCart', [App\Http\Controllers\CartController::class, 'add'])->name('addCart');
Route::get('/shoppingCartPage', [App\Http\Controllers\CartController::class, 'showMyCart'])->name('myCart');
Route::get('/deleteItem/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('deleteCart');
Route::post('/updateCart', [App\Http\Controllers\CartController::class, 'update'])->name('updateCart');

Route::get('/shoppingShowProductPage', [App\Http\Controllers\shoppingPageController::class, 'view'])->name('shoppingShowProductPage');
Route::get('/priceLowToHigh', [App\Http\Controllers\shoppingPageController::class, 'priceLTH'])->name('priceLowToHigh');
Route::get('/priceHighToLow', [App\Http\Controllers\shoppingPageController::class, 'priceHTL'])->name('priceHighToLow');
Route::get('/shoppingShowProductDetails/{id}', [App\Http\Controllers\shoppingPageController::class, 'viewDetails'])->name('shoppingShowProductDetails');
Route::post('/shoppingShowProductPage', [App\Http\Controllers\shoppingPageController::class, 'searchProduct'])->name('search.product');
Route::get('/getCatProduct/{catid}', [App\Http\Controllers\shoppingPageController::class, 'getProduct'])->name('getCatProduct');

//Placing order route
Route::post('\checkout', [App\Http\Controllers\OrderController::class, 'paymentPost'])->name('payment.post');
Route::get('/order', [App\Http\Controllers\OrderController::class, 'showOrder'])->name('myOrder');
Route::get('/order/{orderID}',[App\Http\Controllers\OrderController::class, 'viewOrder'])->name('orderDetail');

Route::get('/account', [App\Http\Controllers\UserController::class, 'acc'])->name('myAccount');
Route::post('/account/updateUser', [App\Http\Controllers\UserController::class, 'updateUser'])->name('update.User');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});

	Route::group(['middleware' => 'admin.auth'], function(){

       
        //Category Route
        Route::get('/insertCategory', [App\Http\Controllers\CategoryController::class, 'category'])->name('insertCategory');
        Route::post('/insertCategory/store', [App\Http\Controllers\CategoryController::class, 'insert'])->name('addCategory');
        Route::get('/viewCategory', [App\Http\Controllers\CategoryController::class, 'view'])->name('viewCategory');
        Route::get('/editCategory/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
        Route::post('/updateCategory', [App\Http\Controllers\CategoryController::class, 'update'])->name('updateCategory');
        Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('deleteCategory');
        Route::post('/showCategory', [App\Http\Controllers\CategoryController::class, 'searchCategory'])->name('search.category');

        //Product Route
        Route::get('/insertProduct', function () {
        return view('admin.insertProduct',['categoryID'=>App\Models\category::where('status','=','Available')->get(),
                                           ]);
        })->name('insertProduct');
        
        Route::post('/insertProduct/store', [App\Http\Controllers\ProductController::class, 'store'])->name('addProduct');
        Route::get('/viewProduct', [App\Http\Controllers\ProductController::class, 'view'])->name('viewProduct');
        Route::get('/editProduct/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editProduct');
        Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'update'])->name('updateProduct');
        Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteProduct');
        Route::post('/adminSearchProduct', [App\Http\Controllers\ProductController::class, 'adminSearchProduct'])->name('search.adminProduct');

       

        //User Route
        Route::get('/viewUser', [App\Http\Controllers\UserController::class, 'viewUser'])->name('viewUser');
        Route::get('/insertUser', [App\Http\Controllers\UserController::class, 'user'])->name('insertUser');
        Route::post('/insertUser/store', [App\Http\Controllers\UserController::class, 'insert'])->name('addUser');
        Route::get('/editUser/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('editUser');
        Route::post('/updateUser', [App\Http\Controllers\UserController::class, 'update'])->name('updateUser');
        Route::get('/deleteUser/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('deleteUser');
        Route::post('/showUser', [App\Http\Controllers\UserController::class, 'searchUser'])->name('search.user');

        //Order
        Route::get('/viewOrder', [App\Http\Controllers\OrderController::class, 'view'])->name('viewOrder');
        Route::get('/editOrder/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('editOrder');
        Route::post('/updateOrder/{id}', [App\Http\Controllers\OrderController::class, 'update'])->name('updateOrder');
        Route::post('/adminSearchOrder', [App\Http\Controllers\OrderController::class, 'adminSearchOrder'])->name('searchAdminOrder');

        //admin logout
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
