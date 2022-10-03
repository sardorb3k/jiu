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
        Schema::create('system', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('site_logo_footer')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_description')->nullable();
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_instagram')->nullable();
            $table->string('site_linkedin')->nullable();
            $table->string('site_youtube')->nullable();
            $table->string('site_telegram')->nullable();

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
        Schema::dropIfExists('system');
    }
};
