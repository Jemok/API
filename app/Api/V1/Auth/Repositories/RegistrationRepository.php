<?php

namespace App\Api\V1\Auth\Repositories;

use App\User;


/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/16
 * Time: 12:57 AM
 */
class RegistrationRepository
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }


}