<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'company',
        'firstname',
        'lastname',
        'gender',
        'Address_zusatz',
        'street',
        'zip_code',
        'city',
        'date_of_birth',
        'place_of_birth',
        'id_card',
        'driver_license',
        'nationality',
        'user_id',
    ];

    protected $casts = [
        'date_of_birth' => 'date', // Cast 'date_of_birth' to a date.
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
