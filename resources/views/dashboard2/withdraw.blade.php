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
            <h2 class="text text-center mb-4 mt-2">Withdrawal</h2>
            <div class="row">

                <div class="col-md-6">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="mb-2 text-yellow">
                                        <a >Total Balance</a>
                                    </h2>
                                    <h1  class=" text-white mb-1"><strong>{{ auth()->user()->acct_wallet ? : '0.00' }}</strong> USD</h1>
                                    <h1 class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value(auth()->user()->acct_wallet) }}</strong> BTC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card bg-dark">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="mb-2 text-yellow">
                                        <a href="#">Bonus Balance</a>
                                    </h2>
                                    <h1  class=" text-white mb-1"><strong>{{ auth()->user()->bonus_wallet ? : '0.00' }}</strong> USD</h1>
                                    <h1 class="text-sm text-white mb-0"><strong>{{ auth()->user()->btc_value(auth()->user()->bonus_wallet) }}</strong> BTC</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-10">
                        @if( auth()->user()->acct_wallet > 0)
                           <div class="container">
                               @if(session()->has('declined_message'))
                                   <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                       {{ session()->get('declined_message') }}
                                   </div>
                               @endif
                               @if(session()->has('declined'))
                                   <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                       {{ session()->get('declined') }}
                                   </div>
                               @endif
                                   @if(session()->has('reject'))
                                   <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                       {{ session()->get('reject') }}
                                   </div>
                               @endif
                               @if(session()->has('success_message'))
                                   <div class="alert alert-success col-md-7 offset-lg-2 mb-3">
                                       {{ session()->get('success_message') }}
                                   </div>
                               @endif
                           </div>
                            <form action="{{ route('user.user_withdraw.store') }}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="inputState">Choose Account</label>
                                <select  name="wallet_type" id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="acct_wallet">Account Balance</option>
                                    <option value="bonus_wallet">Bonus Balance</option>
                                </select>
                                <small id="emailHelp" class="form-text text-primary">Choose Which Account To Withdraw From.</small>
                            </div>
{{--                                <input type="hidden" name="user_wallet" value="{{ auth()->id() }}">--}}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Amount</label>
                                <input type="number" class="form-control" name="amount" id="exampleInputPassword1">
                            </div>
                            <h3 style="margin-bottom: 15px" class="text text-danger">NOTE: When a withdrawal request is made, It will take 1hr for our team to confirm, after confirmation your withdrawal request will either be approved or declined depending on the nature of the transaction.</h3>
                            <h3 style="margin-bottom: 15px" class="mb-4">If your withdrawal request is approved, the specified withdrawal amount will be sent to your btc wallet id below.</h3>
                            <h3 class="mb-1">Wallet: {{ auth()->user()->btc_wallet }}</h3>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                            @else
                            <form>
                                <div class="form-group">
                                    <label for="inputState">Choose Account</label>
                                    <select readonly id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="acct_wallet">Account Balance</option>
                                        <option value="bonus_wallet">Bonus Balance</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-primary">Choose Which Account To Withdraw From.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Amount</label>
                                    <input readonly type="number" class="form-control" name="amount" id="exampleInputPassword1">
                                </div>
                                <h3 style="margin-bottom: 15px" class="text text-danger">You do not have enough money to withdraw</h3>
                            </form>
                            @endif
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
