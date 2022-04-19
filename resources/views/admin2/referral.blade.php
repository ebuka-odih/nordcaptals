
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
                            <h4 class="page-title">All Referrals</h4>
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
                                    <th>Referred</th>
                                    <th>Referred By</th>
                                    <th>Date</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($refs as $ref)
                                <tr>
{{--                                    <td>{{ optional($ref->referredBy)->id }}</td>--}}
                                    <td><strong>{{ $ref->last_name." ".$ref->first_name }} | {{ $ref->email }} | {{ $ref->username }}</strong></td>
                                    <td><strong>{{ optional($ref->referredBy)->last_name. " ".optional($ref->referredBy)->first_name }} | {{ optional($ref->referredBy)->email  }} | {{ optional($ref->referredBy)->username }}</strong></td>
                                    <td><strong>{{ date('m/d/Y h:i A', strtotime($ref->created_at)) }}</strong></td>
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
