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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('icon_id')->constrained();
            $table->foreignId('profile_id')->constrained();
            $table->string('body',50);
            $table->date('start')->format('YYYY-MM-DD HH:MM');
            $table->date('end')->format('YYYY-MM-DD HH:MM');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
