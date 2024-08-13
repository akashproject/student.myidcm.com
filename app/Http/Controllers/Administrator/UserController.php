<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function add() {
        return view('administrator.users.add');
    }

    public function userByCategory($role){
        try {
            $users = User::role($role)->get();;
            return view('administrator.users.index',compact('users'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id){
        try {
            $user = User::findOrFail($id);
            return view('administrator.users.show',compact('user'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }        
    }

    public function insert(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'mobile' => 'required',
            ]);

            $password = "12345678";
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'password' => Hash::make($password),
                'is_approved' => "0",
                'status' => "1",
                'email_verified_at' => date('Y-m-d h:i:s'),
            ]);
            $user->assignRole('teacher');

            return redirect()->back()->with('message', 'User inserted successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
            ]);

            $user = User::findOrFail($data['user_id']);
            $user->update($data);

            return redirect()->back()->with('message', 'User updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function approve($id,$is_approve) {
        $user = User::findOrFail($id);
        $user->is_approved = $is_approve;
        $user->save();
        return redirect()->back()->with('success', 'User approved successfully.');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/administrator/users');
    }
}
