<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Make Deposit </h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
        @include('dashboard.includes.sidebar')
        <div class="desh-right">


            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>



            <br>
            @if(Session::has('disapproved'))
                <p><strong style="color: #e34653; font-size: 16px; padding-bottom: 10px">{!! session('disapproved') !!}</strong></p>
            @endif
            <br>
            <form method='POST' action="{{ route('deposit.store') }}">
               @csrf
                Select a plan:<br>

                @foreach($plans as $plan)
                    <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                        <tr>
                            <td colspan=3>
                                <input required type=radio name='plan_id' value='{{ $plan->id }}' >
                                <!--	<input type=radio name=h_id value='1'  checked  > -->
                                <b>{{ $plan->total_return }}% After {{ $plan->term_days }}Days</b>
                            </td>
                        </tr>
                        <tr>
                            <th class=inheader>Plan</th>
                            <th class=inheader width=200>Spent Amount ($)</th>
                            <th class=inheader width=100 nowrap>
                                <nobr> Profit (%)</nobr>
                            </th>
                        </tr>
                        <tr>
                            <td class=item>{{ $plan->name }}</td>
                            <td class=item align=right>${{ $plan->min_deposit }} - ${{ $plan->max_deposit }}</td>
                            <td class=item align=right>{{ $plan->total_return }}%</td>
                        </tr>

                    </table>
                    <br><br>
                    <script>
                        cps[1] = [];
                    </script>
                @endforeach


                <center>
                    <table  cellspacing=0 cellpadding=2 border=0>
                        <tr>
                            <td>
                            <div class="main-deposit-box">
{{--                                <div class="account-balance-d">--}}
{{--                                    <p>Account Balance : <span>${{ auth()->user()->acct_wallet }}</span></p>--}}
{{--                                </div>--}}
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align=right>
                                <small>
                                </small>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="margin-top: 20px;" class="plan-s">
                                    <p>Enter Your Deposit Amount</p>
                                </div>
                                <div class="select-p-box">
                                    <input type="text" name='amount' value='0.00' style="text-align:center;">
                                </div>
                            </td>

                        </tr>

                        <tr>
                            <td colspan=2><br><br>
                                <input style="    width: 32%;
                        margin-left: 33%;
                        margin-top: 28px;" type=submit value="Spend" class=sbmt>
                            </td>
                        </tr>
                    </table>
                </center>
            </form>

            <script language=javascript>
                for (i = 0; i < document.spendform.type.length; i++) {
                    if ((document.spendform.type[i].value.match(/^process_/))) {
                        document.spendform.type[i].checked = true;
                        break;
                    }
                }
                updateCompound();
            </script>


        </div>
    </div>
</div>
@include('includes.footer')
<script src='{{ asset('js/demo.js') }}'></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
<!----AA290 VISUALHYIP.COM---->
</html>
