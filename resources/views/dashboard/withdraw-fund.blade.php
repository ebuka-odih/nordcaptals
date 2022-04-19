
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Ask for withdrawal</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
        @include('dashboard.includes.sidebar')
        <div class="desh-right">

            <br>
            <p style="margin-bottom: 15px">NOTE: When a withdrawal request is made, It will take 1hr for our team to confirm, after confirmation your withdrawal request will either be approved declined depending on the nature of the transaction.</p>
            <p style="margin-bottom: 15px">If your withdrawal request is approved, the specified withdrawal amount will be sent to your btc wallet id below.</p>

            <table cellspacing=0 cellpadding=2 border=0  class="tab">
                    <tr>
                        <th>Account Balance:</th>
                        <th>$<b>{{ auth()->user()->acct_wallet }}</b></th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            @if(Session::has('success_message'))
                                <h5><strong style="color: #1a9138">{!! session('success_message') !!}</strong></h5>
                            @endif
                            @if(Session::has('declined_message'))
                                <h5><strong style="color: red; font-size: 14px">{!! session('declined_message') !!}</strong></h5>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Pending Withdrawals: </td>
                        <td>$<b>{{ auth()->user()->acct_wallet }}</b></td>
                    </tr>

                    <tr>
                        <td>Your Bitcoin Account:</td>
                        <td>{{ auth()->user()->btc_wallet }}</td>
                    </tr>
                @if( auth()->user()->acct_wallet > 0)
                    <tr>
                        <td>Enter Amount in USD</td>
                        <td>
                            <form action="{{ route('user_withdraw.store') }}" method="POST">
                                @csrf
                                <input style="height: 30px" name="amount" type="number" placeholder="Enter Amount in USD"/>
                                <div class="logfor">
                                    <div class="logon">
                                        <input type="submit" value="Withdraw">
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @else
                @endif
                </table>


                <br><br>

              @if(auth()->user()->acct_wallet == 0)
                    <div>You have no funds to withdraw.</div>
                @else
                  <div></div>
                @endif




        </div>
    </div>
</div>
@include('includes.footer')
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src='{{ asset('js/demo.js') }}'></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
<!----AA290 VISUALHYIP.COM---->
</html>

