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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_nane');
            $table->string('logo');
            $table->string('favicon');
            $table->string('address');
            $table->string('phone',20);
            $table->string('email');
            $table->string('fb');
            $table->string('twiter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->text('copyright');
            $table->text('map_iframe');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->string('og_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
