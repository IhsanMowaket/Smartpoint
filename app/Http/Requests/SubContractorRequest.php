<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubContractorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company' => 'required|string|max:255',
            'contact_firstname' => 'required|string|max:255',
            'contact_lastname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'web_site' => 'nullable|string|max:255',
            'Address_zusatz' => 'nullable|string|max:255',
            'street' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'tax_id' => 'nullable|string|max:255',
            'Bank Name' => 'nullable|string|max:255',
            'iban' => 'nullable|string|max:255',
            'contracts_agreements' => 'nullable|string',
            'certifications_qualifications' => 'nullable|string',
            'work_history' => 'nullable|string',
            'safety_certifications' => 'nullable|string',
            'extra_emails' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
            'worker_count' => 'required|integer|min:0',
            'outstanding' => 'numeric|min:0',
            'user_id' => 'exists:users,id', // Validate that the user_id exists in the users table.
            'is_active' => 'boolean',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
