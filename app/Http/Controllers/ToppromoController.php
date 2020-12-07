<?php

namespace App\Http\Controllers;

use App\TopPromo;
use Illuminate\Http\Request;

class ToppromoController extends Controller
{
    // function show data user in array to use in datatable with ajax
    public function dataDisc()
    {
        $toppromo = TopPromo::get();
        foreach ($toppromo as $value) {
            $tbody = array();
            $tbody[] = $value['id'];
            foreach ($value->Kategori as $item) {
                $tbody[] = $item->nama_kategori;
            }
            foreach ($value->KategoriBarang as $item) {
                $tbody[] = $item->kategori_barang;
            }
            $tbody[] = $value['title'];
            $tbody[] = $value['deskripsi'];
            $tbody[] = $value['tanggal_diskon'];
            $tbody[] = $value['tanggal_berakhir'];
            $img = "<img style='width: 100%;' src='/image/" . $value['image'] . "' /></a>";
            $tbody[] = $img;
            if ($value['status'] == "open") {
                $tbody[] = "<a style='color: green'>open</a>";
            } else {
                $tbody[] = "<a style='color: red'>close</a>";
            }
            $tbody[] = "Rp. " . $value['price'];
            $button =
                "<div class='table-data-feature'>
                 <button class='item editbtndisc' id=" . $value['id'] . " title=Edit'>
                 <i class='zmdi zmdi-edit' style='color: blue;'></i>
                 </button>
                 <button type='button' class='item deletebtndisc' id=" . $value['id'] . " data-toggle='tooltip' data-placement='top' title='Delete'>
                     <i class='zmdi zmdi-delete' style='color: red;'></i>
                 </button>
                 </div>";
            $tbody[] = $button;
            $data[] = $tbody;
        }
        if ($diskon->count() >  0) {
            echo json_encode(array('data' => $data));
        } else {
            echo json_encode(array('data' => 0));
        }
    }
}
