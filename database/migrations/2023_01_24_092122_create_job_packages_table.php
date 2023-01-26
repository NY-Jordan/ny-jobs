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
        Schema::create('job_packages', function (Blueprint $table) {
            $table->id();
            $table->string('falt_rate');
            $table->integer('price');
            $table->integer('number');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('job_packages');
    }
};
