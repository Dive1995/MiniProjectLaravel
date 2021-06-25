<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allusers', function (Blueprint $table) {
            $table->id();
            $table->integer('ceb');
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->integer('phone');
            $table->string('type');
            $table->string('balance');
            $table->string('reading');
            $table->string('address');
            $table->string('hasAccount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allusers');
    }
}
