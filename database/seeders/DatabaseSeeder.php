<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\TimeSlot;
use App\Models\User;
use App\Models\Admin;
use App\Models\Course;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory(10)->create();
        // Admin::factory(10)->create();
        // Course::factory(10)->create();
        Reservation::factory(10)->create();
        // TimeSlot::factory(10)->create();


    }
}
