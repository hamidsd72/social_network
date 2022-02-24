<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('currency')->default('rials');
            $table->bigInteger('price')->default(0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
