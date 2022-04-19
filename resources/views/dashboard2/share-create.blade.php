@extends('dashboard2.layouts.app')
@section('content')

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h3 class="text-yellow">Share Fund.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <h3 class="text text-center mb-3">Enter the username of the person you want to share bitcoin with</h3>
                <div class="card bg-white border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form action="{{ route('user.share.store') }}" method="post" id="modal-details">
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

                            @if(session()->has('message'))
                                <div class="alert alert-danger">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="alert alert-danger">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('declined'))
                                <div class="alert alert-danger">
                                    {{ session()->get('declined') }}
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Amount</label>
                                <div class="col-lg-10">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">USD</span>
                                        </div>
                                        <input type="number" step="any" name="amount" maxlength="10" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" name="username" class="form-control" required="">
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Send</button>
{{--                                <a href="#" data-toggle="modal" data-target="#modal-form" class="btn btn-primary">Send<i class="icon-paperplane ml-2"></i></a>--}}
                            </div>
                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="card border-0 mb-0">
                                                <div class="card-body px-lg-5 py-lg-5">
                                                    <div class="text-dark text-center mt-2 mb-3">Enter account pin to complete request</div>
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text text-dark"><i class="ni ni-lock-circle-open"></i></span>
                                                            </div>
                                                            <input class="form-control" placeholder="Pin" type="pin" name="pin">
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-primary" form="modal-details">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <!-- footer begin -->

        </div>
    </div>
    <!-- Start of boomchart Zendesk Widget script -->

@endsection
