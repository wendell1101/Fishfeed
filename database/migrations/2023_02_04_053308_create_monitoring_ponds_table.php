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
        Schema::create('monitoring_ponds', function (Blueprint $table) {
            $table->id();
            $table->string('ponds_name');
            $table->date('date_started');
            $table->date('expected_date_harvest');
            $table->double('abw', 12, 2);
            $table->double('stock_fingerlings', 12, 2);
            $table->double('mortality', 12, 2)->default(0);
            $table->date('date_of_sampling')->nullable();
            $table->boolean('has_harvest')->default(false);
            $table->foreignId('pond_id')->constrained('ponds');
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
        Schema::dropIfExists('monitoring_ponds');
    }
};
