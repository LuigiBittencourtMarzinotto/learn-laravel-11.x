<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()  
    {
        $users = User::all();
        return Inertia::render('User', ["users"=>$users, "pathImg"=>asset('img/download.jpg'), "pathAddUser"=>route("register-user") ]);
    }

    public function register()  
    {
        return Inertia::render('RegisterUser');
    }

    public function store(StoreUserRequest $request){
        User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> $request->password,
        ]);
    }
}
