<?php

namespace Database\Factories;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeSlot>
 */
class TimeSlotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'slot_date'=> fake()->date(),
            'start_time'=> fake()->dateTime(),
            'end_time'=> fake()->dateTime(),
            'course_id'=> Course::factory(),
        ];
    }
}
