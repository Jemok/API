<?php

namespace App\Api\V1\Auth\Transformers;
use App\Api\V1\Transformers\Transformer;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 1:01 AM
 */
class RegistrationTransformer extends Transformer
{
    public function transform($user)
    {
        return [
            'meta'=>[
                'status_code' => '200',
                'status'     => 'OK',
                'message' => 'Thanks for signing up with Locate'
            ],
            'user' => [
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]
        ];
    }
}