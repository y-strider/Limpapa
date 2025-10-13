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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('feedback_type'); // complaint, suggestion, praise
            $table->text('message');
            $table->string('submitter_name');
            $table->string('contact_info')->nullable();
            $table->string('status')->default('received'); // received, reviewed, addressed
            $table->text('response')->nullable();
            $table->string('handled_by')->nullable();
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
        Schema::dropIfExists('feedbacks');
    }
};
