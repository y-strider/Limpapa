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
        Schema::create('security_records', function (Blueprint $table) {
            $table->id();
            $table->string('record_type'); // patrol, surveillance, incident
            $table->text('description');
            $table->string('location');
            $table->dateTime('record_date');
            $table->string('reported_by');
            $table->string('assigned_personnel')->nullable();
            $table->string('status')->default('active'); // active, resolved, archived
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
        Schema::dropIfExists('security_records');
    }
};
