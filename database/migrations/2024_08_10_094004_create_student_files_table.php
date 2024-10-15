<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_files', function (Blueprint $table) {
            $table->id();
            $table->string('fc_report');
            $table->string('fc_kk');
            $table->string('fc_akte');
            $table->string('fc_skhu');
            $table->string('fc_photo');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->on('students')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_files');
    }
};
