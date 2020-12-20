<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diskon;
use App\KategoriBarang;
use App\PopularSlider;

class ViewController extends Controller
{
    public function detailProduct($id)
    {
        $diskon = Diskon::get();
        $detailbarang = Diskon::where('id', $id)->get();
        return view('user.product-detail', ['detail' => $detailbarang, 'diskon' => $diskon]);
    }

    public function categoryPer($show)
    {
        $kategoridiskon = Diskon::where('kategori_diskon', $show)->get();
        return view('user.catalogueper', ['kategoridiskon' => $kategoridiskon]);
    }

    public function categoryView()
    {
        $kategori = KategoriBarang::get();
        $popular = PopularSlider::get();

        return view('user.shop', ['category' => $kategori, 'popular' => $popular, 'diskon' => Diskon::paginate(10)]);
    }

    public function cataloguePer($idkategori)
    {
        $kategoridiskon = Diskon::where('kategori_barang', $idkategori)->get();
        return view('user.catalogueper', ['kategoridiskon' => $kategoridiskon]);
    }
}
