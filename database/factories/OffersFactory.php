<?php

namespace Database\Factories;

use App\Models\Offers;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offers>
 */
class OffersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offers::class;

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'title' => fake()->word,
            'price' => 500,
            'type' => "Package",
            'number' => 5,
            'days' => Carbon::now()->addDay(2),
            
        ];
    }
}
