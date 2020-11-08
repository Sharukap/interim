<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    /* public function Index()
    {
    
        $Users = User::all()->toArray();
        return view('admin.admincreate',compact('Users'));

    } */

    public function fetchAllRoles(){
        $Users = User::all();
        return $Users;
    }

    public function createUser(){
        $data=[
            'email' => 'john@gmail.com',
            'password' => 'advs78932',
            'name'=>'John',
    
        ];

        User::create($data);
    }
    
    public function createNewUser(Request $request){

       
        $user =new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt(str_random(8));
        $user->save();

        
    }

    
}
