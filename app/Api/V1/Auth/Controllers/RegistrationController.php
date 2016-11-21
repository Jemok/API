<?php

namespace App\Api\V1\Auth\Controllers;

use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use App\Api\V1\Auth\Repositories\RegistrationRepository;
use App\Api\V1\Auth\Transformers\RegistrationTransformer;
use App\Api\V1\Auth\Traits\SignUpValidator;

class RegistrationController extends Controller
{
    /**
     * The Dingo API helpers
     */
    use Helpers, SignUpValidator;

    /**
     * @param Request $request
     * @param RegistrationRepository $registrationRepository
     * @param RegistrationTransformer $registrationTransformer
     * @return array|void
     */
    public function register(Request $request, RegistrationRepository $registrationRepository, RegistrationTransformer $registrationTransformer)
    {
        $this->validateSignup($request->all());

        if($user = $registrationRepository->create($request->all())){

            return $registrationTransformer->transform($user);
        }

        return $this->response->error('An error occurred while creating the user', 500);
    }
}
