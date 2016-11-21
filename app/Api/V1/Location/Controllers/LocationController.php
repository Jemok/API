<?php

namespace App\Api\V1\Location\Controllers;

use App\Api\V1\Location\Repositories\LocationRepository;
use App\Api\V1\Location\Transformers\LocationTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index(LocationRepository $locationRepository, LocationTransformer $locationTransformer){

        $locations =  $locationRepository->index()->toArray();

        return $this->respond(['data' => $locationTransformer->transformCollection($locations)]);

    }
}

