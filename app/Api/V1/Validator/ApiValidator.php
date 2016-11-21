<?php
namespace App\Api\V1\Validator;

use Dingo\Api\Exception\ValidationHttpException;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 1:06 AM
 */
class ApiValidator
{
    /**
     * Handle Validation
     * @param $validator
     * @return mixed
     * @throws ValidationHttpException
     */
    public function validate($validator){
        if($validator->fails()) {
            throw new ValidationHttpException($validator->errors()->all());
        }
        return $validator;
    }
}