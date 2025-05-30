<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_id', 50)->primary();
            $table->string('name', 50);
            $table->string('code', 50);
            $table->string('credits', 50);
            $table->string('semester', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
