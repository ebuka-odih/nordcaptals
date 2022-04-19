@extends('admin2.layout.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title-box">--}}
{{--                            <h4 class="page-title">{{ $user_details->name }} Deposits</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-3 col-md-4">
                                    <div class="text-center card-box shadow-none border border-secoundary">
                                        <div class="member-card">
                                            <a href="{{ route('show-user', $user_details->id) }}">
                                                <div class="avatar-xl member-thumb mb-3 mx-auto d-block">
                                                    <img src="{{ $user_details->profile_image }}" class="rounded-circle img-thumbnail" alt="profile-image">
                                                    {{--                                                <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>--}}
                                                    {!! $user_details->admin_status() !!}
                                                </div>
                                            </a>



                                            <div class="">
                                                <h5 class="font-18 mb-1">{{ $user_details->last_name." ".$user_details->first_name }}</h5>
                                                <p class="text-muted mb-2">{{ $user_details->email }}</p>
                                                <h5 class="font-18 mb-1">Account Bal: $@convert($user_details->acct_wallet)</h5>
                                                <h5 class="font-18 mb-1">Bonus Bal: $@convert($user_details->bonus_wallet)</h5>
                                            </div>
                                            <div class="container">
                                                @if(session()->has('verified'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('verified') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <a href="{{ route('user_message', $user_details->id) }}" class="btn btn-success btn-sm width-sm waves-effect mt-2 waves-light">Message</a>
                                            <a href="{{ route('user_deposit', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Deposits</a>
                                            <a href="{{ route('user_withdraw.show', $user_details->id) }}" class="btn btn-primary btn-sm width-sm waves-effect mt-2 waves-light">Withdrawal</a>

                                            @if( $user_details->status < 2)
                                                <a href="{{ route('verify_user', $user_details->id) }}" title="Verify this user" class="btn btn-secondary btn-sm width-sm waves-effect mt-2 waves-light">Verify User</a>
                                            @else
                                            @endif


                                            <hr/>

                                            <div class="text-left">
{{--                                                <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ml-4">{{ $user_details->name }}</span></p>--}}

{{--                                                <p class="text-muted font-13"><strong>Username :</strong><span class="ml-4">{{ $user_details->username }}</span></p>--}}

{{--                                                <p class="text-muted font-13"><strong>Email :</strong> <span class="ml-4">{{ $user_details->email }}</span></p>--}}

                                                <p class="text-muted font-13"><strong>Joined At :</strong> <span class="ml-4">{{ date('d/m/Y', strtotime($user_details->created_at)) }}</span></p>
                                            </div>


                                        </div>

                                    </div>
                                    <!-- end card-box -->

                                </div>
                                <!-- end col -->

                                <div class="col-xl-9 col-md-8">
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <tr>
                                            <th>First Name:</th>
                                            <td>{{ $user_details->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last Name:</th>
                                            <td>{{ $user_details->last_name }}</td>
                                        </tr
                                        ><tr>
                                            <th>Username:</th>
                                            <td>{{ $user_details->username }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td>{{ $user_details->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone:</th>
                                            <td>{{ $user_details->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Country:</th>
                                            <td>{{ $user_details->country }}</td>
                                        </tr>
                                        <tr>
                                            <th>State:</th>
                                            <td>{{ $user_details->state }}</td>
                                        </tr>
                                        <tr>
                                            <th>City:</th>
                                            <td>{{ $user_details->city }}</td>
                                        </tr>
                                        <tr>
                                            <th>City:</th>
                                            <td>{{ $user_details->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bitcoin Address:</th>
                                            <td class="col-md-3">{{ $user_details->btc_wallet }}</td>
                                        </tr>
                                        <tr>
                                            <th>ID Type:</th>
                                            <td>{{ $user_details->id_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>ID Card:</th>
{{--                                            <td><img class="col-md-3" src="{{ $user_details->id_image  }}" height="250" width="250"></td>--}}
                                           <td> <img src="{{ asset("id_image/images/".$user_details->id_image) }}" height="300" width="300"></td>
                                        </tr>
                                    </table>
                                    <form action="{{ route('fund_account', $user_details->id) }}" method="POST" class="mt-5">
                                        @csrf
                                        @if(session()->has('fund_success'))
                                            <p class="alert alert-success">{{ session('fund_success') }}</p>
                                        @endif
                                        <div class="form-group">
                                            <label>Fund Bonus Account</label>
                                            <input type="number" name="amount" class="form-control col-md-6" placeholder="Enter Account">
                                            <button type="submit" class="btn btn-primary mt-2">Send</button>
                                        </div>
                                    </form>
                                    <form action="{{ route('bonus', $user_details->id ) }}" method="POST" >
                                        @csrf
                                        @if(session()->has('bonus_message'))
                                            <p class="alert alert-success">{{ session('bonus_message') }}</p>
                                        @endif
                                        <div class="form-group">
                                            <label>Fund Main Account</label>
                                            <input type="number" name="bonus" class="form-control col-md-6" placeholder="Enter Account">
                                            <button type="submit" class="btn btn-primary mt-2">Send</button>
                                        </div>
                                    </form>


                                </div>
                                <!-- end col -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->

            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2018 - 2020 &copy; Zircos theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
