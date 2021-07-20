<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical_store_channel extends Model
{
    protected $table = null;
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_name',
        'customer_address',
        'phone',
        'product_id',
        'product_name',
        'unit_price',
        'quantity',
        'total_price',
        'date_sold',
        'payment_type',
        'status',
        'updated at',
    ];

}
