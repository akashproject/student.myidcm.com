@extends('administrator.layouts.admin')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=0">
<div class="col-12">
    <div class="mb-3">
        <a href="javascript:void()" class="btn btn-secondary add-new btn-primary" onclick="printDiv()">
            <span>
                <i class="bx bx-download me-0 me-sm-1"></i>
                <span class="d-none d-sm-inline-block">Download</span>
            </span>
        </a>
    </div>
	<div class="card">
        <style>
        .certificate-subheader::before {
            content: "";
            background: #283b8f;
            height: 17px;
            width: 41%;
            display: inline-flex;
            position: absolute;
            left: -32px;
            top: 5px;
        }
        /* .certificate::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 172px;
            background-size: cover;
            width: 246px;
            overflow: hidden;
            background-image: url('http://localhost/student.myidcm.com/assets/administrator/img/left-corner.png');
        } */

        /* .certificate::after {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            height: 172px;
            background-size: cover;
            width: 246px;
            overflow: hidden;
            background-image: url('http://localhost/student.myidcm.com/assets/administrator/img/right-corner.png');
        } */
    </style>
		<div class="certificate" style="border: 1px solid;padding: 6px;position: relative;" id="certificate">
            <img style="position: absolute;right: 0;top: 0;height: 172px;background-size: cover;width: 246px;overflow: hidden;" src="{{ url('/assets/administrator/img/right-corner.png') }}">
            <div class="certificate-border" style="border: 2px solid #d3b739;padding: 11px 23px;padding-bottom: 0px;">
                <div class="certificate-logo" style="width: 222px;overflow: hidden;">
                    <img src="{{ url('/assets/administrator/img/logo.png') }}" style="width: 100%;">
                </div>
                <div class="certificate-header" style="text-align: center;">
                    <h3 style="color: #283b8f;font-size: 70px;font-weight: 800;margin: 0;">CERTIFICATE</h3>
                </div>
                <div class="" style="text-align: center;position: relative;">
                    <h3 class="certificate-subheader" style="color: #283b8f;font-weight: 800;margin: 0;">OF COMPLETION</h3>
                </div>
                <div style="position: absolute;top: 109px;left: 795px;height: 100px;width: 100px;"><span ><img src="{{ $user->qrcode }}" style="width: 100%;"></span></div>
                <div class="" style="padding-top: 40px;">
                    <h3 style="font-size: 15px;font-style: italic;margin-bottom: 30px;color: #000;">This is to Certify that Mr./Ms./Mrs. <input readonly type="text" value="{{$user->name}}" style="border: none;border-bottom: 1px dotted;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"> Date of birth. <input readonly type="text" value="{{$user->date_of_birth}}" style="border: none;border-bottom: 1px dotted;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"></h3>
                    <h3 style="font-size: 15px;font-style: italic;margin-bottom: 30px;color: #000;">Son/Daughter of. <input readonly type="text" value="{{$user->parent_name}}" style="border: none;border-bottom: 1px dotted;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"> is a Bonafied student of. <input readonly type="text" value="IDCM Salt Lake" style="border: none;border-bottom: 1px dotted;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"></h3>
                    <h3 style="font-size: 15px;font-style: italic;margin-bottom: 30px;color: #000;text-align: center;">and has successfully completed the course. <input readonly type="text" value="{{$user->course}}" style="border: none;border-bottom: 1px dotted;width: 57%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"> </h3>
                    <h3 style="font-size: 15px;font-style: italic;color: #000;width: auto;margin: auto;display: inline-block;text-align: right;">Duration <input readonly type="text" value="{{$user->duration}}" style="border: none;border-bottom: 1px dotted;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"> Grade <input readonly type="text" value="{{$user->grade}}" style="border: none;border-bottom: 1px dotted;width: 25%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;"></h3>
                    <h2 style="display: inline;font-size: 20px;color: #000;font-style: italic;margin-left: 16px;"> We wish him/her all the success </h2>
                </div>
                <div style="display: flex;overflow: hidden;margin-top: 38px;width: 800px;color: #000;margin-left: 105px;">
                    <div style="width: 268px;text-align: left;font-weight: 800;"> 
                        Certificate No : {{$user->center_code}} <br>
                        Date of Issue : {{date("d M, Y")}}
                    </div>
                    <div style="width: 203px;text-align: left;font-weight: 500;overflow: hidden;border: 1px solid;padding: 13px;font-size: 12px;border-radius: 16px;"> 
                        <span>EXCELLENT<span> <span>A - 85+ to Above</span> <br>
                        <span>VERY GOOD<span> <span>B - 60+ to 85</span> <br>
                        <span>GOOD<span> <span>C - 50+ to 60</span> <br>
                    </div>
                    <div  style="width: 300px;text-align: center;font-weight: 800;"> 
                        <img src="{{ url('/assets/administrator/img/sign.png') }}" style="width: 80px;">
                    <br>
                        <span style="border-top: 2px solid;padding: 23px;padding-top: 5px;font-size: 20px;"> (Product Head) </span>
                    </div>
                </div>
                <div style="display: flex;overflow: hidden;margin: 20px 0;width: auto;color: #000;margin-left: 145px;">
                    <div> 
                        <img src="{{ url('/assets/administrator/img/certificate.png') }}" style="width: 80px;">
                    </div>
                    <div style="text-align: left;font-weight: 500;overflow: hidden;padding: 13px;font-size: 12px;padding-left: 0;"> 
                        <img src="{{ url('/assets/administrator/img/tools.png') }}" style="width: 100%;">
                    </div>
                    
                </div>
            </div>
            <img style="position: absolute;left: 0;bottom: 0;height: 172px;background-size: cover;width: 246px;overflow: hidden;" src="{{ url('/assets/administrator/img/left-corner.png') }}">
        </div>
	</div>
</div>              

@endsection
@section('script')
<script> 
    function printDiv() { 
        var divContents = document.getElementById("certificate").innerHTML; 
        var a = window.open('', '', 'height=500, width=500'); 
        a.document.write('<html>'); 
        a.document.write(divContents); 
        a.document.write('</body></html>'); 
        a.document.close(); 
        a.print(); 
    } 
</script> 
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection