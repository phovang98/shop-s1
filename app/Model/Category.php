<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getParentCate()
    {
        return $this->belongsTo(Category::class,'parent_id','id');
    }
}
