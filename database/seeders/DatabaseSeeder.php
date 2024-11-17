<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Slider;
use App\Models\Admin\WhyChooseUs;
use App\Models\Admin\Category;
use App\Models\Admin\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(UserSeeder::class);
        // $this->call(WhyChooseUsTitleSeeder::class);
        // Slider::factory(20)->create();
        // WhyChooseUs::factory(20)->create();
        // $this->call(CategorySeeder::class);
        Product::factory(20000)->create();

    }
}
