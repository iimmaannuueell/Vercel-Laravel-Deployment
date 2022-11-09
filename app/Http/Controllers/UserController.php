<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $res = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => '123456',
            ],
            [
                'id' => 2,
                'name' => 'John Doe',
                'email' => 'john@doe.com',
                'password' => '123456',
            ]
        ];

        return response()->json($res);
    }
}
