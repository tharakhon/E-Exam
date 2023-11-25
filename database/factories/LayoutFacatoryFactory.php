<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LayoutFacatoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'fullname'=>fake()->name(),
           'position'=>fake()->text(),
           'email'=>fake()->name(),
            'phone'=>fake()->name(),
            'Leavetype'=>fake()->name(),
            'vacation'=>fake()->name(),
            'DateTo'=>fake()->date(),
            
        ];
    }
}
