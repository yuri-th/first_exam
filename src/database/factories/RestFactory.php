<?php

namespace Database\Factories;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attendance_id' => Attendance::factory(),
            'start_time' => $this->faker-> time('H:i:s'),
            'end_time' =>$this->faker->time('H:i:s'),
            'total_time'=>$this->faker->time('H:i:s'),
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'updated_at' =>$this->faker->dateTimeBetween('-1 week', 'now')          

            
        ];
    }
}
