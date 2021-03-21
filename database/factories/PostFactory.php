<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$section =  App\Models\Section::find(\rand(1,10) )->id;

        return [
            "section_id"    =>  \App\Models\Section::find( \rand(1,10) )->id,
            "slug"          =>  $this->faker->slug(3),
            "title"         =>  $this->faker->name,
            "image"         =>  $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            "description"   =>  $this->faker->text,
        ];
    }
}
