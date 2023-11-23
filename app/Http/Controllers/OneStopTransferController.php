<?php

namespace App\Http\Controllers;

use App\Http\Requests\OneStopTransferRequest;
use App\Http\Resources\OneStopTransferResource;
use App\Models\OneStopTransfer;

class OneStopTransferController extends Controller
{
    public function index()
    {
        return OneStopTransferResource::collection(OneStopTransfer::all());
    }

    public function store(OneStopTransferRequest $request)
    {
        return new OneStopTransferResource(OneStopTransfer::create($request->validated()));
    }

    public function show(OneStopTransfer $oneStopTransfer)
    {
        return new OneStopTransferResource($oneStopTransfer);
    }

    public function update(OneStopTransferRequest $request, OneStopTransfer $oneStopTransfer)
    {
        $oneStopTransfer->update($request->validated());

        return new OneStopTransferResource($oneStopTransfer);
    }

    public function destroy(OneStopTransfer $oneStopTransfer)
    {
        $oneStopTransfer->delete();

        return response()->json();
    }
}
