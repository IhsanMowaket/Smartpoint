<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SubContractor */
class SubContractorResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'company' => $this->company,
            'contact_firstname' => $this->contact_firstname,
            'contact_lastname' => $this->contact_lastname,
            'position' => $this->position,
            'web_site' => $this->web_site,
            'Address_zusatz' => $this->Address_zusatz,
            'street' => $this->street,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'tax_id' => $this->tax_id,
            'Bank Name' => $this->bank_name,
            'iban' => $this->iban,
            'contracts_agreements' => $this->contracts_agreements,
            'certifications_qualifications' => $this->certifications_qualifications,
            'work_history' => $this->work_history,
            'safety_certifications' => $this->safety_certifications,
            'extra_emails' => $this->extra_emails,
            'notes' => $this->notes,
            'worker_count' => $this->worker_count,
            'outstanding' => $this->outstanding,
            'user_id' => $this->user_id,
            'is_active' => $this->is_active,
            'user' => new UserResource($this->whenLoaded('user')), // Assuming you have a UserResource.
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
