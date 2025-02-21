<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    /** @use HasFactory<\Database\Factories\TimeSlotFactory> */
    use HasFactory;
    protected $fillable = ["slot_date","start_time","end_time"];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function course()
    {
        return $this->belongsTo(TimeSlot::class, 'course_id');
    }

}
