<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Repositories\UserRepository;
use App\Http\Responses\SuccessResponse;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }


    public function store(UserRequest $request){

        $request['password'] = bcrypt($request['password']);
        $this->user->create($request->all());
        return new SuccessResponse('User created successfully');


    }
}
