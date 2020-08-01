<?php

namespace App;
use App\Tag;
use App\ProductCategory;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id','id');
    }

    public function products()
    {
        return $this->hasMany('App\ProductCategory', 'category_id', 'id');
    }
}
