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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->string('incident_type'); // fire, accident, theft, etc.
            $table->text('description');
            $table->string('location');
            $table->dateTime('incident_date');
            $table->string('reported_by');
            $table->string('contact_info')->nullable();
            $table->string('status')->default('reported'); // reported, investigating, resolved
            $table->text('response_actions')->nullable();
            $table->string('assigned_personnel')->nullable();
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
        Schema::dropIfExists('incidents');
    }
};
