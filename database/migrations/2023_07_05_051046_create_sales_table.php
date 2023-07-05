<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->string('SALES_ID', 20)->primary();
            $table->string('SALES_NO', 20);
            $table->string('CUSTOMER_ID', 10);
            $table->string('SALESMAN_ID', 10);
            $table->unsignedBigInteger('CREATE_BY'); 
            $table->dateTime('INPUT_DATE')->useCurrent();;
            $table->foreign('CUSTOMER_ID')->references('CUSTOMER_ID')->on('customers');
            $table->foreign('SALESMAN_ID')->references('SALESMAN_ID')->on('salesmen');
            $table->foreign('CREATE_BY')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
