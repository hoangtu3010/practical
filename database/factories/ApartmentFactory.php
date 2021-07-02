<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->text(30),
            "address"=>$this->faker->address,
            "price"=>$this->faker->numberBetween(1000000, 2000000),
            "general_information"=>$this->faker->text(50),
            "detailed_information"=>$this->faker->text(150),
            "status"=>$this->faker->text(200),
            "image"=>"a1.jpg"
        ];
    }
}
