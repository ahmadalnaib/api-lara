<?php
namespace App\Traits;

trait ApiResponses
{
    public function successResponse($data, $code = 200)
    {
        return response()->json(['data' => $data], $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}