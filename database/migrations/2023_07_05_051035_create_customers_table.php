<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('CUSTOMER_ID', 10)->primary();
            $table->string('CUSTOMER_NAME', 50);
            $table->string('ADDRESS', 50);
            $table->string('NICK_NAME', 50);
            $table->string('INPUT_BY', 10);
            $table->dateTime('INPUT_DATE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
