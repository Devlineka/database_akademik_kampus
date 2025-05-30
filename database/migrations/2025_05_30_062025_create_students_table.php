<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id', 50)->primary();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->char('NIM', 50);
            $table->string('major', 50);
            $table->date('enrollment_year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
