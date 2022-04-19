@extends('dashboard2.layouts.app')
@section('content')
{{--    <style>--}}
{{--        input[type=radio] {--}}
{{--            padding-top: 30px;--}}
{{--            display: block;--}}
{{--            position: relative;--}}
{{--            opacity: 1.0;--}}
{{--        }--}}
{{--    </style>--}}
    <!-- Page content -->
<style>
    .table td{
        font-size: 18px;
    }

</style>
    <div class="container-fluid mt--6">
        <h2 class="mb-4 text text-center text-uppercase mt-5">Transaction Details</h2>
        <div class="content-wrapper">
            @if( $deposit_detail->status == 'approved')
            <table class="table">
                <tr>
                    <th>PLAN:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                </tr>
                <tr>
                    <th>INVESTED AMOUNT:</th>
                    <td colspan="2">${{ $deposit_detail->amount }}</td>
                </tr>
                <tr>
                    <th>ROI:</th>
                    <td colspan="2">$@convert($profit)</td>
                </tr>
                <tr>
                    <th>TOTAL RETURN (WITH CAPITAL):</th>
                    <td colspan="2">$@convert($profit + $deposit_detail->amount)</td>
                </tr>
                <tr>
                    <th>START DATE:</th>
                    <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->approved_date)) }}</td>
                </tr>
                <tr>
                    <th>ENDING DATE:</th>
                    <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->end_date)) }}</td>
                </tr>
                <tr>
                    <th>INTERVAL:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                </tr>
                <tr>
                    <th>DAILY PROFIT:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                </tr>
                <tr>
                    <th>TOTAL PROFIT (%):</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                </tr>
                <tr>
                    <th>STATUS:</th>
                    <td colspan="2">{!! $deposit_detail->status() !!}</td>
                </tr>

                <tr>
                    <td colspan=3>&nbsp;</td>
                </tr>
                @if($deposit_detail->completed == true)
                <tr>

                    <th>PLAN STATUS:</th>
                    <td><span class='badge badge-success text text-uppercase'>Ended</span></td>
                </tr>
                @else
                    <tr>

                        <th>PLAN STATUS:</th>

                        <td><span class='badge badge-success text text-uppercase'>In progress</span></td>
                    </tr>
                @endif
                <tr>
                    <th>PROFIT EARNED:</th>
                    <td colspan="2">$ {{ $deposit_detail->earning }} (without capital)</td>
                </tr>
                <tr>
                    <th>TOTAL EARNED:</th>
                    <td colspan="2">$ {{  $deposit_detail->total_earned }} (plus capital)</td>
                </tr>
            </table>
            @elseif( $deposit_detail->status == 'pending')
            <table  class="table">
                <tr>
                    <th>CHOSEN PLAN:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                </tr>
                <tr>
                    <th>INVESTMENT AMOUNT:</th>
                    <td colspan="2">${{ $deposit_detail->amount }}</td>
                </tr>
                <tr>
                    <th>EXPECTED PROFIT:</th>
                    <td colspan="2">${{ $profit }}</td>
                </tr>
                <tr>
                    <th>INVESTMENT INTERVAL:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                </tr>
                <tr>
                    <th>INVESTMENT DAILY PROFIT:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                </tr>
                <tr>
                    <th>INVESTMENT TOTAL PROFIT:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return() }}(%)</td>
                </tr>
                <tr>
                    <th>TRANSACTION STATUS:</th>

                        <td colspan="2">{!! $deposit_detail->status() !!}</td>
                </tr>
            </table>
            <hr>
            <br>
                <h2 class="text text-center mb-5">Note: if you have made your deposit and your transaction is still pending is likely that it is still under review</h2>
                <h2 class="text text-center text-danger mb-5">Please Make Payment To One of the Addresses of Choice Below</h2>

                <div class="row mt-5 ml-5">
                    <div class="col-md-10">
                        @if ($errors->any())
                            <div style="margin-bottom: 5px" class="container">
                                <div class="alert-message">
                                    <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: lightcoral">{{ $error }}</li>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <h3>PAYMENT PROOF</h3>
                        @if(Session::has('success_message'))
                            <div class="alert alert-success" role="alert">Proof of Payment awaiting confirmation, If you made a mistake refresh the page then submit again</div>
                            <h4>PAYMENT PROOF IMAGE</h4>
                            <img id="myImg" height="300" width="300" src="/storage/payment-proof/{{ $deposit_detail->payment_proof }}" alt="Payment Proof">
                        @else
                            <h3>UPLOAD PAYMENT PROOF</h3>
                            <form method="POST" action="{{ route('user.user_deposits.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input required name="payment_proof_id" value="{{ $deposit_detail->id }}" style="width: 380px; max-width: 100%;" type="hidden">
                                <input required name="payment_proof" class="form-control form-control-lg col-md-10 " accept=".jpg, .png, .jpeg" type="file">
                                @error('payment_proof')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                                {{--                         <input style="width: 200px; margin-top: 18px" type="submit" value="Upload Transaction Proof">--}}
                                <button type="submit" class="btn btn-primary mt-3">Upload Proof</button>
                            </form>
                        @endif
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <h3 class="col-md-12">SEND ${{ $deposit_detail->amount }}( {{ auth()->user()->btc_value($deposit_detail->amount) }} BTC) TO BITCOIN WALLET BELOW:</h3>
                        <form action="">
                            <div class="form-group">
{{--                                <input class="form-control col-md-12 col-lg-6" id="btc" value="3BknrQv7HQQqqjeP6LiBuYFRWxyLrfJrDm">--}}
                                <input class="form-control col-md-12 col-lg-6" id="btc" value="{{ setting('wallet_id') }}">
                                <button class="btn" data-clipboard-target="#btc">
{{--                                    <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">--}}
                                    <p>Copy To Clipboard</p>
                                </button>
                                <h4>OR SCAN BARCODE</h4>
                                <img height="250" width="250" src="{{ asset('images/btc2.png') }}" alt="Bitcoin Barcode">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3 class="col-md-12">SEND ${{ $deposit_detail->amount }} TO ETHEREUM WALLET BELOW:</h3>
                        <form action="">
                            <div class="form-group">
{{--                                <input class="form-control col-md-12 col-lg-6" id="eth" value="0x3E48B29aAC0a0cF008207AC02647589E3Ab9B032">--}}
                                <input class="form-control col-md-12 col-lg-6" id="eth" value="{{ setting('eth_wallet') }}">
                                <button class="btn" data-clipboard-target="#eth">
                                    {{--                                    <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">--}}
                                    <p>Copy To Clipboard</p>
                                </button>
                                <h4>OR SCAN BARCODE</h4>
                                <img height="250" width="250" src="{{ asset('images/eth2.png') }}" alt="Bitcoin Barcode">
                            </div>
                        </form>
                    </div>
                </div>
            <hr>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3 class="col-md-12">SEND ${{ $deposit_detail->amount }} TO LITECOIN WALLET BELOW:</h3>
                        <form action="">
                            <div class="form-group">
                                {{--                                <input class="form-control col-md-12 col-lg-6" id="btc" value="3BknrQv7HQQqqjeP6LiBuYFRWxyLrfJrDm">--}}
                                <input class="form-control col-md-12 col-lg-6" id="btc" value="{{ setting('litcoin_wallet') }}">
                                <button class="btn" data-clipboard-target="#btc">
                                    {{--                                    <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">--}}
                                    <p>Copy To Clipboard</p>
                                </button>
{{--                                <h4>OR SCAN BARCODE</h4>--}}
{{--                                <img height="250" width="250" src="{{ asset('images/btc2.png') }}" alt="Bitcoin Barcode">--}}
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3 class="col-md-12">SEND ${{ $deposit_detail->amount }} TO BITCOIN CASH WALLET BELOW:</h3>
                        <form action="">
                            <div class="form-group">
                                {{--                                <input class="form-control col-md-12 col-lg-6" id="eth" value="0x3E48B29aAC0a0cF008207AC02647589E3Ab9B032">--}}
                                <input class="form-control col-md-12 col-lg-6" id="eth" value="{{ setting('btch_wallet') }}">
                                <button class="btn" data-clipboard-target="#eth">
                                    {{--                                    <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">--}}
                                    <p>Copy To Clipboard</p>
                                </button>
{{--                                <h4>OR SCAN BARCODE</h4>--}}
{{--                                <img height="250" width="250" src="{{ asset('images/eth2.png') }}" alt="Bitcoin Barcode">--}}
                            </div>
                        </form>
                    </div>
                </div>
            <hr>


                </div>
            @endif

            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
    new ClipboardJS('.btn');
</script>
@endsection
