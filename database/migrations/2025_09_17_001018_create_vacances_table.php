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
        Schema::create('vacances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identification_number');
            $table->string('holiday_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('days_number');
            $table->string('call_number')->nullable();
            $table->tinyInteger('user_trust_data_user')->default(0);
            $table->text('managerial_review')->nullable();
            $table->unsignedBigInteger('replacer_id')->nullable();
            $table->tinyInteger('admin_trust_data')->default(0);
            $table->string('entitlements')->nullable();
            $table->string('total_entitlements')->nullable();
            $table->integer('requested_days')->nullable();
            $table->string('remaining')->nullable();
            $table->tinyInteger('administration_trust_data')->default(0);
            $table->string('ceo_auth')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();

            // Optional: add foreign key if users table exists
            // $table->foreign('identification_number')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('replacer_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacances');
    }
};
