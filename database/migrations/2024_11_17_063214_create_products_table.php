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
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail_image')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('offer_price', 10, 2);
            $table->string('sku');
            $table->boolean('show_at_home')->default(false);
            $table->boolean('status')->default(false);
            //for seo 
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('seo_url')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            //
            $table->softDeletes();
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
