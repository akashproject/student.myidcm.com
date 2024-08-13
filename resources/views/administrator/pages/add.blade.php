@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('administrator/save-page') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Page </h4>
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
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif

				<div class="row">
					<div class="col-md-7" >
						<div class="mb-3 row">
							<label for="name" class="col-md-3 col-form-label">Name</label>
							<div class="col-md-9">
								<input name="name" class="form-control" type="text" value="" id="name" placeholder="Enter Page Name Here" >
							</div>
						</div>
						<div class="mb-3 row">
							<label for="name" class="col-md-3 col-form-label">Slug</label>
							<div class="col-md-9">
								<input name="slug" class="form-control" type="text" value="" id="name" placeholder="Enter Page Slug Here" >
							</div>
						</div>
						<div class="mb-3 row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="description" placeholder="Enter description Here" ></textarea>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="excerpt" class="col-sm-3 text-right control-label col-form-label">Excerpt</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="excerpt" id="excerpt" placeholder="Enter excerpt Here" ></textarea>
							</div>
						</div>
					</div>

					<div class="col-md-5">	
						<div class="mb-3 row">
							<label for="template" class="col-md-3 col-form-label">Template</label>
							<div class="col-md-9">
								<input name="template" class="form-control" type="text" id="template" placeholder="Enter Template Here" value="default-template" >
							</div>
						</div>
						
						<div class="mb-2 row">
							<label for="state" class="col-sm-3 text-left control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" selected> Publish</option>
									<option value="0" > Private </option>
								<select>
							</div>
						</div>

						<div class="mb-2 row">
							<label for="tags" class="col-sm-3 text-left control-label col-form-label">Banner</label>
							<div class="col-sm-9">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="https://dummyimage.com/550x550?text=Add%20Image" alt="" style="width:100%">
									<input type="hidden" name="banner_image" id="banner_image" value="" >	
								</a>
							</div>
						</div>
					</div>



				</div>

				<h4 class="card-title"> Search Engine Options </h4>

				<div class="row">
					<div class="col-md-7" >
						<div class="mb-2 row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Meta Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Enter Meta Title Here" >
							</div>
						</div>

						<div class="mb-2 row">

							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>

							<div class="col-sm-9">

								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" ></textarea>

							</div>

						</div>

						<div class="mb-2 row">

							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>

							<div class="col-sm-9">

								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" ></textarea>

							</div>

						</div>

						<div class="mb-2 row">

							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>

							<div class="col-sm-9">

								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" >

							</div>

						</div>



						<div class="mb-2 row">

							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>

							<div class="col-sm-9">

								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here" >

							</div>

						</div>

						<div class="mb-2 row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Page Pincode Here" value="index, follow" >
							</div>
						</div>
					</div>

					<div class="col-md-5" >

						

					</div>

				</div>

			</div>



			<div class="border-top">



				<div class="card-body">



					<button type="submit" class="btn btn-primary">Submit</button>

					<input type="hidden" name="page_id" id="page_id" value="" >

				</div>



			</div>



		</form>



	</div>

</div>              



@endsection



@section('script')



<!-- ============================================================== -->



<!-- CHARTS -->



@endsection



