<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newuser', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->string('address');
            $table->string('gs_division');
            $table->string('email');
            $table->string('type');
            $table->integer('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newuser');
    }
}
