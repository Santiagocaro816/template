<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SaleFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        return [
			'code' => $this->faker->name,
			'type' => $this->faker->name,
        ];
    }
}
