<?php

namespace Database\Factories;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Support\Str;

class PizzaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pizza::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //return [
            return [
                //        'type', 'base', 'name', 'toppings'
                'type' => $this->faker->text(),
                'base' => $this->faker->text(),
                'name' => $this->faker->name(),

                'toppings' => json_encode([
                    $this->faker->randomElement(
                         [
                           "mushroom",
                           "garlic", 
                           "olive"
                         ],
                         [
                            "garlic", 
                            "olive"
                          ]
                      )
                 ])

            ];
        //];
    }
}
