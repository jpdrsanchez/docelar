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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title_seo');
            $table->text('description_seo');
            $table->string('about_title');
            $table->text('about_description');
            $table->string('projects_title');
            $table->text('projects_description');
            $table->string('talks_title');
            $table->text('talks_description');
            $table->string('donate_title');
            $table->text('donate_description');
            $table->string('schedule_title');
            $table->text('schedule_description');
            $table->string('schedule_weekdays_opening');
            $table->string('schedule_weekeend_opening');
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
        Schema::dropIfExists('home_pages');
    }
};