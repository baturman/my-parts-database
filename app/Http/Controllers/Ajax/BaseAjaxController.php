<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;

class BaseAjaxController extends Controller
{

    public function sendResponse($status, $message, $data = null){

        $response = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];

        return response()->json($response);
    }


}