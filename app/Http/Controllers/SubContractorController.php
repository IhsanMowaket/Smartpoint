<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubContractorRequest;
use App\Http\Resources\SubContractorResource;
use App\Models\SubContractor;

class SubContractorController extends Controller
{
    public function index()
    {
        return SubContractorResource::collection(SubContractor::all());
    }

    public function store(SubContractorRequest $request)
    {
        return new SubContractorResource(SubContractor::create($request->validated()));
    }

    public function show(SubContractor $subContractor)
    {
        return new SubContractorResource($subContractor);
    }

    public function update(SubContractorRequest $request, SubContractor $subContractor)
    {
        $subContractor->update($request->validated());

        return new SubContractorResource($subContractor);
    }

    public function destroy(SubContractor $subContractor)
    {
        $subContractor->delete();

        return response()->json();
    }
}
