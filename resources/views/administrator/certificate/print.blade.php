@extends('administrator.layouts.admin')
@section('content')
<style>
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    page-break-after: always;
}
</style>
<div class="mb-3">
    <a href="javascript:void()" class="btn btn-secondary add-new btn-primary" onclick="printDiv()">
        <span>
            <i class="bx bx-printer me-0 me-sm-1"></i>
            <span class="d-none d-sm-inline-block">Print</span>
        </span>
    </a>
    <a href="{{ route('certificate',$user->id) }}" target="_blank" class="btn btn-secondary add-new btn-primary">
        <span>
            <i class="bx bx-download me-0 me-sm-1"></i>
            <span class="d-none d-sm-inline-block">Soft Copy</span>
        </span>
    </a>
</div>

<page size="A4" layout="portrait" class="page" style="position:relative" id="certificate">
    <div style="position: absolute;top: 140px;left: 710px;height: 100px;width: 100px;"><span ><img src="{{ $user->qrcode }}" style="width: 100%;"></span></div>
    <div style="position: absolute;top: 335px;left: 290px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->name }}</span></div>
    <div style="position: absolute;top: 335px;left: 840px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->date_of_birth }}</span></div>
    <div style="position: absolute;top: 383px;left: 196px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->parent_name }}</span></div>
    <div style="position: absolute;top: 383px;left: 756px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->center }}</span></div>
    <div style="position: absolute;top: 424px;left: 490px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->course }}</span></div>
    <div style="position: absolute;top: 475px;left: 196px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->duration }}</span></div>
    <div style="position: absolute;top: 475px;left: 440px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->grade }}</span></div>
    <div style="position: absolute;top: 555px;left: 196px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $user->center_code }}</span></div>
    <div style="position: absolute;top: 587px;left: 196px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ date("d M, Y") }}</span></div>
</page>
@endsection
@section('script')
<script>
    // Get the div element by its ID
    const myDiv = document.getElementById('certificate');
</script>
<!-- ============================================================== -->
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
<!-- CHARTS -->
@endsection