<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesmenTable extends Migration
{
    public function up()
    {
        Schema::create('salesmen', function (Blueprint $table) {
            $table->string('SALESMAN_ID', 10)->primary();
            $table->string('SALES_PERSON', 50);
            $table->string('ALAMAT', 50);
            $table->string('INPUT_BY', 10);
            $table->dateTime('INPUT_DATE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('salesmen');
    }
}
