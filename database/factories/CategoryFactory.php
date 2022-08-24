<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(10),
            'pic' => '/assets/img/blog-recent-'. rand(1,5) .'.jpg',
            'desc' => $this->faker->realText(200),
            'enabled' => rand(0,1),
            'parent_id' => rand(0,5),
            'sort' => rand(0,10)
        ];
    }
}
