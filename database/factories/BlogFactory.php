<?php

namespace Database\Factories;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'image' => $this->faker->image('G:/daksh/food/storage/images',640,480, null, false),
            'desc' =>$this->faker->paragraph(),
            
        ];
    }
}
