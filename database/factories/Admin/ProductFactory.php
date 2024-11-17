<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        // $table->string('name');
        // $table->string('slug');
        // $table->string('thumbnail_image')->nullable();
        // $table->text('short_description')->nullable();
        // $table->text('long_description')->nullable();
        // $table->decimal('price', 10, 2);
        // $table->decimal('offer_price', 10, 2);
        // $table->string('sku');
        // $table->boolean('show_at_home')->default(false);
        // $table->boolean('status')->default(false);
        // //for seo 
        // $table->string('meta_title')->nullable();
        // $table->text('meta_description')->nullable();
        // $table->text('meta_keywords')->nullable();
        // $table->string('seo_url')->nullable();
        // $table->string('seo_title')->nullable();
        // $table->string('seo_description')->nullable();
        return [
            
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->slug(),
            'category_id' => function () {
                return \App\Models\Admin\Category::inRandomOrder()->first()->id;
            },
            'thumbnail_image' => $this->faker->imageUrl(),
            'short_description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'offer_price' => $this->faker->randomFloat(2, 10, 100),
            'sku' => $this->faker->ean13(),
            'show_at_home' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->sentence(),
            'meta_keywords' => $this->faker->sentence(),
            'seo_url' => $this->faker->url(),
            'seo_title' => $this->faker->sentence(),
            'seo_description' => $this->faker->sentence(),  

        ];
    }
}
