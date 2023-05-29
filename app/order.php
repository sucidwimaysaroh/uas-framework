<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'IdOrder';
    protected $fillable = ['IdProduk', 'id','Jumlah',' Alamat', 'Status','HargaTotal'];

    public function Product()
      {
      return $this->belongsTo('App\Product', 'IdProduk', 'IdProduk');
      }

    public function transaction()
    {
    return $this->hasMany('App\transaction', 'IdOrder', 'IdOrder');
    }
}
