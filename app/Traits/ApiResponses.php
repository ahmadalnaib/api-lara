<?php
namespace App\Traits;

trait ApiResponses
{

    public function ok($message,$data=null)
    {
        return $this->successResponse($message,$data, 200);
    }

    public function successResponse($message,$data, $code = 200)
    {
        return response()->json(['message' => $message,'code'=>$code,'data'=>$data], $code);
    }

    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }


}