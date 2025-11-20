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
        Schema::create('puroks', function (Blueprint $table) {
            $table->id();
            $table->string('purok_name');
            $table->text('description')->nullable();
            $table->integer('household_count')->default(0);
            $table->integer('resident_count')->default(0);
            $table->string('chairman_name')->nullable();
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
        Schema::dropIfExists('puroks');
    }
};
