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
            $table->string('uuid');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('description');
            $table->mediumText('short_description');
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2);
            $table->string('stock')->default(0);
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_trending')->default(0);
            $table->boolean('is_active')->default(1);

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
