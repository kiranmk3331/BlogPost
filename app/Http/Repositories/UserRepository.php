<?php

namespace App\Http\Repositories;
use Illuminate\Support\Str;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($request)
    {
         $this->user->create($request);
       
        
    }  
}