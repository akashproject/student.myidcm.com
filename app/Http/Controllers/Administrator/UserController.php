<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        try {
            $users = User::all();
            return view('administrator.users.index',compact('users'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }
}
