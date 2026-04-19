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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_id');
            $table->integer('user_id');
            $table->integer('pet_id');
            $table->integer('clinic_id');
            $table->string('appointment_date');
            $table->string('appointment_time');
            $table->string('appointment_description');
            $table->string('status');
            $table->string('approval');
            $table->string('visit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('doctor_id');
            $table->dropColumn('user_id');
            $table->dropColumn('pet_id');
            $table->dropColumn('clinic_id');
            $table->dropColumn('appointment_date');
            $table->dropColumn('appointment_time');
            $table->dropColumn('appointment_description');
            $table->dropColumn('status');
            $table->dropColumn('approval');
            $table->dropColumn('visit');
        });
    }
};
