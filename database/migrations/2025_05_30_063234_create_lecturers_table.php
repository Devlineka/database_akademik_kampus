<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->string('lecturer_id', 50)->primary();
            $table->string('name', 50);
            $table->string('NIP', 50);
            $table->string('department', 50);
            $table->string('email', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
