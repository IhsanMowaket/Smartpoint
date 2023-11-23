<?php

namespace App\Http\Resources;

use App\Models\Worker;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Worker */
class WorkerResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'company' => $this->company,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'gender' => $this->gender,
            'Address_zusatz' => $this->Address_zusatz,
            'street' => $this->street,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'date_of_birth' => $this->date_of_birth,
            'place_of_birth' => $this->place_of_birth,
            'id_card' => $this->id_card,
            'driver_license' => $this->driver_license,
            'nationality' => $this->nationality,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
