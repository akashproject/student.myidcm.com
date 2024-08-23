@extends('administrator.layouts.admin')
    @section('content')
    <div class="row">
        <!-- Basic with Icons -->
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
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New User</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin-import-student') }}" enctype="multipart/form-data" >
                        @csrf
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input
                                    type="file"
                                    name="bulkupload"
                                    id="basic-icon-default-email"
                                    class="form-control"
                                    aria-describedby="basic-icon-default-email2"
                                    />
                                </div>
                                <div class="form-text">only upload csv file. <a href="{{ url('/public/Idcm-student.csv'); }} " download>download</a> sample file.</div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"> Bulk Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('script')
@endsection