<?php

namespace Database\Factories;

use App\Models\Alumni;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumniFactory extends Factory
{
    protected $model = Alumni::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            // 'tgl_lahir' => $this->faker->dateTimeBetween('2000-01-01', '2001-01-01')->format('Y-m-d'),
            'tgl_lahir' => $this->faker->dateTimeBetween('2000-10-10', '2001-10-10'),
        ];
    }
}
