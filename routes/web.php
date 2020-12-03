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
    return view('auth.login');
});

Auth::routes();

// Route View
Route::get('/dashboard', 'AdminController@dashboardView')->name('dashboard');
Route::get('/datauser', 'AdminController@viewUser')->name('datauser');
Route::get('/datadiskon', 'AdminController@viewDisc')->name('datadiskon');
Route::get('/datakategori', 'AdminController@viewCat')->name('datakategori');
Route::get('/datarole', 'AdminController@viewRole')->name('datarole');

// Route CRUD user
Route::get('    /getuser', 'UserController@dataUser');
Route::post('/adduser', 'UserController@addUser');
Route::post('/getiduser', 'UserController@getIdUser');
Route::post('/edituser', 'UserController@editUser');
Route::post('/deleteuser', 'UserController@deleteUser');

// Route CRUD discount
Route::get('/getdiskon', 'DiskonController@dataDisc');
Route::post('/adddiskon', 'DiskonController@addDisc');
Route::post('/getiddiskon', 'DiskonController@getIdDisc');
Route::post('/editdiskon', 'DiskonController@editDisc');
Route::post('/deletediskon', 'DiskonController@deleteDisc');

//Route CRUD kategori
Route::get('/getkategori', 'KategoriController@dataCat');
Route::post('/addkategori', 'KategoriController@addCat');
Route::post('/getidkategori', 'KategoriController@getIdCat');
Route::post('/editkategori', 'KategoriController@editCat');
Route::post('/deletekategori', 'KategoriController@deleteCat');

// Route CRUD role
Route::get('/getrole', 'RoleController@dataRole');
Route::post('/addrole', 'RoleController@addRole');
Route::post('/getidrole', 'RoleController@getIdRole');
Route::post('/editrole', 'RoleController@editRole');
Route::post('/deleterole', 'RoleController@deleteRole');
