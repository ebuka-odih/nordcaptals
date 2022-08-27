
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Withdraw History</h1>
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




            <table cellspacing=1 cellpadding=2 border=0 width=100%  class="tab">
                <tr>
                    <th class=inheader width=170><b>Date</b></th>
                    <th class=inheader><b>Amount</b></th>
                    <th class=inheader width=200><b>Status</b></th>
                </tr>
                @forelse($withdrawal as $item)
                <tr>
                    <td><strong>{{ date('D-M-Y', strtotime($item->created_at)) }}</strong></td>
                    <td><strong>{{ $item->amount }}</strong></td>
                    @if($item->status  == 'pending')
                    <td> <p><button class="w3-button w3-orange">Pending</button></p></td>
                    @else
                        <td> <p><button class="w3-button w3-green">Approved</button></p></td>
                    @endif
                    @empty
                    <td colspan=3 align=center>No transactions found</td>
                </tr>
                @endforelse
                <tr>
                    <td colspan=4>&nbsp;</td>
                </tr>

                <tr>
                    <td colspan=2>Total:</td>
                    <td align=right><b>$ {{ $total }}</b></td>
                </tr>
                <tr>
                    <td colspan=2>Total Approved:</td>
                    <td align=right><b>$ {{ $approved_cash }}</b></td>
                </tr>
                <tr>
                    <td colspan=2>Total Pending:</td>
                    <td align=right><b>$ {{ $pending_cash }}</b></td>
                </tr>
            </table>



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

