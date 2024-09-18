@extends('administrator.layouts.admin')
@section('content')
<div class="mb-3">
    <a href="javascript:void()" class="btn btn-secondary add-new btn-primary" onclick="printDiv()">
        <span>
            <i class="bx bx-plus me-0 me-sm-1"></i>
            <span class="d-none d-sm-inline-block">Print</span>
        </span>
    </a>
</div>
<style>
page[size="A4"][layout="portrait"] {
  /* width: 29.7cm; */
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
<div id="certificate" >
<page size="A4" layout="portrait" class="page" style="position:relative" >
    <div style="position: absolute;top: 165px;left: 845px;height: 100px;width: 100px;"><span ><img src="{{ $student['qrcode'] }}" style="width: 100%;"></span></div>
    <div style="position: absolute;top: 365px;left: 375px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['name'] }}</span></div>
    <div style="position: absolute;top: 365px;left: 940px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['date_of_birth'] }}</span></div>
    <div style="position: absolute;top: 413px;left: 281px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['parent_name'] }}</span></div>
    <div style="position: absolute;top: 413px;left: 841px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['center'] }}</span></div>
    <div style="position: absolute;top: 459px;left: 575px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['course'] }}</span></div>
    <div style="position: absolute;top: 510px;left: 281px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['duration'] }}</span></div>
    <div style="position: absolute;top: 510px;left: 540px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ $student['grade'] }}</span></div>
    <div style="position: absolute;top: 590px;left: 281px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >IDCM/ID01/00001</span></div>
    <div style="position: absolute;top: 622px;left: 281px;" ><span style="border: none;width: 30%;text-align: center;color: #000;font-size: 16px;font-weight: 500;font-style: italic;" >{{ date("d M, Y") }}</span></div>
</page>
</div>
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