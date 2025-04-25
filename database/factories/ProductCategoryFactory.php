<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCategory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    protected $model = ProductCategory::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word, 
            'parent_id' => $this->faker->boolean(70) ? ProductCategory::inRandomOrder()->first()?->id : null, 
        ];
    }

}
