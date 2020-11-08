<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
    
        $Users = User::all()->toArray();
        return view('admin::index',compact('Users'));

    }

    public function index2()
    {
    
        $Users = User::all()->toArray();
        return view('admin::admincreate',compact('Users'));

    }
    
    public function home()
    {
        $name = 'Yashod';
        return view('admin::home', compact('name'));
    }

    

    
}
