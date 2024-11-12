<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'image' => $this->faker->imageUrl(),
            'offer' => $this->faker->word(),
            'title' => $this->faker->word(),
            'sub_title' => $this->faker->word(),
            'short_description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraph(),
            'button_link' => $this->faker->url(),
            'button_text' => $this->faker->word(),
            'aria_label' => $this->faker->word(),
            'alt_text' => $this->faker->word(),
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'status' => $this->faker->boolean(),
        ];
    }
}
