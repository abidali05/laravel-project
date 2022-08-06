<?php

namespace Database\Factories;
use App\Models\Text;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class fakerFactory extends Factory
{
    protected $model = Text::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title();
            'description' => $this->faker->text();
        ];
    }
}
