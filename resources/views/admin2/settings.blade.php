
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
                            <h4 class="page-title">All Deposits</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text text-center text-danger">You can make changes here that will reflect on the user dashboard</h3>
                        <h4 class="text text-center text-danger">You can change your bitcoin, ethereum, litcoin and bitcoin cash wallet here</h4>
                        <div class="card-box table-responsive">
                            <h4 class="header-title"><b>Deposit of All Users</b></h4>

                            <table id="" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th class="wd-30p"> Name</th>
                                    <th class="wd-60p">Action</th>
                                    <th class="wd-60p">Value</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-capitalize">Bitcoin Wallet</td>
                                    <td>
                                        <form action="{{ route('setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="wallet_id" value="{{ setting('wallet_id') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
{{--                                        <form action="" method="POST">--}}
{{--                                            @csrf--}}
{{--                                            <input type="file" class="form-control">--}}
{{--                                        </form>--}}
                                    </td>
                                    <td>{{ setting('wallet_id') }}</td>
                                </tr>
                                <tr>
                                    <td class="text-capitalize">Ethereum Wallet</td>
                                    <td>
                                        <form action="{{ route('setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="eth_wallet" value="{{ setting('eth_wallet') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </td>
                                    <td>{{ setting('eth_wallet') }}</td>
                                </tr>
                                <tr>
                                    <td class="text-capitalize">Litcoin Wallet</td>
                                    <td>
                                        <form action="{{ route('setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="litcoin_wallet" value="{{ setting('litcoin_wallet') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </td>
                                    <td>{{ setting('litcoin_wallet') }}</td>
                                </tr>

                                <tr>
                                    <td class="text-capitalize">Bitcoin Cash Wallet</td>
                                    <td>
                                        <form action="{{ route('setting.store') }}" method="POST">
                                            @csrf
                                            <input class="form-control" name="btch_wallet" value="{{ setting('btch_wallet') }}" /><br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </td>
                                    <td>{{ setting('btch_wallet') }}</td>
                                </tr>
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
