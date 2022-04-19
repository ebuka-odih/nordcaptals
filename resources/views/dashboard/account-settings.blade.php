
<!doctype html>
<html>
@include('dashboard.includes.head')

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Edit Account</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
       @include('dashboard.includes.sidebar')
        <div class="desh-right">


            <br>
            @if (session('success_profile'))
                <h4 style="color: green">
                    {{ session('success_profile') }}
                </h4>
            @endif
            @if ($errors->any())
                <div style="margin-bottom: 5px" class="container">
                    <div class="alert-message">
                        <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>
                        @foreach ($errors->all() as $error)
                            <li style="color: lightcoral">{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                <form action="{{ route('update_profile.update', auth()->user()->id) }}" method='POST'>
                @csrf

                <table cellspacing=0 cellpadding=2 border=0  class="blank">
                    <tr>
                        <td>Account Name:</td>
                        <td>{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</td>
                    </tr><tr>
                        <td>Registration date:</td>
                        <td>{{ date('d-M-Y', strtotime(auth()->user()->created_at)) }}</td>
                    </tr>
                    <tr>
                        <td>Your First Name:</td>
                        <td><input type=text name='first_name' value='{{ auth()->user()->first_name }}' class=inpts size=30></td>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </tr>
                    <tr>
                        <td>Your Last Name:</td>
                        <td><input type=text name='last_name' value='{{ auth()->user()->last_name }}' class=inpts size=30></td>
                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif

                    </tr>
                    <tr>
                        <td>Your E-mail address:</td>
                        <td><input type=text name=email value='{{ auth()->user()->email }}' class=inpts size=30></td>
                    </tr>
                    <tr>
                        <td>Your Bitcoin acc no:</td>
                        <td><input type=text class=inpts size=30 name="btc_wallet" value="{{ auth()->user()->btc_wallet }}"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type=submit value="Change Account data" class=sbmt></td>
                    </tr>
                </table>
            </form>

                    <br>
                    @if (session('success_password'))
                        <h4 style="color: green">
                            {{ session('success_password') }}
                        </h4>
                    @endif
                    <h5 style="margin-left: 20em">Change Password</h5>
                    <form action="{{ route('detail.update') }}" method='POST'>
                        @csrf
                        <table cellspacing=0 cellpadding=2 border=0  class="blank">

                            <tr>
                                <td>Current Password:</td>
                                <td><input type=password name='current-password' class=inpts size=30 /></td>
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('current-password') }}</strong>
                            </span>
                                @endif
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input type=password name='new-password' value="" class=inpts size=30></td>
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('new-password') }}</strong>
                            </span>
                                @endif
                            </tr>
                            <tr>
                                <td>Retype Password:</td>
                                <td><input type=password name='new-password_confirmation' value="" class=inpts size=30></td>
                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                                <td><input type=submit value="Change Password" class=sbmt></td>
                            </tr>
                        </table>
                    </form>


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


