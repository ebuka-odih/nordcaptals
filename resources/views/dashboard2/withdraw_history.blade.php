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
                    <a href="{{ route('user.user_deposit_list') }}" class="list-group-item list-group-item-action  text text-center btn btn-primary" aria-current="true">
                        Deposit History
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="{{ route('user.user_withdraw_history') }}"  class="list-group-item list-group-item-action active text text-center btn btn-primary" aria-current="true">
                        Withdrawal History
                    </a>
                </div>
            </div>
        </div>
        <p></p>
        <div class="content-wrapper">
            <a href="{{ route('user.user_withdrawal') }}" class="btn btn-primary btn-lg mt-5 mb-4">Make Withdrawal</a>
            <h2 class="text text-center">Withdrawal Statistics</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a>Total Withdrawal</a>
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
                                        <a >Approved Withdrawal</a>
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
                                        <a href="#">Pending Withdrawal</a>
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
                    <h3 class="mb-0 text-white">Withdrawal logs</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush table-dark" id="datatable-basic">
                        <thead class="thead-dark">
                        <tr>
                            <th>Reference ID</th>
                            <th>Amount</th>
                            <th>BTC</th>
                            <th>Status</th>
                            <th>Account</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawal as $withdraw)
                            <tr>
                                <td>{{ $withdraw->trans }}</td>
                                <td>${{ $withdraw->amount }}</td>
                                <td>{{ auth()->user()->btc_value($withdraw->amount) }} BTC</td>
                                <td>
                                    {!! $withdraw->status() !!}
                                </td>
                                <td>{!! $withdraw->wallet_type() !!}</td>
                                <td>{{ date('Y/m/d h:i A', strtotime($withdraw->created_at)) }}</td>
                                <td>{{ date('Y/m/d h:i A', strtotime($withdraw->updated_at)) }}</td>
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
