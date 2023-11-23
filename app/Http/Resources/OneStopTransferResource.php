<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\OneStopTransfer */
class OneStopTransferResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'origen_location' => $this->origen_location,
            'destination_location' => $this->distenation_location,
            'origen_customer' => $this->origen_customer,
            'destination_customer' => $this->distenation_customer,
            'geo' => $this->geo,
            'task_time' => $this->task_time,
            'end_time' => $this->end_time,
            'task_status' => $this->tast_status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
