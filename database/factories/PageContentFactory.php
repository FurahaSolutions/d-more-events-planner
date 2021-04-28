<?php

namespace Database\Factories;

use App\Models\PageContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PageContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'content_type' => $this->faker->slug,
//            'content' => $this->faker->paragraph
        ];
    }
    /**
     * Indicate that the user is suspended.
     *
     * @return Factory
     */
    public function aboutUs()
    {
        return $this->state(function (array $attributes) {
            return [
                'content_type' => 'about_us',
            ];
        });
    }
}
