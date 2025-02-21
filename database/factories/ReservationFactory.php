<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\TimeSlot;
use App\Models\User;
use App\Models\Admin;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          
            'reservation_date'=> fake()->date(),
            'user_id'=> User::factory(),
            'slot_id'=> TimeSlot::factory(),
            'course_id'=> Course::factory(),
            'admin_id'=> Admin::factory(),

        ];
    }
}
