<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Offers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPackage>
 */
class JobPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "falt_rate" => fake()->word,
            "price" => 500,
            'number' => 5,
            'company_id' => Company::first()->id,
            'offer_id' => Offers::first()->id,
        ];
    }
}
