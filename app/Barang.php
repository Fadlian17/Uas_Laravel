<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	protected $table ='barang';
    protected $fillable = ['Gudang_id','Nama','Berat'];
}
