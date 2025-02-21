<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function courses()
    {

        // dd('test');
        $courses = Course::paginate(4);
        return view('home', ['course' => $courses]);
    }

    public function accessBookingForm($course)
    {
        $course = Course::findOrFail($course);
        return view('Booking', ['course' => $course]);
    }

    public function addReservation(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'reservation_date' => 'required|date',
        ]);

        Reservation::create([
            'course_id' => $request->input('course_id'),
            'reservation_date' => $request->input('reservation_date'),
            'admin_id' => 1,
            'user_id' => 1,
        ]);

        return redirect('/reservations')->with('message', 'Réservation confirmée !');
    }

    public function reservations()
    {
        $reservations = Reservation::with(['course'])->get();
        return view('Reservations', ['reservations' => $reservations]);
    }
}
