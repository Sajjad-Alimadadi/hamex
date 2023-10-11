<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->nullable()->constrained('universities')->restrictOnDelete()->restrictOnUpdate();
            $table->string('mobile')->unique();
//            $table->integer('otp')->nullable();
            $table->string('name');
            $table->string('family');
            $table->string('grade')->nullable();
            $table->string('branch')->nullable();
            $table->integer('semester')->nullable();
            $table->string('type');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
