
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
                            <h4 class="page-title">All Withdrawals</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="header-title"><b>Withdrawal of All Users</b></h4>

                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Amount </th>
                                    <th>Date </th>
                                    <th>Approved Date </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users_withdrawals as $withdraw)
                                    <tr>
                                        <td><strong>{{ optional($withdraw->users)->first_name }} {{ optional($withdraw->users)->last_name }}</strong></td>
                                        <td><strong>{{ $withdraw->amount }}</strong></td>
                                        <td><strong>{{ date('d/m/y', strtotime($withdraw->created_at)) }}</strong></td>
                                        @if($withdraw->status == 'pending')
                                            <td><strong>"dd/mm/yy"</strong></td>
                                        @else
                                            <td><strong>{{ date('d/m/y', strtotime($withdraw->updated_at)) }}</strong></td>
                                        @endif
                                        {{--                                            <td><strong>{{ date('d/m/y', strtotime($users_deposit->approved_date() )) }}</strong></td>--}}
                                        <td><strong>{!! $withdraw->status() !!}</strong></td>
                                        <td>
                                            <div class="btn-group">


                                                <a href="#" class="btn btn-secondary btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    @if($deposit->status == 'pending')
                                                        <a class="dropdown-item" href="{{ route('approve_deposit', $withdraw->id) }}">Approve</a>
                                                    @else
                                                    @endif
                                                    <form method="POST" action="{!! route('delete_deposit', $withdraw->id) !!}" accept-charset="UTF-8">
                                                        <input name="_method" value="DELETE" type="hidden">
                                                        {{ csrf_field() }}

                                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                                            <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                Delete
                                                            </button>

                                                        </div>

                                                    </form>
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
