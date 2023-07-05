<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'ITEM_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'ITEM_ID',
        'ITEM_NAME',
        'CATEGORY',
        'INPUT_BY',
        'INPUT_DATE',
    ];

    public function subSales()
    {
        return $this->hasMany(SubSales::class, 'ITEM_ID', 'ITEM_ID');
    }
}
