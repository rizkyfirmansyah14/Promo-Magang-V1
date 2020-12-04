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

Route::get('/', 'CategorysController@index');

Route::get('/shop', function () {
    return view('user/shop');
});

Route::get('/about', function () {
    return view('user/about');
});


Route::get('/detail_product', function () {
    return view('user/product-detail');
});

Route::get('/shopping_cart', function () {
    return view('user/shopping-cart');
});

Route::get('/checkout', function () {
    return view('user/checkout');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

// Route View
Route::get('/admin/dashboard', 'AdminController@dashboardView')->name('dashboard');
Route::get('/admin/datauser', 'AdminController@viewUser')->name('datauser');
Route::get('/admin/datadiskon', 'AdminController@viewDisc')->name('datadiskon');
Route::get('/admin/datakategori', 'AdminController@viewCat')->name('datakategori');
Route::get('/admin/datarole', 'AdminController@viewRole')->name('datarole');
Route::get('/admin/datakategoribarang', 'AdminController@viewKtBarang')->name('databarang');

// Route CRUD user
Route::get('/admin/getuser', 'UserController@dataUser')->name('getuser');
Route::post('/admin/adduser', 'UserController@addUser')->name('adduser');
Route::post('/admin/getiduser', 'UserController@getIdUser')->name('getiduser');
Route::post('/admin/edituser', 'UserController@editUser')->name('edituser');
Route::post('/admin/deleteuser', 'UserController@deleteUser')->name('deleteuser');

// Route CRUD discount
Route::get('/admin/getdiskon', 'DiskonController@dataDisc')->name('getdiskon');
Route::post('/admin/adddiskon', 'DiskonController@addDisc')->name('adddiskon');
Route::post('/admin/getiddiskon', 'DiskonController@getIdDisc')->name('getiddiskon');
Route::post('/admin/editdiskon', 'DiskonController@editDisc')->name('editdiskon');
Route::post('/admin/deletediskon', 'DiskonController@deleteDisc')->name('deletediskon');

//Route CRUD kategori
Route::get('/admin/getkategori', 'KategoriController@dataCat')->name('getkategori');
Route::post('/admin/addkategori', 'KategoriController@addCat')->name('addkategori');
Route::post('/admin/getidkategori', 'KategoriController@getIdCat')->name('getidkategori');
Route::post('/admin/editkategori', 'KategoriController@editCat')->name('editkategori');
Route::post('/admin/deletekategori', 'KategoriController@deleteCat')->name('deletekategori');

// Route CRUD role
Route::get('/admin/getrole', 'RoleController@dataRole')->name('getrole');
Route::post('/admin/addrole', 'RoleController@addRole')->name('addrole');
Route::post('/admin/getidrole', 'RoleController@getIdRole')->name('getidrole');
Route::post('/admin/editrole', 'RoleController@editRole')->name('editrole');
Route::post('/admin/deleterole', 'RoleController@deleteRole')->name('deleterole');

// Route CRUD kategori barang
Route::get('/admin/getktbarang', 'KategoriBarangController@dataKat')->name('getktbarang');
Route::post('/admin/addktbarang', 'KategoriBarangController@addKat')->name('addktbarang');
Route::post('/admin/getidktbarang', 'KategoriBarangController@getIdKat')->name('getidktbarang');
Route::post('/admin/editktbarang', 'KategoriBarangController@editKat')->name('editktbarang');
Route::post('/admin/deletektbarang', 'KategoriBarangController@deleteKat')->name('deletektbarang');
