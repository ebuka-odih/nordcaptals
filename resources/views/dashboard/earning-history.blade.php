
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Earning History</h1>
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
                    <th class=inheader><b>Plan</b></th>
                    <th class=inheader><b>Invested</b></th>
                    <th class=inheader width=100><b>Earned</b></th>
                </tr>
                @forelse($my_plans as $my_plan)
                    <tr>
                        <td><strong>{{ date('d-M-y', strtotime($my_plan->approved_date)) }}</strong></td>
                        <td><strong>{{ $my_plan->investment_plan->name }}</strong></td>
                        <td><strong>{{ $my_plan->amount }}</strong></td>
                        <td><strong>$ {{ $my_plan->earning }}</strong></td>
                    </tr>
                    @empty
                <tr>
                    <td colspan=4 align=center>No record found</td>
                </tr>
                @endforelse
                <tr><td colspan=4>&nbsp;</td>

                <tr>
                    <td colspan=2>Total:</td>
                    <td align=right colspan="2"><b>$ {{ $total }} </b></td>
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

