
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
    	<div class="other-head">
        	<h1>Secure Dashboard</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
	<div id="sub-pagesbg">
@include('dashboard.includes.sidebar')
<div class="desh-right">

<div style="display:none">
</div>
@if(auth()->user()->user_role != 'admin')

        	<div  style="padding-top:0px;" class="box-head">
            	<h4>ACCOUNT DETAILS</h4>
            </div>
            <div class="desh-downall">
            	<div class="desh-user">
                	<div class="duser-icon">
                    	<img src="{{ asset('images/duser.png') }}" height="60">
                    </div>
                    <div class="details-down">
                    	<div style="margin-left: 70px" class="rd">
                        	<div class="rd-tittle">
                            	<p>Registration Date :</p>
                            </div>
                            <div class="rdw">
                            	<p>{{ date('d-M-Y', strtotime(auth()->user()->created_at)) }}</p>
                            </div>
                        </div>
{{--                        <div class="la">--}}
{{--                        	<div class="rd-tittle">--}}
{{--                            	<p>Last access  :</p>--}}
{{--                            </div>--}}
{{--                            <div class="rdw">--}}
{{--                            	<p>Sep-18-2020 08:05:28 AM</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="total-balance">
                    <div class="tbicon">
                    	<img src="{{ asset('images/tbbg.png') }}" height="60">
                    </div>
                    <div class="tbtextbg">
                    	<div class="tbtittle">
                        	<p>Total balance :</p>
                        </div>
                        <div class="tb-amount">
                        	<p>$<b>{{ auth()->user()->acct_wallet }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-referbg">
                <p>Your Referral Link : {{ auth()->user()->referral_link }}</p>
            </div>
            <div class="desh-history">
            	<div class="his-left">
                    <div class="his-head">
                    	<p><img src="{{ asset('images/dhs.png') }}"> DEPOSIT HISTORY</p>
                    </div>
                    <div class="dashde">
                    	<div class="dasshone">
                        	<p>Total Deposit :<span>$<b>{{ $approved_cash ? : '0.00' }}</b></span></p>
                        </div>
                        <div class="dasshone">
                        	<p>Active Deposit :<span>$<b>{{ $approved_cash ? : '0.00'}}</b></span></p>
                        </div>
                    </div>
                </div>
                <div class="dhbtn">
                	<a href="{{ route('user_deposits') }}" class="a-link">DEPOSIT NOW</a>
                </div>
            </div>
            <div class="desh-history">
            	<div class="his-left">
                    <div class="his-head">
                    	<p><img src="{{ asset('images/whs.png') }}"> WITHDRAW HISTORY</p>
                    </div>
                    <div class="dashde">
                    	<div class="dasshone">
                        	<p>Earned Total :
                                <span style='font-size:150%;'>$<b id="total_profit">{{ $total_earned ? : '0.00' }}</b></span></p>
                        </div>
                    	<div class="dasshone">
                        	<p>Pending Withdraw :<span>$<b>{{ $withdraw_pending_cash ? : '0.00' }}</b></span></p>
                        </div>
                        <div class="dasshone">
                        	<p>Total Withdraw :<span>$<b>{{ $total_withdraw ? : '0.00'}}</b></span></p>
                        </div>
                        <div class="dasshone">
                            <p>Last Withdraw :<span>$<b>{{ $last_withdraw ? : '0.00'}}</b></span></p>
                        </div>
                    </div>
                </div>
                <div class="dhbtn">
                	<a href="{{ route('user_withdrawal') }}" class="a-link">WITHDRAW NOW</a>
                </div>
            </div>
    @else
        <div  style="padding-top:0px;" class="box-head">
            <h4>ACCOUNT DETAILS</h4>
        </div>
        <div class="desh-downall">
            <div class="desh-user">
                <div class="duser-icon">
                    <img src="{{ asset('images/duser.png') }}" height="60">
                </div>
                <div class="details-down">
                    <div class="rd">
                        <div class="rd-tittle">
                            <p>Registration Date :</p>
                        </div>
                        <div class="rdw">
                            <p>{{ date('M-D-Y', strtotime(auth()->user()->created_at)) }}</p>
                        </div>
                    </div>
{{--                    <div class="la">--}}
{{--                        <div class="rd-tittle">--}}
{{--                            <p>Last access  :</p>--}}
{{--                        </div>--}}
{{--                        <div class="rdw">--}}
{{--                            <p>Sep-18-2020 08:05:28 AM</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    <br><br><br>

    @endif



<script>
countEarnings();
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

