<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function handleResponse($result, $msg)
    {
        $res = [
            'success' =>true,
            'data' =>$result,
            'message' =>$msg,
        ];
        return response()->json($res, 200);
    }
}
