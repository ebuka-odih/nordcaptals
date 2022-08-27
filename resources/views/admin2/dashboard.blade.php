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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Zircos</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard </a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card widget-box-one border border-primary bg-soft-primary">
                                <div class="card-body">
                                    <div class="float-right avatar-lg rounded-circle mt-3">
                                        <i class="mdi mdi-chart-areaspline font-30 widget-icon rounded-circle avatar-title text-primary"></i>
                                    </div>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="Statistics">Total Deposited</p>
                                        <h2><span data-plugin="">$@convert($total_deposit)</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card widget-box-one border border-warning bg-soft-warning">
                                <div class="card-body">
                                    <div class="float-right avatar-lg rounded-circle mt-3">
                                        <i class="mdi mdi-layers font-30 widget-icon rounded-circle avatar-title text-warning"></i>
                                    </div>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User This Month">Total Withdraw</p>
                                        <h2><span data-plugin="">$@convert($total_withdraw) </span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card widget-box-one border border-success bg-soft-success">
                                <div class="card-body">
                                    <div class="float-right avatar-lg rounded-circle mt-3">
                                        <i class="mdi mdi-account-convert font-30 widget-icon rounded-circle avatar-title text-success"></i>
                                    </div>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User Today">Total User</p>
                                        <h2><span data-plugin="counterup">{{ $users_count }}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card widget-box-one border border-danger bg-soft-danger">
                                <div class="card-body">
                                    <div class="float-right avatar-lg rounded-circle mt-3">
                                        <i class="mdi mdi-account-convert font-30 widget-icon rounded-circle avatar-title text-danger"></i>
                                    </div>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-weight-bold text-muted" title="User Today">Dummy Stuff</p>
                                        <h2><span data-plugin="counterup"></span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">

                                <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Joined date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td><strong>{{ $user->first_name }}</strong></td>
                                            <td><strong>{{ $user->last_name }}</strong></td>
                                            <td><strong>{{ $user->username }}</strong></td>
                                            <td><strong>{{ $user->email }}</strong></td>
                                            <td><strong>{{ date('d/m/Y h:i A', strtotime($user->created_at ))}}</strong></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('show-user', $user->id) }}" class="btn btn-secondary btn-sm">Open</a>
                                                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                        <a class="dropdown-item" href="{{ route('user_deposit', $user->id) }}">Deposits</a>
                                                        <a class="dropdown-item" href="{{ route('user_withdraw.show', $user->id) }}">Withdrawal</a>
                                                        <a class="dropdown-item" href="#"> <form method="POST" action="{!! route('delete_user', $user->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                    <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete User?&quot;)">
                                                                       Delete
                                                                    </button>

                                                                </div>

                                                            </form>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {!! $users->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- end row -->

                    <!-- end row -->

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


    <!-- Right Sidebar -->
@endsection
