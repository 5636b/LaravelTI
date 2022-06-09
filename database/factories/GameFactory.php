<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'ano_lancamento' => $this->faker->numberBetween($int1 = 1994, $int2 = 2022),
            'genero' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween($int1 = 0, $int2 = 100)
        ];
    }
}
