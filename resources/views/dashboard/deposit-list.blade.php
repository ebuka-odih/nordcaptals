
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Deposit History</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
       @include('dashboard.includes.sidebar')
        <div class="desh-right">


            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script language=javascript>
                function go(p)
                {
                    document.opts.page.value = p;
                    document.opts.submit();
                }
            </script>



            <h5 style="font-size: 18px; margin-left: 80px; margin-bottom: 5px">These are details of your investment deposit</h5>
            <table cellspacing=1 cellpadding=8 border=0 width=100%  class="tab">
                <tr>
                    <th class=inheader><b>Date</b></th>
                    <th class=inheader><b>Invested Amount</b></th>
                    <th class=inheader><b>Expected Profit</b></th>
                    <th class=inheader><b>My Plan</b></th>
                    <th class=inheader><b>Status</b></th>
                    <th class=inheader ><b>View</b></th>
                </tr>
                @forelse($deposit_history as $item)
                    <tr>
                        <td><strong>{{ date('d-M-y', strtotime($item->created_at)) }}</strong></td>
                        <td><strong>${{ $item->amount }}</strong></td>
                        <td><strong>${{ $item->investment_plan->total_return * $item->amount / 100 }}</strong></td>
                        <td><strong>{{ $item->investment_plan->name }}</strong></td>

                        @if($item->status  == 'pending')
                            <td> <p><button class="w3-button w3-orange">Pending</button></p></td>
                        @else
                            <td> <p><button class="w3-button w3-green">Approved</button></p></td>
                        @endif
                        <td><a href="{{ route('user_deposits.view', $item->id) }}"><img height="20" width="20" src="{{ asset('images/eye.png') }}"></a></td>
                        @empty
                            <td colspan=6 align=center>No transactions found</td>
                    </tr>
                @endforelse

                <tr>
                    <td colspan=6>&nbsp;</td>
                </tr>


                <tr>
                    <td colspan=4><strong>Pending Deposit:</strong></td>
                    <td colspan="2" align=right><b>$ {{ $pending_cash }}</b></td>
                </tr>
            </table>
            <h5 style="font-size: 18px; margin-top: 10px; color: #e34653">Note that maturity period starts counting from the minute your payment is approved</h5>


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

