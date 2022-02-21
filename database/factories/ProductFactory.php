<?php

namespace Database\Factories;

use Sluggable;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $x = 'product ' . $this->faker->lastName();
        return [
            'title' => $x,
            'category_id' => $this->faker->numberBetween(1, 30),
            'slug' => SlugService::createSlug(Product::class, 'slug', $x),
        ];
    }
}
