<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('course_lecturers', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('course_id', 50);
            $table->string('lecturer_id', 50);
            $table->string('role', 50);

            // Foreign keys
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
            $table->foreign('lecturer_id')->references('lecturer_id')->on('lecturers')->onDelete('cascade');

            // Indexes
            $table->index('course_id');
            $table->index('lecturer_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_lecturers');
    }
};
