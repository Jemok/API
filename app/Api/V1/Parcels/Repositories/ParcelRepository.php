<?php

namespace App\Api\V1\Parcels\Repositories;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 3:08 AM
 */

use App\ParcelDetail;

class ParcelRepository
{
    /**
     * The model used by this repository
     * @var
     */
    protected $model;

    /**
     * LocationRepository constructor.
     * @param Location $location
     */
    public function __construct(ParcelDetail $parcelDetail)
    {
        $this->model = $parcelDetail;
    }

    /**
     * Get all locations from the database
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(){

        return $this->model->all();
    }

}