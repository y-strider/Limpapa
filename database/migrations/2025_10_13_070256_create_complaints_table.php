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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('complainant_name');
            $table->string('complainant_contact')->nullable();
            $table->text('complaint_description');
            $table->string('complaint_type');
            $table->date('incident_date');
            $table->string('status')->default('pending'); // pending, investigating, resolved, dismissed
            $table->text('resolution')->nullable();
            $table->date('resolved_date')->nullable();
            $table->string('assigned_to')->nullable();
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
        Schema::dropIfExists('complaints');
    }
};
