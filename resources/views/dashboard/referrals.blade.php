
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Your Referrals</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
       @include('dashboard.includes.sidebar')
        <div class="desh-right">

            <br>
            <br>
            <div class="main-referbg">
                <p>Your Referral Link : {{ auth()->user()->referral_link }}</p>
{{--                <p>Your Referral Link : {{ Auth::user()->referrer->name ?? 'Not Specified' }}</p>--}}
{{--                <p>Your Referral Link : {{ count(Auth::user()->referrals)  ?? '0' }}</p>--}}

            </div>
            <table width=300 cellspacing=1 cellpadding=1  class="tab">
                <tr>
                    <td class=item>Referrals:</td>
                    <td class=item>{{ count(Auth::user()->referrals)  ?? '0' }}</td>
                </tr><tr>
                    <td class=item>Active referrals:</td>
                    <td class=item>0</td>
                </tr><tr>
                    <td class=item>Total referral commission:</td>
                    <td class=item>$0.00</td>
                </tr>
            </table>
            <br>




        </div>
    </div>
</div>
@include('includes.footer')
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src='js/demo.js'></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
<!----AA290 VISUALHYIP.COM---->
</html>

