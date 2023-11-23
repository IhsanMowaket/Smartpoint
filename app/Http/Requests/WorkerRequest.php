<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
{
    public function rules(): array
    {
 return [
     'company' => ['required', 'string'],
     'firstname' => ['required', 'string'],
     'lastname' => ['required', 'string'],
     'gender' => ['required', 'in:male,female'],
     'Address_zusatz' => ['nullable', 'string'],
     'street' => ['required', 'string'],
     'zip_code' => ['required', 'string'],
     'city' => ['required', 'string'],
     'date_of_birth' => ['required', 'date'],
     'place_of_birth' => ['required', 'string'],
     'id_card' => ['required', 'string'],
     'driver_license' => ['required', 'string'],
     'nationality' => ['required', 'string'],
     'user_id' => ['required', 'exists:users,id'], // Assuming working_for is a foreign key.

     // You can add validation rules for other fields as needed.
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
