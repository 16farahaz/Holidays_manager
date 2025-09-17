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
            $table->string('Title')->nullable()->after('password');       // job title, optional
            $table->string('status')->default('active')->after('Title');  // active/inactive
            $table->string('role')->default('simple_user')->after('status'); // role for RBAC
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['Title', 'status', 'role']);
        });
    }
};
