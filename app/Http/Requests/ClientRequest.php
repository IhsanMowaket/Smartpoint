<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function rules()
    {
        return [
            'company' => ['required', 'string', 'max:255'],
            'contact_firstname' => ['required', 'string', 'max:255'],
            'contact_lastname' => ['required', 'string', 'max:255'],
            'position' => ['nullable', 'string', 'max:255'],
            'web_site' => ['nullable', 'string', 'url', 'max:255'],
            'Address_zusatz' => ['nullable', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:255'],
            'tax_id' => ['nullable', 'string', 'max:255'],
            'extra_emails' => ['nullable', 'string', 'max:255', 'email'], // You might want to validate the email format separately
            'notes' => ['required', 'string'],
            'outstanding' => ['required', 'numeric'],
            'user_id' => 'exists:users,id', // Validate that the user_id exists in the users table.
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
