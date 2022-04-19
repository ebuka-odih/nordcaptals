<!doctype html>
<html>

<!-- Mirrored from crypto-minners.uk/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 11:57:29 GMT -->
<head>
<meta charset="utf-8">
<title>Airtrades</title>
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<script src='js/jquery-1.11.3.min.js'></script>
<script src='js/wow.js'></script>
<script type="text/javascript" src="js/time.js"></script>
<script>
    wow = new WOW();
    wow.init();
</script>
<link rel="stylesheet" type="text/css" href="css/faq.css"/>
<script type="text/javascript" src="js/faq.js"></script>
<link rel="stylesheet" type="text/css" href="css/demo.css"/>

   <style>

  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #ffffff;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #ffffff;
}
  </style>

    <style>
        .translated-ltr{margin-top:-5px;}
        .translated-ltr{margin-top:-5px;}
        .goog-te-banner-frame {display: none;margin-top:-20px;}

        .goog-logo-link {
            display:none !important;
        }

        .goog-te-gadget{
            color: transparent !important;
        }

    </style>


</head>

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
    	<div class="other-head">
        	<h1>Create An Account</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
	<div id="sub-pagesbg">





 <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }


  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }


  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }
  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) {
    Char = sText.charAt(i);
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>


   <ul style="color:red">







   <br>
    </ul>


{{--                @if ($errors->any())--}}
{{--               <div style="margin-bottom: 5px" class="container">--}}
{{--                <div class="alert-message">--}}
{{--                    <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li style="color: lightcoral">{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                @endif--}}

        <form method="POST" action="{{ route('register') }}">
            @csrf


    	<div class="left-box">
            <div class="box-head">
            	<h4>Account Information</h4>
            </div>
            <div class="all-types">
            	<div class="boxes">
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/user.png">
                        </div>
                        <div class="info-type">
                            <input placeholder="First Name" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                           <br>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/user.png">
                        </div>
                        <div class="info-type">
                            <input placeholder="Last Name" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="on" autofocus>
                            <br>
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="info-one">
                        <div class="info-icon">
                            <img src="images/user.png">
                        </div>
                        <div class="info-type">
                            <input placeholder="Username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="off" autofocus>
                            <br>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="info-one">

                        <div class="info-icon">
                            <img src="images/mail.png">
                        </div>
                        <div class="info-type">

                            <input style="width: 30em; height: 30px;" placeholder="Enter Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <br>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/pass.png">
                        </div>
                        <div class="info-type">
                            <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <br>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/pass.png">
                        </div>
                        <div class="info-type">
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                    </div>

                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/sq.png">
                        </div>
                        <div class="info-type">
{{--                        	<input type="text" placeholder="Secret Question" name='secret_question' >--}}
                            <select style="width: 26em"   name="secret_question" id="">
                                <option  selected>Pick Secret Questiion</option>
                                <option value="que1">What was your childhood nickname?</option>
                                <option value="que2">In what city did you meet your spouse/significant other?</option>
                                <option value="que3">What is the name of your favorite childhood friend?</option>
                                <option value="que4">What is your oldest sibling’s birthday month and year? (e.g., January 1900)</option>
                                <option value="que5">What is the middle name of your oldest child?</option>
                                <option value="que6">What is your oldest sibling's middle name?</option>
                                <option value="que7">What school did you attend for sixth grade?</option>
                                <option value="que8">What is your oldest cousin's first and last name?</option>
                                <option value="que9">What was the name of your first stuffed animal?</option>
                                <option value="que10">In what city or town did your mother and father meet?</option>
                            </select>
                        </div>
                    </div>

                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="images/sa.png">
                        </div>
                        <div class="info-type">
                        	<input type="text" placeholder="Secret Answer" name='answer'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-box">
            <div class="box-head">
            	<h4>Payment Information</h4>
            </div>
            <div class="all-types">
            	<div class="boxes">

                    <div class="info-one">
                        <div class="info-icon">
                        	<img src="images/dolar.png">
                        </div>
                        <div class="info-type">
                        	<input type="text" placeholder="Bitcoin Account" name="btc_wallet" required value="{{ old('btc_wallet') }}">
                        </div>
                    </div>


                    <div class="complete">
                        <div class="check-text">
                            <div class="check-box">
                                <input required type="checkbox" name=agree value=1  />
                            </div>
                            <div class="agree">
                                <p>I agree to the <span><a target="_blank" href="{{ route('rules') }}">  terms and conditions of Service</a></span></p>
                            </div>
                        </div>
                        <div class="regis-now">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </div>
                </div>
            </div>
        </div>

</form></div>
</div>
</div>
@include('includes.footer')
<script src='js/demo.js'></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
<!----AA290 VISUALHYIP.COM---->

<!-- Mirrored from crypto-minners.uk/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Sep 2020 11:57:33 GMT -->
</html>
