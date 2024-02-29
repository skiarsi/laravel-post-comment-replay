<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $postTitle = fake()->paragraph();
        $postSlug = Str::slug($postTitle);
        return [
            'user_id' => DB::table('users')->inRandomOrder()->value('id'),
            'slug'      => $postSlug,
            'title'     => $postTitle,
            'describ'   => fake()->paragraphs(1,true),
            'text'      => fake()->paragraphs(4,true)
        ];
    }
}
