<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->unsigned()->nullable();
            //onDelete('cascade')->quando elimini un record padre ti elimina anche tutti i record figli
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('message');
            $table->timestamps(); //create_at,update_at
            $table->softDeletes();//delete_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
