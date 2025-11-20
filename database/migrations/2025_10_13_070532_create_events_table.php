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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->text('description');
            $table->dateTime('event_date');
            $table->string('location');
            $table->string('organizer');
            $table->integer('expected_attendees')->nullable();
            $table->string('status')->default('planned'); // planned, ongoing, completed, cancelled
            $table->decimal('budget', 10, 2)->nullable();
            $table->string('psgc_code')->default('0907216008'); // Limpapa PSGC
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
        Schema::dropIfExists('events');
    }
};
