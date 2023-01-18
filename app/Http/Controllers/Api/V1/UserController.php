<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Models\User;
use App\Sources\V1\UserSourceDb;
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

    public function index(Request $request): UserCollection
    {
        $source = new UserSourceDb();
        $users = $source->all();

        return new UserCollection($users);
    }

}
