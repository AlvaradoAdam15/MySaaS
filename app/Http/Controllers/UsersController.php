<?php

namespace App\Http\Controllers;

use App\User;
use Cache;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{


    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Cache::remember('users', 10, function(){
            return User::all();
        });

        return $users;
    }
}
