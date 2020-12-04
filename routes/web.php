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
Route::get('/', function () {
    return view('user.index-2');
});

Route::get('/shop', function () {
    return view('user/shop_02');
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

// Route CRUD user
Route::get('/admin/getuser', 'UserController@dataUser')->name('getuser');
Route::post('/admin/adduser', 'UserController@addUser')->name('adduser');
Route::post('/admin/getiduser', 'UserController@getIdUser')->name('getiduser');
Route::post('/admin/edituser', 'UserController@editUser')->name('edituser');
Route::post('/admin/deleteuser', 'UserController@deleteUser')->name('deleteuser');

// Route CRUD discount
Route::get('/admin/getdiskon', 'DiskonController@dataDisc');
Route::post('/admin/adddiskon', 'DiskonController@addDisc');
Route::post('/admin/getiddiskon', 'DiskonController@getIdDisc');
Route::post('/admin/editdiskon', 'DiskonController@editDisc');
Route::post('/admin/deletediskon', 'DiskonController@deleteDisc');

//Route CRUD kategori
Route::get('/admin/getkategori', 'KategoriController@dataCat');
Route::post('/admin/addkategori', 'KategoriController@addCat');
Route::post('/admin/getidkategori', 'KategoriController@getIdCat');
Route::post('/admin/editkategori', 'KategoriController@editCat');
Route::post('/admin/deletekategori', 'KategoriController@deleteCat');

// Route CRUD role
Route::get('/admin/getrole', 'RoleController@dataRole');
Route::post('/admin/addrole', 'RoleController@addRole');
Route::post('/admin/getidrole', 'RoleController@getIdRole');
Route::post('/admin/editrole', 'RoleController@editRole');
Route::post('/admin/deleterole', 'RoleController@deleteRole');
