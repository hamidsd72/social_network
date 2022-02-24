<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on
            ('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('receiver_id');
            $table->foreign('receiver_id')->references('id')->on
            ('users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on
            ('groups')->onDelete('cascade')->onUpdate('cascade');

            $table->boolean('isAdmin')->default(false);
            $table->boolean('senderView')->default(true);
            $table->boolean('receiverView')->default(true);
            $table->string('state')->default('basic');
            $table->string('attachment')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
