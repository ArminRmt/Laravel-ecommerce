<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber(),
            'last_seen' => $this->faker->text(30),
            'email_verified_at' => now(),
            'username' => $this->faker->userName,
            'password' => bcrypt('pass1'), // password
            'remember_token' => Str::random(10),
            'current_team_id' => $this->faker->numberBetween(1, 3),
            'profile_photo_path' => $this->faker->image('public/backend/images/avatar/avatar-1.png', 200, 200, null, false),


        ];
    }
}