@extends('administrator.layouts.admin')







@section('content')



<div class="col-12">



	@if($courses)



		<div class="card">



			<div class="card-body">



				<h5 class="card-title"> Datatable</h5>



				<div class="table-responsive">



					<table id="zero_config" class="table table-striped table-bordered">



						<thead>

							<tr>

								<th>Name</th>

								<th>Slug</th>

								<th>Options</th>

							</tr>

						</thead>



						<tbody>



							@foreach ($courses as $value)

							<tr>

								<td>{{ $value->name }}</td>													

								<td>{{ $value->slug }}</td>													

								<td>

									<a href="{{ route('admin-show-course',$value->id) }}" class="btn btn-success btn-lg">View</a>

									<a href="{{ route('admin-show-course',$value->id) }}" class="btn btn-primary btn-lg">Edit</a>

									<a href="{{ route('admin-delete-course',$value->id) }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>

								</td>

							</tr>

							@endforeach							

						</tbody>

					</table>

				</div>

			</div>



		</div>



	@endif



</div>                   



@endsection



@section('script')



<!-- ============================================================== -->



<!-- CHARTS -->



@endsection



