@extends('administrator.layouts.admin')
    @section('content')
    <!-- Basic Layout & Basic with Icons -->
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
                    <form method="post" action="{{ route('admin-insert-user') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                                ></span>
                                <input
                                type="text"
                                name="name"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                                />
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input
                                type="text"
                                name="email"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="john.doe@example.com"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                                />
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                                ></span>
                                <input
                                type="text"
                                name="mobile"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                                />
                            </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="date_of_birth">Date of Birth</label>
                            <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                <input
                                type="date"
                                name="dob"
                                id="date_of_birth"
                                class="form-control"
                                aria-describedby="date_of_birth"
                                />
                            </div>
                            </div>
                        </div>
                    
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Parent's Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-user"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="parent_name"
                                    class="form-control"
                                    id="basic-icon-default-fullname"
                                    placeholder="Enter Parent's Name"
                                    aria-label="Enter Parent's Name"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="center_name">Center Name</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="center_name2" class="input-group-text"
                                    ><i class="bx bx-home"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="center"
                                    class="form-control"
                                    id="center_name"
                                    placeholder="Enter Center Name"
                                    aria-label="Enter Center Name"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="center_name">Center Code</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="center_name2" class="input-group-text"
                                    ><i class="bx bx-home"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="center_code"
                                    class="form-control"
                                    id="center_code"
                                    placeholder="Enter Center Code"
                                    aria-label="Enter Center Code"
                                    aria-describedby="basic-icon-default-centercode"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="course">Course</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="course2" class="input-group-text"
                                    ><i class="bx bx-book"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="course"
                                    class="form-control"
                                    id="course"
                                    placeholder="Enter Course"
                                    aria-label="Enter Course"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="duration">Duration</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="duration2" class="input-group-text"
                                    ><i class="bx bx-time"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="duration"
                                    class="form-control"
                                    id="duration"
                                    placeholder="Enter Duration"
                                    aria-label="Enter Duration"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="grade">Grade</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="grade2" class="input-group-text"
                                    ><i class="bx bx-certificate"></i
                                    ></span>
                                    <input
                                    type="text"
                                    name="grade"
                                    class="form-control"
                                    id="grade"
                                    placeholder="Enter Grade"
                                    aria-label="Enter Grade"
                                    aria-describedby="basic-icon-default-fullname2"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Insert New User</button>
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