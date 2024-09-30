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
        Schema::table('users', function (Blueprint $table) {
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_browser')->nullable();
            $table->string('last_login_os')->nullable();
            $table->decimal('balance', 10, 2)->default(0); // Changed to decimal with default 0
            $table->string('status')->nullable()->default('pending');
            $table->string('currency')->nullable()->default('EUR');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'last_login_at',
                'last_login_browser',
                'last_login_os',
                'balance',
                'status',
                'currency',
            ]);
        });
    }
};
