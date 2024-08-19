<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

    public function generate(){
        try {
            // $data = $request->all();
            // $validatedData = $request->validate([
            //     'qr_content' => 'required',
            // ]);
            
            $data = [
                'center'=> "dalhousi",
            ];
            $qr_content = route('admin-certificate');
            $code = random_strings(6);
            if(isset($data['code'])){
                $code = $data['code'];
                $qr_content = $qr_content.'?utm_campaign='.$code.'&center='.$data['center'];
            }

            QrCode::merge('/assets/images/fab.png')
            ->size(256)
            ->margin(1)
            ->generate($qr_content, public_path('images/qrcode_'.$code.'.svg'));

            $qrPath = url("public/images/qrcode_").$code.'.svg';
           return view('administrator.certificate.generate',compact('qrPath'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }
    
}
