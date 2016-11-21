<?php

namespace App\Api\V1\Parcels\Transformers;
use App\Api\V1\Transformers\Transformer;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 1:01 AM
 */
class ParcelTransformer extends Transformer
{
    public function transform($parcel)
    {
        return [
            'parcelId'       => $parcel['id'],
            'parcelName' => $parcel['name'],
            'parcelPrice'      => (real) $parcel['price'],
            'parcelMerchant'       => $parcel['oauth_client_id'],
            'userId' => (int) $parcel['user_id'],
            'agentId' => (int) $parcel['agent_id']
        ];
    }
}