<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkTimeRecordingRequest;
use App\Http\Resources\WorkTimeRecordingResource;
use App\Models\WorkTimeRecording;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;



    class WorkTimeRecordingController extends Controller
{
        public function showWorkTimeRecords(Request $request)
    {
        $workTimeRecords = [];
        foreach ($days as $day) {
            foreach ($users as $user) {
                $record = $user->workTimeRecordings()->whereDate('record_date', $day)->first();
                $workTimeRecords[$day->format('Y-m-d')][$user->id] = $record;
    }
}

        // Pass this data to the view
        return view('profile', compact('workTimeRecords', 'days', 'users'));
    }


    public function index()
    {
        return WorkTimeRecordingResource::collection(WorkTimeRecording::all());
    }

    public function store(WorkTimeRecordingRequest $request)
    {
        return new WorkTimeRecordingResource(WorkTimeRecording::create($request->validated()));
    }

    public function show(WorkTimeRecording $workTimeRecording)
    {
        return new WorkTimeRecordingResource($workTimeRecording);
    }

    public function update(WorkTimeRecordingRequest $request, WorkTimeRecording $workTimeRecording)
    {
        $workTimeRecording->update($request->validated());

        return new WorkTimeRecordingResource($workTimeRecording);
    }

    public function destroy(WorkTimeRecording $workTimeRecording)
    {
        $workTimeRecording->delete();

        return response()->json();
    }
}
