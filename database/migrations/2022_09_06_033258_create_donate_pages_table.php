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
        Schema::create('donate_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title_seo');
            $table->text('description_seo');
            $table->string('title');
            $table->string('subtitle');
            $table->text('content');
            $table->string('donate_title');
            $table->text('donate_content');
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
        Schema::dropIfExists('donate_pages');
    }
};