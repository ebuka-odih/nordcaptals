@extends('dashboard2.layouts.app')
@section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row mt-4">

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a>Balance</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong> {{ auth()->user()->acct_wallet }} BTC</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0"><strong> {{ auth()->user()->btc_value(auth()->user()->acct_wallet) }}</strong> BTC</p>--}}
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
                                        <a >Bonus Balance</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->bonus_wallet ? : '0.00' }}</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value(auth()->user()->bonus_wallet) }}</strong> BTC</p>--}}
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
                                        <a href="#" data-toggle="modal" data-target="#modal-form108">Profit Earned</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $total_earned ? : '0.00' }}</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value($total_earned) }}</strong> BTC</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <h2 class="text text-center">Statistics</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="mb-0 text-yellow">
                                        <a href="#" data-toggle="modal" data-target="#modal-form107">Total Deposits</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $total ? : '0.00' }}</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0">{{ auth()->user()->btc_value($total) }}</strong> BTC</p>--}}
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
                                        <a href="#" data-toggle="modal" data-target="#modal-form103">Total Withdrawal</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $total_withdraw ? : '0.00' }}</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0">{{ auth()->user()->btc_value($total_withdraw) }}</strong> BTC</p>--}}
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
                                        <a href="#" data-toggle="modal" data-target="#modal-form104">Last Withdrawal</a>
                                    </h4>
                                    <p class="text-sm text-white mb-0"><strong>{{ $last_withdraw ? : '0.00' }}</strong> USD</p>
{{--                                    <p class="text-sm text-white mb-0">{{ auth()->user()->btc_value($last_withdraw) }}</strong> BTC</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card bg-dark">
                        <div class="card-header bg-transparent header-elements-inline">
                            <h3 class="mb-0 text-white">Referral link</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-white">Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.</p>
                            <form action="javascript:void;" method="post">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="url" readonly="" class="form-control bg-dark text-yellow" value="{{ auth()->user()->referral_link }}">
                                        <input type="hidden" readonly="" class="form-control bg-dark text-yellow" value="{{ auth()->user()->referral_link }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
            <br><br>

            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>

@endsection
