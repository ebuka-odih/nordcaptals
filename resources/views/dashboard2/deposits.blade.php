@extends('dashboard2.layouts.app')
@section('content')
{{--    <style>--}}
{{--        .header {--}}
{{--            position: center;--}}
{{--        }--}}
{{--    </style>--}}
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="list-group">
                    <a href="{{ route('user.user_deposit_list') }}" class="list-group-item list-group-item-action active text text-center btn btn-primary" aria-current="true">
                        Deposit History
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="{{ route('user.user_withdraw_history') }}"  class="list-group-item list-group-item-action text text-center btn btn-default" aria-current="true">
                       Withdrawal History
                    </a>
                </div>
            </div>
        </div>
        <p></p>
        <div class="content-wrapper">
            <a href="{{ route('user.user_deposits') }}" class="btn btn-primary btn-lg mt-5 mb-4">Make Deposit</a>
            <h2 class="text text-center">Deposits Statistics</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a>Total Deposit</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $total ? : '0.00' }}</strong> USD</p>
                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value($total) }}</strong> BTC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a >Approved Deposits</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $approved_cash ? : '0.00' }}</strong> USD</p>
                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value($approved_cash) }}</strong> BTC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a href="#">Pending Deposits</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $pending_cash ? : '0.00' }}</strong> USD</p>
                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value($pending_cash) }}</strong> BTC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="card bg-dark" id="other">
                <div class="card-header header-elements-inline bg-transparent">
                    <h3 class="mb-0 text-white">Deposit logs</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush table-dark" id="datatable-basic">
                        <thead class="thead-dark">
                        <tr>
                            <th>Reference ID</th>
                            <th>Amount</th>
                            <th>BTC</th>
                            <th>Plan</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposit_history as $deposits)
                        <tr>
                            <td>{{ $deposits->trans }}</td>
                            <td>${{ $deposits->amount }}</td>
                            <td>{{ auth()->user()->btc_value($deposits->amount) }} BTC</td>
                            <td>{{ $deposits->investment_plan->name }}</td>
                            <td>
                                {!! $deposits->status() !!}
                            </td>
                            <td>{{ date('Y/m/d h:i A', strtotime($deposits->created_at)) }}</td>
                            <td>{{ date('Y/m/d h:i A', strtotime($deposits->updated_at)) }}</td>
                            <td><a href="{{ route('user.user_deposits.view', $deposits->id) }}" class="btn btn-sm btn-primary">View</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>

@endsection
