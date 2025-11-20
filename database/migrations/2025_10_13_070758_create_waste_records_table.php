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
        Schema::create('waste_records', function (Blueprint $table) {
            $table->id();
            $table->string('waste_type'); // biodegradable, non-biodegradable, hazardous
            $table->decimal('quantity', 8, 2); // in kg
            $table->string('collection_area');
            $table->date('collection_date');
            $table->string('collected_by');
            $table->string('disposal_method');
            $table->string('status')->default('collected'); // collected, disposed, recycled
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
        Schema::dropIfExists('waste_records');
    }
};
