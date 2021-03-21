<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "slug"=>$this->faker->slug(2),
            "title"=>$this->faker->name,
            "image"=>$this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            "description"=>$this->faker->text,
        ];
    }
}
