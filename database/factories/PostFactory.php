<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author' => $this->faker->firstNameMale(),
            'title' => substr($this->faker->sentence(4), 0, -1),
            'excerpt' => "<p>" . implode("</p><p>", $this->faker->paragraphs(2)) . "</p>",
            'content' => "<p>" . implode("</p><p>", $this->faker->paragraphs(9)) . "</p>",
            'img' => $this->faker->boolean(),
            'establish' => $this->faker->boolean(),
        ];
    }
}
