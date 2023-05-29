<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
      protected $table = 'transaction';
      protected $primaryKey = 'IdTransakasi';
      protected $fillable = [  'IdOrder', 'Keterangan','FotoBukti'];

      public function order()
      {
      return $this->belongsTo('App\order', 'IdOrder', 'IdOrder');
    }
}
