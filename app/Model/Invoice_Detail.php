<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice_Detail extends Model
{
    protected $table = "invoice_detail";

    public function invoice()
    {
        return $this->belongsTo('App\Model\Invoice', 'invoice_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id', 'id');
    }
}
