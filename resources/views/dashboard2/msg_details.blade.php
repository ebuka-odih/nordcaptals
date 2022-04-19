@extends('dashboard2.layouts.app')
@section('content')
    <style>
        .header {
            position: center;
        }
    </style>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="card text-center">
                <div class="card-header">
                    <h1>{{ $msg_details->title }}</h1>
                </div>
                <div class="card-footer text-primary">
                    {{ Carbon\Carbon::parse($msg_details->created_at)->diffForHumans()}}
                </div>

                <div class="card-body">
                    <div class="col-md-8 col-lg-8 offset-lg-2">
                        <p style="font-size: 20px">{{ $msg_details->message }}</p>
                        <br>
                        <img height="250" height="250" src="{{ asset('message/images/'.$msg_details->image) }}" alt="Message Image" class="col-md-6 col-lg-8 img-responsive">                                                </div>

                </div>


                </div>

            </div>

        </div>
    </div>

@endsection
