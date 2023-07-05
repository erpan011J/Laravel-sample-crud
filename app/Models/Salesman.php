<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    protected $table = 'salesmen';
    protected $primaryKey = 'SALESMAN_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'SALESMAN_ID',
        'SALES_PERSON',
        'ALAMAT',
        'INPUT_BY',
        'INPUT_DATE',
    ];

    public function sales()
    {
        return $this->hasMany(Sales::class, 'SALESMAN_ID', 'SALESMAN_ID');
    }
}
