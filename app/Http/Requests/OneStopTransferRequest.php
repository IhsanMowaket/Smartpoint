<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OneStopTransferRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'origen_location' => ['required'],
            'destination_location' => ['required'],
            'origen_customer' => ['nullable'],
            'destination_customer' => ['nullable'],
            'geo' => ['nullable'],
            'task_time' => ['required', 'date'],
            'end_time' => ['nullable', 'date'],
            'task_status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
