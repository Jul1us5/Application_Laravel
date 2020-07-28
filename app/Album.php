<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function albumList()
   {
       return $this->belongsTo('App\Product', 'product_id', 'id');
   }
 
 
}
