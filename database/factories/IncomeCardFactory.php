<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IncomeCard>
 */
class IncomeCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bank_name' => $this->faker->sentence(),
            'card_number' => $this->faker->sentence(),
            'credit_by' => rand(1,3),
            'credit_for' => rand(1,3),
            'currency' => rand(1,3),
            'amount' => rand(1,1000),
            'date' => $this->faker->dateTimeThisMonth(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
