<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'supplier_id',
        'name',
        'overview',
        'description',
        'cost',
        'price',
        'percent',
        'discount',
        'views',
        'star'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category', 'category_id');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Model\Supplier', 'supplier_id');
    }

    public function comment()
    {
        return $this->hasOne('App\Model\Comment', 'product_id');
    }

    public function productGalleries()
    {
        return $this->hasMany('App\Model\ProductGallery','product_id', 'id');
    }
}
