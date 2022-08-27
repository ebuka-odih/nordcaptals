@extends('dashboard2.layouts.app')

@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-8 col-lg-8 offset-lg-2">
                    <div class="card bg-dark">
                        <div class="card-header header-elements-inline">
                            <h3 class="mb-0 text-white">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.password_update') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session()->has('success_password'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_password') }}
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 text-white">Old</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="current-password" class="form-control bg-dark text-white" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 text-white">New</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="new-password" class="form-control bg-dark text-white" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 text-white">Confirm</label>
                                    <div class="col-lg-9">
                                        <input type="password" name="new-password_confirmation" class="form-control bg-dark text-white" required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-neutral">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
