
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>My Plans</h1>
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




            <table cellspacing=2 cellpadding=2 border=0 width=100%  class="tab">
                <tr>
                    <th class=inheader><b>Start Date</b></th>
                    <th class=inheader><b>Plan</b></th>
                    <th class=inheader><b>Invested</b></th>
                    <th class=inheader><b>ROI</b></th>
                    <th class=inheader><b>Days</b></th>
                    <th class=inheader><b>Ending Date</b></th>
                    <th class=inheader><b>Status</b></th>
                    <th class=inheader><b>Details</b></th>
                </tr>
                @forelse($my_plan as $item)
                <tr>
                    <td><strong>{{ date('d-M-y', strtotime($item->approved_date)) }}</strong></td>
                    <td><strong>{{ $item->investment_plan->name }}</strong></td>
                    <td><strong>{{ $item->amount }}</strong></td>
                    <td><strong>${{ $item->investment_plan->total_return * $item->amount / 100 }}</strong></td>
                    <td><strong>Day ({{ $item->investment_plan->term_days }}) </strong></td>
                    <td><strong>{{ date('d-M-y', strtotime($item->end_date)) }}</strong></td>
                    <td> <p><button class="w3-button w3-green">{{ $item->status }}</button></p></td>
                    <td><a href="{{ route('user_deposits.view', $item->id) }}"><img height="20" width="20" src="{{ asset('images/eye.png') }}"></a></td>


                </tr>
                    <tr>
                        <td colspan=8>&nbsp;</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=8 align=center>No transactions found</td>
                    </tr>
                @endforelse
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

