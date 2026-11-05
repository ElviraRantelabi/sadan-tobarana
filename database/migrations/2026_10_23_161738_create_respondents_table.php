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
        Schema::create('respondents', function (Blueprint $table) {
        $table->id();
        $table->string('respondent_code')->unique();
        $table->enum('treatment', ['A1', 'A2', 'B1', 'B2']);
        $table->string('session_token')->nullable()->unique();
        $table->timestamp('started_at')->nullable();
        $table->timestamp('completed_at')->nullable();
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respondents');
    }
};
