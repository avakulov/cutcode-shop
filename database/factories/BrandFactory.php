<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->company(),
            'thumbnail' => ''
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Brand $brand){
            $brand->slug = $brand->slug ?? str($brand->title)->slug();
        });
    }
}
