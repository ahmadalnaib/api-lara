<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use App\Http\Requests\ApiLoginReqeust;

class AuthController extends Controller
{
    use ApiResponses;
    //
    public function login(ApiLoginReqeust $request)
    {
        return $this->successResponse($request->get('email'));
    }

    public function register(Request $request)
    {
        return $this->successResponse($request->all());
    }
}
