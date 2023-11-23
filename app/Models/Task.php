<?php

namespace App\Models;

use App\Http\Models\TaskDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    public function taskdetail(){
        return $this->hasOne(TaskDetail::class);
    }

    protected $fillable = [
        'pickup_Location',
        'pickup_Customer',
        'delivery_Location',
        'delivery_Customer',
        'Sequence',
        'category',
        'distance',
        'note',
        'pickup_Time',
        'pickup_date',
        'phone_Number',
        'sub_contractors',
        'employee',
        'client',
        'Status'
    ];

    protected $casts = [
        'note' => 'array',
        'pickup_date' => 'date',
        'pickup_Time' => 'datetime',
        // Add any other necessary casts
    ];
}
