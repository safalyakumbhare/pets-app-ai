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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->text('address');
            $table->string('gender');
            $table->text('password');
            $table->text('profile');
            $table->text('license_no');
            $table->text('specialization');
            $table->string('experience');
            $table->string('certification');
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
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('dob');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('password');
            $table->dropColumn('profile');
            $table->dropColumn('license_no');
            $table->dropColumn('specialization');
            $table->dropColumn('experience');
            $table->dropColumn('certification');
            $table->dropColumn('status');
            $table->dropColumn('approval');
        });
    }
};
