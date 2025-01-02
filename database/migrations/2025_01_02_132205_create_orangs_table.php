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
        Schema::create('orangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',255);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->timestamp('emailVerif')->nullable();
            $table->foreignId('role_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orangs');
    }
};
