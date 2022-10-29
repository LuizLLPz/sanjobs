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
        Schema::create('Curriculum', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('User');
            $table->text('description')->nullable();
            $table->float('desired_wage')->nullable();
            $table->date('update_at');
            $table->string('country');
            $table->foreignId('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('City');
            $table->string('district')->nullable();
            $table->string('road')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Curriculum');
    }
};
