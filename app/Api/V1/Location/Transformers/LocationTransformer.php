<?php

namespace App\Api\V1\Location\Transformers;
use App\Api\V1\Transformers\Transformer;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 2:56 AM
 */
class LocationTransformer extends Transformer
{
    public function transform($location){

        return [
            'id'       => (real) $location['id'],
            'latitude' => (real) $location['latitude'],
            'longitude'      => (real) $location['longitude'],
            'location_name'       => $location['location_name'],
            'user_id' => (int) $location['user_id']
        ];

    }

}