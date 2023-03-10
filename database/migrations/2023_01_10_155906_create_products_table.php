<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('description', 150);
            $table->double('price',8,2);
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
