@if( auth()->user()->user_role != 'admin')

<div class="desh-left">
    <div class="welcome">
        <p>Welcome<br>
            <span>{{ auth()->user()->first_name }}</span></p>
    </div>
    <div class="desh-menu">
        <ul>
            <li><a href="{{ route('user_dashboard') }}">Account Overview <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_plans') }}">My Plan<i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_deposits') }}">Make Deposit <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_withdrawal') }}">Withdraw Fund <i class="dicon desh"></i></a></li>
{{--            <li><a href="?a=deposit_list">Deposit List <i class="dicon desh"></i></a></li>--}}
            <li><a href="{{ route('user_deposit_list') }}">Deposit History <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_withdraw_history') }}">Withdraw History <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_earnings') }}">Earning History <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('user_referrals') }}">Referral <i class="dicon desh"></i></a></li>
{{--            <li><a href="?a=referallinks">Referral Link <i class="dicon desh"></i></a></li>--}}
            <li><a href="{{ route('user_details') }}">Account Setting <i class="dicon desh"></i></a></li>
            <li><a href="{{ route('logout') }}" class="a-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" aria-hidden="true" ></i> Log Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
        </ul>
    </div>
</div>
@else
    <div class="desh-left">
        <div class="welcome">
            <p>Welcome<br>
                <span>{{ auth()->user()->first_name }} (Admin)</span></p>
        </div>
        <div class="desh-menu">
            <ul>
                <li><a href="{{ route('admin-dashboard') }}">My Dashboard <i class="dicon desh"></i></a></li>
                <li><a href="?a=logout">Log Out <i class="dicon desh"></i></a></li>
            </ul>
        </div>
    </div>
@endif
