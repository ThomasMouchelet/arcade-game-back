<?php

namespace Database\Factories;

use App\Models\Parties;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Parties::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $carbon = new Carbon();
        return [
            'username' => $this->faker->name,
            'avatar' => 1,
            'score' => rand(99,999),
            'time' => $carbon->setTime(0, mt_rand(1,10))
        ];
    }
}
