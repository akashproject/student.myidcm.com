<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function centerLogin()
    {
        try {
            $users = User::where('role','center')->get();
            return view('administrator.users.centers',compact('users'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function universityLogin()
    {
        try {
            $users = User::where('role','university')->get();
            return view('administrator.users.universities',compact('users'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }
}
