<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on
            ('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('name');
            $table->string('state')->default('basic');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
