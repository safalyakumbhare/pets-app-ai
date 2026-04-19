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
            $table->renameColumn('name','username');
            $table->string('phone')->after('email');
            $table->text('address')->after('phone');
            $table->string('gender')->after('address');
            $table->date('dob')->after('gender');
            $table->integer('role_id')->after('id');
            $table->string('status')->after('dob');
            $table->text('profile')->after('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('username','name');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('role_id');
            $table->dropColumn('status');
            $table->dropColumn('profile');
        });
    }
};
