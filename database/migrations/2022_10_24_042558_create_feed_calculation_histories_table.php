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
        Schema::create('feed_calculation_histories', function (Blueprint $table) {
            $table->id();
            $table->string('calculation_id');
            $table->double('abw', 12, 2);
            $table->double('feed_rate', 12, 2);
            $table->string('typs_of_feed');
            $table->double('survival_rate', 12, 2);
            $table->double('dfr', 12, 2);
            $table->double('monthly_dfr', 12, 2);
            $table->double('sacks_per_month', 12, 2);
            $table->double('size_of_fish', 12, 2);
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
        Schema::dropIfExists('feed_calculation_histories');
    }
};
