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
        Schema::create('financial_records', function (Blueprint $table) {
            $table->id();
            $table->string('record_type'); // income, expense, budget
            $table->string('category');
            $table->text('description');
            $table->decimal('amount', 10, 2);
            $table->date('transaction_date');
            $table->string('recorded_by');
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
        Schema::dropIfExists('financial_records');
    }
};
