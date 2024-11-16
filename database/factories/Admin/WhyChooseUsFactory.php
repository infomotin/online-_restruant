<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WhyChooseUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->string('icon');
        // $table->string('title');
        // $table->text('short_description');
        // $table->boolean('status')->default(1);
        return [
            'icon' => 'fa-solid fa-paperclip',
            'title' => $this->faker->sentence(3),
            'short_description' => $this->faker->sentence(5),
            'status' => $this->faker->boolean(),
        ];
    }
}
