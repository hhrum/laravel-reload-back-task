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
        Schema::create('appointment_places', function (Blueprint $table) {
            $table->primary(['calendar_id', 'time_id']);
            $table->foreignId('calendar_id')->constrained();
            $table->foreignId('time_id')->constrained('time_dictionary');
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
        Schema::dropIfExists('appointment_places');
    }
};
