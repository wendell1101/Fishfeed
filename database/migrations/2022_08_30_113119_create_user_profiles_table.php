<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('civil_status');
            $table->string('sex');
            $table->string('religion');
            $table->date('birth_date');
            $table->string('contact_number')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street')->nullable();
            $table->string('barangay')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
};
