<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginUserRequest;


class AuthController extends Controller
{
    use ApiResponses;
    //
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        if(!Auth()->attempt($request->only('email', 'password'))){
            return $this->errorResponse('Invaild credentails', 401);
        }

        $user=User::firstWhere('email', $request->email);
        return $this->ok([
            'Authenticaed',
            [
                'token' => $user->createToken('api token for' .$user->email)->plainTextToken,
           
            ],

        ]);
    }

    public function register(Request $request)
    {
        return $this->successResponse($request->all());
    }



    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->ok('Logged out');
    }
}
