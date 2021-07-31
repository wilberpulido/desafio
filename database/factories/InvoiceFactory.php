<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => date("Y-m-d", mktime(0,0,0,6,20,2021)),
            'user_id' => rand(1,4),
            'seller_id' => rand(1,4),
            'type' => $this->faker->name,
        ];
    }
}
