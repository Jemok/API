<?php

namespace App\Api\V1\Parcels\Controllers;

use App\Api\V1\Location\Repositories\LocationRepository;
use App\Api\V1\Location\Transformers\LocationTransformer;
use App\Api\V1\Parcels\Repositories\ParcelRepository;
use App\Api\V1\Parcels\Transformers\ParcelTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParcelController extends Controller
{
    public function index(ParcelRepository $parcelRepository, ParcelTransformer $parcelTransformer){

        $parcels =  $parcelRepository->index()->toArray();

        return $this->respond(['data' => $parcelTransformer->transformCollection($parcels)]);
    }
}

