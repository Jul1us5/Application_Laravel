<?php

namespace App;
use App\Product;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function product(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
   }

   public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
