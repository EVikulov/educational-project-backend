<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\DeleteVehicleRequest;
use App\Http\Requests\Student\SearchVehicleRequest;
use App\Http\Requests\Student\UpdateVehicleRequest;
use App\Http\Requests\Vehicle\CreateVehicleRequest;
use App\Services\VehicleService;
use Illuminate\Http\Response;

class VehicleController extends Controller
{
    public function create(CreateVehicleRequest $request, VehicleService $service)
    {
        $result = $service->create($request->all());

        return response()->json($result);
    }

    public function delete(DeleteVehicleRequest $request, VehicleService $service, $id)
    {
        $service->delete($id);

        return response('', Response::HTTP_OK);
    }

    public function update(UpdateVehicleRequest $request, VehicleService $service, $id)
    {
        $service->update(['id' => $id], $request->all());

        return response('', Response::HTTP_NO_CONTENT);
    }

    public function search(SearchVehicleRequest $request, VehicleService $service)
    {
        $result = $service->search($request->all());

        return response()->json($result);
    }
}