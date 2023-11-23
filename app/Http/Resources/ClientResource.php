<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Client */
class ClientResource extends JsonResource
{
    public function toArray($request)
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
            'extra_emails' => $this->extra_emails,
            'notes' => $this->notes,
            'outstanding' => $this->outstanding,
            'user' => new UserResource($this->whenLoaded('user')), // Assuming you have a UserResource for the user.
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
