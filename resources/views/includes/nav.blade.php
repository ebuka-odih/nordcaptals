@if(Auth::guest())
<div id="main-header">
    <div id="sub-header">
        <div class="logo">
            <a href="{{ route('home') }}"><img  src="{{ asset('images/logo.png') }}"/></a>
        </div>

        <div class="header-right">

            <div class="header-rightup">
                <div class="started">

                </div>
                <div class="social">
                    <div class="social-tittle">
                        <p><i style="color: #FFD700;" class="fa fa-envelope" aria-hidden="true"></i> Email : <a style="color: white" href="mailto:support@airlinetrades.com">support@airlinetrades.com</a></p>
                    </div>
                </div>
                <div class="log-reg">
                    <div class="login">
                        <a href="{{ route('login') }}" class="a-link"><i class="fa fa-key" aria-hidden="true"></i> Log In</a>
                    </div>
                    <div class="registration">
                        <a href="{{ route('register') }}" class="a-link"><i class="fa fa-user" aria-hidden="true"></i> Registration</a>
                    </div>
                </div>             </div>
            <div class="menu">
                <nav id="nav-1">
                    <a class="link-1 " href="{{ route('homepage') }}">Home</a>
                    <a class="link-1" href="{{ route('about') }}">About Us</a>
{{--                    <a class="link-1" href="index38cd.html?a=faq">F.A.Q</a>--}}
                    <a class="link-1" href="{{ route('rules') }}">Rules & Agreements</a>
                    <a class="link-1" href="{{ route('contact.create') }}">Contact Us</a>
                </nav>

            </div>

        </div>
        <div style="width: 50em;" id="google_translate_element"></div>

    </div>
</div>
@else
    <div id="main-header">
        <div id="sub-header">
            <div class="logo">
                <a  href="{{ route('homepage') }}"><img src="{{ asset('images/logo.png') }}"/></a>
            </div>
            <div class="header-right">
                <div class="header-rightup">
                    <div class="started">

                    </div>
                    <div class="social">
                        <div class="social-tittle">
                            <p><i style="color: #FFD700" class="fa fa-envelope" aria-hidden="true"></i> Email : <a style="color: white" href="mailto:support@airlinetrades.com">support@airlinetrades.com</a></p>
                        </div>

                    </div>
                    <div class="log-reg">
                        <div class="login">
                            <a href="{{ route('logout') }}" class="a-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off" aria-hidden="true" ></i> Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                        @if( auth()->user()->user_role == 'admin')
                            <div class="registration">
                                <a href="{{ route('admin-dashboard') }}" class="a-link"><i class="fa fa-user" aria-hidden="true"></i> Dashboard</a>
                            </div>
                        @else
                        <div class="registration">
                            <a href="{{ route('user_dashboard') }}" class="a-link"><i class="fa fa-user" aria-hidden="true"></i> Account</a>
                        </div>
                        @endif
                    </div>            </div>
                <div class="menu">
                    <nav id="nav-1">
                        <a class="link-1 " href="{{ route('homepage') }}">Home</a>
                        <a class="link-1" href="{{ route('about') }}">About Us</a>
{{--                        <a class="link-1" href="index38cd.html?a=faq">F.A.Q</a>--}}
                        <a class="link-1" href="{{ route('rules') }}">Rules & Agreements</a>
                        <a class="link-1" href="{{ route('contact.create') }}">Contact Us</a>
                    </nav>
                </div>
            </div>
            <div style="width: 60em" id="google_translate_element"></div>

        </div>
    </div>
@endif
