<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiWatcherController extends Controller
{
    public function index(Request $request)
    {
        $response = [
            'Method:' => $request->method(),
            'Headers:' => $request->headers->all(),
            'Parameters:' => $request->all(),
        ];

        \Log::driver('api')->debug($response);

        return $response;
    }
}
