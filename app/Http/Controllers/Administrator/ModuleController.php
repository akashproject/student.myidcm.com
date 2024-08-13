<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use Illuminate\Support\Facades\DB;


class ModuleController extends Controller
{
    //
    public function index($course_id)
    {
        try {
            $modules = Module::where('course_id',$course_id)->get();
            return view('administrator.modules.index',compact('modules','course_id'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }

    public function add($course_id) {
        return view('administrator.modules.add',compact('course_id'));
    }

    public function show($id)
    {
        try {
            $module = Module::find($id);
            return view('administrator.modules.show',compact('module'));
        } catch(\Illuminate\Database\QueryException $e){

        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);

           
            if($data['module_id'] <= 0){
                $module = Module::create($data);
            } else {
                $module = Module::findOrFail($data['module_id']);
                $module->update($data);
            }

            return redirect()->back()->with('message', 'Module updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $module = Module::findOrFail($id);
        $module->delete();
        return redirect()->route('admin-modules',$module->course_id)->with('message', 'Record deleted successfully!');
    }
}
