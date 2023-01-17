<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function store(Request $request)
    {
        return [
            'result' => 'success',
            'method' => 'store'
        ];
    }

    public function index(Request $request)
    {
        return [
            'result' => 'success',
            'method' => 'index'
        ];
    }

}
