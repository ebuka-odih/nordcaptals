
@extends('admin2.layout.app')
@section('content')
    <!-- Table datatable css -->




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
                            <h4 class="page-title">All Users</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                                    <a class="dropdown-item" href="#">Deposits</a>
                                                    <a class="dropdown-item" href="#">Withdrawal</a>
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




    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        } );

    </script>
@endsection
