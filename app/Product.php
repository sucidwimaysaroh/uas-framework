<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'IdProduk';
    protected $fillable = ['NamaProduk','Harga','Stok','Kategori','Deskripsi', 'Foto', 'IdUser'];

    public function order(){
    //setiap profil memiliki satu mahasiswa    
    return $this->hasMany('App\order', 'IdProduk', 'IdProduk');
  }
}
