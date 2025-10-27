<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'specialization' =>$this->faker->randomElement([
                'Cardiology', 'Dermatology', 'Neurology', 'Pediatrics',
                'Orthopedics', 'Gynecology', 'Psychiatry', 'Oncology'
            ]),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'bio' => $this->faker->sentence(10),

        ];
    }
}
