<?php

namespace App;

use App\Category;
use App\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getImages()
    {
        return $this->hasMany('App\Album', 'product_id', 'id');
    }
    public function categories()
    {
        return $this->hasMany('App\ProductCategory', 'product_id', 'id');
    }

public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
 
}
