<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $date = $this->faker->dateTimeBetween('-1 week', 'now');

        return [
            
            'user_id' => User::factory(),
            'date' => $date,
            'start_time' => $this->faker-> time('H:i:s'),
            'end_time' =>$this->faker->time('H:i:s'),
            'breakTime'=>$this->faker->time('H:i:s'),
            'workingTime'=>$this->faker->time('H:i:s'),
            'created_at' => $date,
            'updated_at' =>$date,          

        ];
    }
}
