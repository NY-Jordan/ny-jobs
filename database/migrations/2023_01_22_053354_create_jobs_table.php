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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('type');
            $table->string('status')->default(1);;
            $table->string('location');
            $table->timestamp('expired_at');
            $table->string('experience');
            $table->string('apply_by');
            $table->string('to_apply');
            $table->integer('view')->default(0);
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
};
