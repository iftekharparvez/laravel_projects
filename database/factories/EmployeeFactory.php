<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'father_name' => $this->faker->name,
            'mother_name' => $this->faker->name,
            'card_no' => $this->faker->creditCardNumber,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'marital_status' => $this->faker->randomElement(['single', 'married']),
            'date_of_birth' => $this->faker->date,
            'salary' => $this->faker->numberBetween(1000, 5000),
            'is_ot_enable' => $this->faker->boolean,
            'present_address' => $this->faker->address,
            'permanent_address' => $this->faker->address,
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
