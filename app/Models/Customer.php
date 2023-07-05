<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'CUSTOMER_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'CUSTOMER_ID',
        'CUSTOMER_NAME',
        'ADDRESS',
        'NICK_NAME',
        'INPUT_BY',
        'INPUT_DATE',
    ];

    public function sales()
    {
        return $this->hasMany(Sales::class, 'CUSTOMER_ID', 'CUSTOMER_ID');
    }
}
