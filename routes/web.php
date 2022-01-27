<?php

use App\Type_product;
use App\Home;
use App\Popular;
use App\User;
use GuzzleHttp\Psr7\Request;
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

Route::get('/', function () {
    return view('/layouts/menu/product')
    ->with('product',Home::all())
    ->with('category',Type_product::all());
})->name('welcome');

//////////////Website Menu//////////////
Route::get('/layouts/menu/product', function () {
    return view('/layouts/menu/product')
    ->with('product',Home::all())
    ->with('category',Type_product::all());;
})->name('product');

Route::get('/layouts/menu/bestsale', function () {
    return view('/layouts/menu/bestsale')
    ->with('popular',Popular::all())
    ->with('category',Type_product::all());
})->name('bestsale');

Route::get('/layouts/menu/map', function () {
    return view('/layouts/menu/map');
})->name('map');

Route::get('/layouts/menu/contact', function () {
    return view('/layouts/menu/contact');
})->name('contact');

//////////////Search Category//////////////
Route::get('/product/category/{id}','admin\ProductController@FindCategory');
Route::get('/popular/category/{id}','admin\PopularController@FindCategory');

//////////////Search Bar Home Page//////////////
Route::get('/product/search','SearchController@SearchProduct');

//////////////button//////////////
Auth::routes();

Route::middleware(['auth','admin'])->group(function(){

    //////////////Admin menu//////////////
    Route::get('/admin/header_edit', function () {
        return view('/admin/header_edit');
    });
    Route::get('/admin/header_edit_v2', function () {
        return view('/admin/header_edit_v2');
    });
    Route::get('/admin/drive_thru', function () {
        return view('/admin/drive_thru');
    });
    Route::get('/admin/profile/edit/{id}','admin\UserController@edit');
    Route::post('/admin/profile/update/{id}','admin\UserController@update');
    Route::get('/admin/profile/delete/{id}','admin\UserController@delete');
    Route::get('/admin/profile', function () {
        $users = User::paginate(5);
        return view('/admin/profile',compact('users'));
    })->name('profile');
    
    Route::get('/auth/login_popup', function () {
        return view('/auth/login_popup');
    });

    //////////////TypeProduct//////////////
    Route::get('/admin/type-product', function () {
        $type_product = Type_product::paginate(5);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/type-product', compact('popular_product_check','product_check','type_product_check','user_check','type_product'));
    });
    Route::get('/admin/type-product/add', function () {
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/type-product/add', compact('popular_product_check','product_check','type_product_check','user_check'));
    });
    Route::get('/admin/type-product/edit', function () {
        return view('/admin/type-product/edit');
    });
    Route::post('/admin/type-product/add','admin\TypeController@create')->name('create');
    Route::get('/admin/type-product/edit/{id}','admin\TypeController@edit');
    Route::post('/admin/type-product/Update/{id}','admin\TypeController@update');
    Route::get('/admin/type-product/delete/{id}','admin\TypeController@delete');

    //////////////Product//////////////
    Route::get('/admin/product', function () {
        $product = Home::paginate(5);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/product', compact('popular_product_check','product_check','type_product_check','user_check','product'));
    });
    Route::get('/admin/product/add', function () {
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/product/add', compact('popular_product_check','product_check','type_product_check','user_check'))->with('products_type',Type_product::all());
    });
    Route::get('/admin/product/edit', function () {
        return view('/admin/product/edit');
    });
    Route::post('/admin/product/add','admin\ProductController@create')->name('product.create');
    Route::get('/admin/product/edit/{id}','admin\ProductController@edit');
    Route::post('/admin/product/Update/{id}','admin\ProductController@update');
    Route::get('/admin/product/delete/{id}','admin\ProductController@delete');

    //////////////Popular//////////////
    Route::get('/admin/popular', function () {
        $popular_product = Popular::paginate(5);
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/popular', compact('popular_product_check','product_check','type_product_check','user_check','popular_product'));
    });
    Route::get('/admin/popular/add', function () {
        $popular_product_check  = Popular::all();
        $product_check = Home::all();
        $type_product_check  = Type_product::all();
        $user_check  = User::all();
        return view('/admin/popular/add', compact('popular_product_check','product_check','type_product_check','user_check'))->with('products_type',Type_product::all());
    });
    Route::get('/admin/popular/edit', function () {
        return view('/admin/popular/edit');
    });
    Route::post('/admin/popular/add','admin\PopularController@create')->name('popular.create');
    Route::get('/admin/popular/edit/{id}','admin\PopularController@edit');
    Route::post('/admin/popular/Update/{id}','admin\PopularController@update');
    Route::get('/admin/popular/delete/{id}','admin\PopularController@delete');

    //////////////Admin Dashboard//////////////
    Route::get('/admin/dashboard', 'HomeController@index')->name('home');

    //////////////Route for normal user//////////////
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home_normal', 'HomeController@index');
    });

    //////////////Route for admin//////////////
    Route::group(['prefix' => 'admin'], function(){
        Route::group(['middleware' => ['admin']], function(){
            Route::get('/admin/dashboard', 'admin\AdminController@index');
        });
    });
});



