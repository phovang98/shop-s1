<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    protected $fillable = [
        'customer_name',
        'customer_phone_number',
        'customer_email',
        'customer_address',
        'total_price',
        'payment_method'
    ];

    public function invoice_detail()
    {
        return $this->hasMany('App\Model\Invoice_Detail', 'invoice_id','id');
    }
}
