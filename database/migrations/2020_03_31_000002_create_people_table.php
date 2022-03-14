<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ddd')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('situation_id')->nullable();
            $table->foreign('situation_id')->references('id')->on('situations');
			$table->boolean('sex')->nullable();
            $table->unsignedBigInteger('spouse_id')->nullable();
            $table->foreign('spouse_id')->references('id')->on('people');
            $table->unsignedBigInteger('discipleship_partner_id')->nullable();
            $table->foreign('discipleship_partner_id')->references('id')->on('people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
