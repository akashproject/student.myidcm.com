@extends('administrator.layouts.admin')
@section('content')
	<div class="row mb-2" >
	@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
    @endif
	</div>

	@if($slots)
	<form method="post" action="{{ route('assign-slot-to-teacher') }}" enctype="multipart/form-data" >
		@csrf
		<div class="card mb-4">
			<h5 class="card-header"> Select Required Slots </h5>
			<div class="card-body">
				<div class="row gx-3 gy-2 align-items-center">
					<div class="col-md-3">
						<label class="form-label" for="min">Minimum Slot</label>
						<input type="text" id="min" name="min" class="form-control" value="{{ isset($teacherSlot->min)?$teacherSlot->min:''}}" placeholder="Select Minimum Slot" >
					</div>
					<div class="col-md-3">
						<label class="form-label" for="max">Maximum Slot</label>
						<input type="text" id="max" name="max" class="form-control" value="{{ isset($teacherSlot->max)?$teacherSlot->max:''}}" placeholder="Select Minimum Slot" >
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
			@foreach($slots as $value)
			<div class="col-md-3">
				<input type="checkbox" id="slots_{{$value->id}}" name="slots[]" value="{{ $value->id }}" style="visibility: hidden;" {{ in_array($value->id, json_decode(isset($teacherSlot->slots)?$teacherSlot->slots:'[]'))?'checked':'' }}>	
				<label for="slots_{{$value->id}}" class="card shadow-none bg-white mb-2 @if(in_array($value->id, json_decode(isset($teacherSlot->slots)?$teacherSlot->slots:'[]')) && isset($teacherSlot->status) && $teacherSlot->status == '1') active @endif" >
					<div class="card-body">
						<div class="row" >
							<h5 class="card-title  mb-0">{{ $value->day }}  </h5>
							<p class="card-text">{{ $value->start_time }} - {{ $value->end_time }}</p>
						</div>
					</div>
				</label>
			</div>
			@endforeach
		</div>
		<button type="submit" class="btn btn-primary">Save Changes</button>
		<input type="hidden" name="teacher_slot_id" id="teacher_slot_id" value="{{ isset($teacherSlot->id)?$teacherSlot->id:''}}" >
		<input type="hidden" name="teacher_id" id="teacher_id" value="{{ $teacher_id }}" >
	</form>
	@endif
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection