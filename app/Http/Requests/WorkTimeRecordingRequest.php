<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkTimeRecordingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'record_date' => 'required|date',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'pause_start' => 'nullable|date',
            'pause_end' => 'nullable|date',
            'hours_worked' => 'nullable|numeric',
            'status' => 'required|string',
            'year' => 'required|integer',
            'month' => 'nullable|integer',
            'user_id' => 'required|integer|exists:users,id', // Adjust table name if different
            ];

    }

    public function authorize(): bool
    {
        return true;
    }
}
