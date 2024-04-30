@extends('administrator.layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Accessibility') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('save-accessibility') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Role Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="team_id" class="col-md-4 col-form-label text-md-end">{{ __('Team') }}</label>
                            <div class="col-md-6">
                                <select id="team_id" class="form-control @error('team_id') is-invalid @enderror" name="team_id" value="{{ old('team_id') }}" required autocomplete="team_id">
                                    <option value="2" > Admin </option>
                                    <option value="3" > Center </option>
                                    <option value="4" > Teacher </option>
                                    <option value="5" > Placement </option>
                                    <option value="6" > Student </option>
                                </select>
                                @error('team_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="permissions" class="col-md-12 col-form-label text-md-start">{{ __('Permission') }}</label>
                            <div class="col-md-3">
                                <input id="permissions" type="checkbox" class="@error('permissions') is-invalid @enderror" name="permissions[]" value="create" autocomplete="permissions" autofocus> Create
                            </div>
                            <div class="col-md-3">
                                <input id="permissions" type="checkbox" class="@error('permissions') is-invalid @enderror" name="permissions[]" value="read" autocomplete="permissions" autofocus> Read
                            </div>
                            <div class="col-md-3">
                                <input id="permissions" type="checkbox" class="@error('permissions') is-invalid @enderror" name="permissions[]" value="update" autocomplete="permissions" autofocus> Update
                            </div>
                            <div class="col-md-3">
                                <input id="permissions" type="checkbox" class="@error('permissions') is-invalid @enderror" name="permissions[]" value="delete" autocomplete="permissions" autofocus> Delete
                            </div>
                        </div>
                        @error('permissions')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Accessibility') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection