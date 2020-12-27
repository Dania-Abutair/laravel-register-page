<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        //
        Schema::create('user', function (Blueprint $table){
            $table->bigIncrements('userid');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('fullname');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
