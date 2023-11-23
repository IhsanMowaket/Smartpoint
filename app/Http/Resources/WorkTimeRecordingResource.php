<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\WorkTimeRecording */
class WorkTimeRecordingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'record_date' => $this->record_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'pause_start' => $this->pause_start,
            'pause_end' => $this->pause_end,
            'hours_worked' => $this->hours_worked,
            'status' => $this->status,
            'month' => $this->month,
            'year' => $this->year,
            'user_id' => new UserResource($this->whenLoaded('user')), // Nested User Object
            // You can include additional fields or relationships if necessary
        ];
    }
}
