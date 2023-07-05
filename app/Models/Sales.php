<?php

namespace App\Models;
use App\Models\User;
use App\Models\Customer;
use App\Models\Salesman;
use App\Models\SubSales;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'SALES_ID';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'SALES_NO',
        'CUSTOMER_ID',
        'SALESMAN_ID',
        'CREATE_BY',
        'INPUT_DATE',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CUSTOMER_ID', 'CUSTOMER_ID');
    }

    public function salesman()
    {
        return $this->belongsTo(Salesman::class, 'SALESMAN_ID', 'SALESMAN_ID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'CREATE_BY', 'id');
    }

    public function subSales()
    {
        return $this->hasMany(SubSales::class, 'SALES_ID', 'SALES_ID');
    }

    protected static function booted()
    {
        static::creating(function ($sales) {
            $sales->SALES_ID = static::generateSalesId();
        });
    }

    protected static function generateSalesId()
    {
        $prefix = 'INV';
        $date = now()->format('ym');
        $section = 'A0031';

        // Get the latest sales ID from the database
        $latestSalesId = static::max('SALES_ID');

        if ($latestSalesId) {
            // Extract the numeric part of the sales ID
            $numericPart = (int)substr($latestSalesId, -4);

            // Increment the numeric part
            $numericPart++;
        } else {
            // If no previous sales ID exists, start with 1
            $numericPart = 1;
        }

        // Pad the numeric part with leading zeros
        $counter = str_pad($numericPart, 4, '0', STR_PAD_LEFT);

        // Generate the new sales ID
        $newSalesId = $prefix . '-' . $date . '-' . $section . '-' . $counter;

        return $newSalesId;
    }

    public function setInputDateAttribute($value)
    {
        // Automatically set the input date to the current date and time
        $this->attributes['INPUT_DATE'] = $value ?: now();    }


}
