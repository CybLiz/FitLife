<?php

namespace App\Http\Controllers;
use App\Models\Course;


use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function courses()
    {

        // dd('test');
        $courses = Course::all();
        return view('home', ['course' => $courses]);

    }

    public function accessBookingForm($course)
    {
        $course = Course::findOrFail($course); 
        return view('Booking', ['course' => $course]);
    }
}
