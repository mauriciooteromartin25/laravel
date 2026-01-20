<?php

namespace Database\Factories;

use App\Models\PostMOM;
use App\Models\UserMOM;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostMOM>
 */
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostMOM::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isPublished = fake()->boolean(70); // 70% de probabilidad de estar publicado
        $categories = ['Tecnología', 'Ciencia', 'Deportes', 'Cultura', 'Salud', 'Educación', 'Negocios'];
        $content = fake()->paragraphs(5, true);
        
        return [
            'user_id' => UserMOM::factory(),
            'title' => fake()->sentence(6),
            'content' => $content,
            'excerpt' => fake()->text(150),
            'views' => fake()->numberBetween(0, 10000),
            'category' => fake()->randomElement($categories),
            'published_at' => $isPublished ? fake()->dateTimeBetween('-1 year', 'now') : null,
            'is_published' => $isPublished,
        ];
    }
}
