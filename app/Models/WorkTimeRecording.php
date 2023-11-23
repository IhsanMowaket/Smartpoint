<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkTimeRecording extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'record_date', 'start_time', 'end_time', 'pause_start', 'pause_end',
        'hours_worked', 'status', 'user_id', 'month', 'year'
    ];

    protected $casts = [
        'record_date' => 'datetime',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'pause_start' => 'datetime',
        'pause_end' => 'datetime',
        'hours_worked' => 'decimal:2',
        'month' => 'integer',
        'year' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
        // If the foreign key in the WorkTimeRecording table is not the default 'employee_id', you'll need to specify it as a second argument
    }
}
