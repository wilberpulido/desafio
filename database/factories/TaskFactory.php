<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,4),
            'description' => $this->faker->text(250),
            'expiration_date' => date("Y-m-d", mktime(0,0,0,12,20,2021)),
            'state' => 'in process',
            'isActive' => true,
        ];
    }
}
