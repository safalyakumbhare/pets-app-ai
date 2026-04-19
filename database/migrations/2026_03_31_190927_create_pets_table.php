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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('user_id');
            $table->string('breed');
            $table->date('dob');
            $table->string('gender');
            $table->string('color');
            $table->string('weight');
            $table->text('image');
            $table->text("medical");
            $table->text("note");
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('user_id');
            $table->dropColumn('breed');
            $table->dropColumn('dob');
            $table->dropColumn('gender');
            $table->dropColumn('color');
            $table->dropColumn('weight');
            $table->dropColumn('image');
            $table->dropColumn('medical');
            $table->dropColumn('note');
            $table->dropColumn('status');

        });
    }
};
