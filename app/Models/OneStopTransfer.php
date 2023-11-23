<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OneStopTransfer extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'origen_location',
        'destination_location',
        'origen_customer',
        'destination_customer',
        'geo',
        'task_time',
        'end_time',
        'task_status',
    ];

    protected $casts = [
        'task_time' => 'datetime',
        'end_time' => 'datetime',
    ];
}
