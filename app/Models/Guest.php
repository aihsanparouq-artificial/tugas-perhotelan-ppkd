<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'room_no',
        'no_of_person',
        'no_of_room',
        'room_type',
        'receptionist',
        'checkout_time',
        'name',
        'profession',
        'company',
        'nationality',
        'passport_no',
        'birth_date',
        'address',
        'email',
        'phone',
        'arrival_time',
        'arrival_date',
        'departure_date',
        'issued_by',
        'date_of_book'
    ];
}
