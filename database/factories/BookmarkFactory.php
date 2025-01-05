<?php

namespace Packages\Bookmarkable\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookmarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Packages\Bookmarkable\Models\Bookmark::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
