<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Client */
class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company' => $this->company,
            'phone' => $this->phone,
            'email' => $this->email,
            'role' => $this->role,
            'field' => $this->field,
            'is_online' => $this->is_online,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'login_code' and 'remember_token' are usually not exposed
        ];
    }
}
