<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->boolean('fl_happened');
            $table->longText('feedback_happened')->nullable();
            $table->longText('feedback_worship')->nullable();
            $table->longText('feedback_lesson')->nullable();
            $table->longText('feedback_strategy')->nullable();
            $table->longText('feedback_help')->nullable();
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
};
