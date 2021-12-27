<?php

namespace Database\Factories;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Review::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'image' => $this->faker->image('G:/daksh/food/storage/images',640,480, null, false),
            'desc' =>$this->faker->paragraph(),
            'rating' =>4,
            
        ];
    }
}
