<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Replay>
 */
class ReplayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'   => DB::table('users')->inRandomOrder()->value('id'),
            'comment_id'=> DB::table('comments')->inRandomOrder()->value('id'),
            'replay'    => fake()->paragraph()
        ];
    }
}
