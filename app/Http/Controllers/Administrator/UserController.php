<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::all();
            return view('administrator.users.index',compact('users'));
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function students()
    {
        try {
            $users = User::role('Student')->get();
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
            $users = User::role($role)->get();
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
                'email' => 'required',
                'mobile' => 'required',
            ]);

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'password' => Hash::make("12345678"),
                'is_approved' => "0",
                'status' => "1",
                'email_verified_at' => date('Y-m-d h:i:s'),
            ]);
            $user->assignRole('Student');
            unset($data['_token']);
            unset($data['name']);
            unset($data['email']);
            unset($data['mobile']);

            foreach($data as $key => $value){
                $user_meta = UserMeta::where('key', $key)->where('user_id',$user->id);
                $value = (is_array($value))?json_encode($value):$value;
                if($user_meta->exists()){
                    $user_meta->update(array("user_id"=>$user->id,"key"=>$key,"value"=>$value));  
                } else {
                    $user_meta->create(array("user_id"=>$user->id,"key"=>$key,"value"=>$value)); 
                }
            }

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

    public function bulkUpload(){
        try {
            return view('administrator.users.upload');

        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function import(Request $request) {
        try {
            $data = $request->all();
            
            $validatedData = $request->validate([
                'bulkupload' => 'required|file|mimes:csv,txt',
            ]);

            // Get the uploaded file
            $file = $request->file('bulkupload');

            $students = [];
            if (($handle = fopen($file->getRealPath(), 'r')) !== FALSE) {
                // Optional: If your CSV has a header row, use the first row as keys
                $headers = fgetcsv($handle);
    
                while (($data = fgetcsv($handle)) !== FALSE) {
                    $students = array_combine($headers, $data);
                    $user = User::create([
                        'name' => $students['name'],
                        'email' => $students['email'],
                        'mobile' => $students['mobile'],
                        'password' => Hash::make("12345678"),
                        'is_approved' => "0",
                        'status' => "1",
                        'email_verified_at' => date('Y-m-d h:i:s'),
                    ]);
                    $user->assignRole('Student');
                    unset($students['name']);
                    unset($students['email']);
                    unset($students['mobile']);
        
                    foreach($students as $key => $value){
                        $user_meta = UserMeta::where('key', $key)->where('user_id',$user->id);
                        $value = (is_array($value))?json_encode($value):$value;
                        if($user_meta->exists()){
                            $user_meta->update(array("user_id"=>$user->id,"key"=>$key,"value"=>$value));  
                        } else {
                            $user_meta->create(array("user_id"=>$user->id,"key"=>$key,"value"=>$value)); 
                        }
                    }
                }
    
                fclose($handle);
            }
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