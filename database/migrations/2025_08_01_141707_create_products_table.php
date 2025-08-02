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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('en_name');
            $table->string('slug')->unique();
            $table->text('en_desc')->nullable();
            $table->text('en_shipping')->nullable();
            $table->text('en_additionalinfo')->nullable();
            $table->tinyInteger('is_featured')->default(0);
            $table->tinyInteger('is_bestselling')->default(0);
            $table->tinyInteger('is_newarrivals')->default(0);
            $table->tinyInteger('is_onsale')->default(0);
            $table->decimal('price', 10, 2);
            $table->decimal('discount',5,2)->default(0);
            $table->decimal('discount_price',10,2)->default(0);
            $table->integer('quantity');
            $table->tinyInteger('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
