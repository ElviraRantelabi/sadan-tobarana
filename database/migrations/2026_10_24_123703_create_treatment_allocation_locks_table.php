<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('treatment_allocation_locks', function (Blueprint $table) {
            $table->id();
            $table->string('lock_name')->unique();
            $table->timestamps();
        });

        DB::table('treatment_allocation_locks')->insert([
            'lock_name' => 'treatment_allocation',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('treatment_allocation_locks');
    }
};
