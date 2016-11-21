<?php

namespace App\Api\V1\Auth\Traits;
use Illuminate\Support\Facades\Validator;
use App\Api\V1\Validator\ApiValidator;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 1:04 AM
 */
trait SignUpValidator
{
    /**
     * Validate a new signup request
     * @param $userData
     * @param $signup_fields
     * @return mixed
     * @throws \Dingo\Api\Exception\ValidationHttpException
     */
    public function validateSignup($data){

        //Start the validation process
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone_number' => 'required|max:13|min:13',
            'password' => 'required|min:6|confirmed',
        ]);

        $apiValidator = new ApiValidator;

        $apiValidator->validate($validator);
    }


}