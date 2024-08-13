<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //

    public function show(){
        try {


            return view('administrator.certificate.show');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
    }
}
