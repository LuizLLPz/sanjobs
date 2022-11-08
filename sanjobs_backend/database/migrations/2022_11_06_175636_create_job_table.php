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
        Schema::create('Job', function (Blueprint $table) {
            $table->id();
            $table->string('title', 75);
            $table->text('description');
            $table->dateTime('post_date');
            $table->foreignId('company_id');
            $table->foreign('company_id')->references('id')->on('User');
            $table->foreignId('city_id');
            $table->foreign('city_id')->references('id')->on('City');
        });

        Schema::create('Area', function(Blueprint $table) {
            $table->id();
            $table->string('name', 75);
        });

        Schema::create('Skill', function(Blueprint $table) {
            $table->id();
            $table->string('name', 75);
        });

        Schema::create('job_tag', function(Blueprint $table) {
            $table->foreignId('job_id');
            $table->foreign('job_id')->references('id')->on('Job');
            $table->foreignId('tag_id');
            $table->tinyInteger('level');
            $table->foreign('tag_id', 'job_tag_area_id_foreign')->references('id')->on('Area');
            $table->foreign('tag_id', 'job_tag_skill_id_foreign')->references('id')->on('Skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('Job');
        Schema::dropIfExists('Area');
        Schema::dropIfExists('Skill');
    }
};
