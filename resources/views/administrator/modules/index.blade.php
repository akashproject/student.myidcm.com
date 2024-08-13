@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($modules)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($modules) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
					<div class="position-relative">
						<a href="{{ route('admin-add-module',$course_id) }}" class="btn btn-secondary add-new btn-primary" tabindex="0">
							<span>
								<i class="bx bx-plus me-0 me-sm-1"></i>
								<span class="d-none d-sm-inline-block">Add New Module</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($modules as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>
									<div class="d-inline-block text-nowrap">
										@can('update')
										<a href="{{ route('admin-view-module',$value->id) }}" class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></a>
										@endcan
										@can('delete')
										<a href="{{ route('admin-delete-module',$value->id) }}" onclick="return confirm('Are you sure?')"; class="btn btn-sm btn-icon delete-record">
											<i class="bx bx-trash"></i>
										</a>
										@endcan
										<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
											<i class="bx bx-dots-vertical-rounded me-2"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-end m-0">
											<a class="dropdown-item" href="" ><i class="bx bx-check-circle me-1"></i> Topics </a>
										</div>
									</div>
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
@endsection



