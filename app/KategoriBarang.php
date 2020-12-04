<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    public function Diskon()
    {
        return $this->belongsTo('App\Diskon');
    }
}
