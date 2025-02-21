<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "surname",
        "email",
        'password'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


}
