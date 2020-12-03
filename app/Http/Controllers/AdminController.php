<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\User;
use App\Role;
use App\Diskon;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboardView()
    {
        // count user
        $users = User::get();
        $userscount = $users->count();

        // count discount
        $diskon = Diskon::get();
        $todaydiskon = Diskon::where('tanggal_diskon', Carbon::today())->get();
        $diskoncount = $diskon->count();

        // count kategori
        $kategori = Kategori::get();
        $kategoricount = $kategori->count();

        // count role
        $role = Role::get();
        $roleAcount = $role->count();

        return view('admin.dashboardadmin', ['countuser' => $userscount, 'countkategori' => $kategoricount, 'countdiskon' => $diskoncount, 'discon' => $todaydiskon, 'countrole' => $roleAcount]);
    }

    public function viewUser()
    {
        return view('admin.datauser');
    }

    public function viewDisc()
    {
        $kategory = Kategori::get();
        return view('admin.datadiskon', ['kategori' => $kategory]);
    }

    public function viewCat()
    {
        return view('admin.datakategori');
    }

    public function viewRole()
    {
        return view('admin.datarole');
    }
}
