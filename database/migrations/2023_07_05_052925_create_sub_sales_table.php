<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_sales', function (Blueprint $table) {
            $table->id();
            $table->string('SALES_ID', 20);
            $table->string('ITEM_ID', 10);
            $table->integer('QTY_SALES');
            $table->decimal('UNIT_PRICE', 18, 2);
            $table->foreign('SALES_ID')->references('SALES_ID')->on('sales');
            $table->foreign('ITEM_ID')->references('ITEM_ID')->on('items');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_sales');
    }
}
