<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\ProductCategory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word, 
            'slug' => $this->faker->unique()->slug, 
            'description' => $this->faker->sentence, 
            'category_id' => ProductCategory::inRandomOrder()->first()?->id, 
        ];
    }
}
