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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_type'); // e.g., Barangay Clearance, Indigency, etc.
            $table->foreignId('resident_id')->constrained('residents')->onDelete('cascade');
            $table->text('purpose');
            $table->date('issued_date');
            $table->string('issued_by');
            $table->decimal('fee', 8, 2)->nullable();
            $table->string('status')->default('pending'); // pending, issued, rejected
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
        Schema::dropIfExists('certificates');
    }
};
