<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->string('ITEM_ID', 10)->primary();
            $table->string('ITEM_NAME', 50);
            $table->string('CATEGORY', 50);
            $table->string('INPUT_BY', 10);
            $table->dateTime('INPUT_DATE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
