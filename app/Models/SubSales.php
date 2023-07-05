<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubSales extends Model
{
    protected $table = 'sub_sales';
    public $timestamps = false;
    protected $fillable = [
        'SALES_ID',
        'ITEM_ID',
        'QTY_SALES',
        'UNIT_PRICE',
    ];

    public function sales()
    {
        return $this->belongsTo(Sales::class, 'SALES_ID', 'SALES_ID');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'ITEM_ID', 'ITEM_ID');
    }
}
