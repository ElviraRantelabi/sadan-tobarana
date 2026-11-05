
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('respondents', 'session_token')) {
            Schema::table('respondents', function (Blueprint $table) {
                $table->string('session_token')->nullable()->unique();
            });
        }
    }

    public function down(): void
    {
        // Sengaja tidak menghapus kolom agar data yang sudah ada
        // tetap aman ketika migrasi di-rollback.
    }
};
