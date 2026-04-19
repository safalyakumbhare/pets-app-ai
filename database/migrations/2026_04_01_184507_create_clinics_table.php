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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_id');
            $table->string('name');
            $table->string("address");
            $table->string('phone');
            $table->string('email');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('open_days');
            $table->string('close_days');
            $table->string('fees');
            $table->string('pet_type');
            $table->string('photo');
            $table->string('rating');
            $table->string('about_us');
            $table->string('status');
            $table->string('approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->dropColumn('doctor_id');
            $table->dropColumn('name');
            $table->dropColumn("address");
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('open_time');
            $table->dropColumn('close_time');
            $table->dropColumn('open_days');
            $table->dropColumn('close_days');
            $table->dropColumn('fees');
            $table->dropColumn('pet_type');
            $table->dropColumn('photo');
            $table->dropColumn('rating');
            $table->dropColumn('about_us');
            $table->dropColumn('status');
            $table->dropColumn('approval');
        });
    }
};
