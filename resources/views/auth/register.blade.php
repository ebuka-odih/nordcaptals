
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="styles/img/favicon.ico" type="image/x-icon" />
    <title>Samtrader - Binary Options and CFD Broker - Trading Platform</title>
    <script>
        document.write("<link rel='stylesheet' href='{{ asset('front/css/main.css?v=') }}" + Date.now() + "'>")

    </script>
    <link rel="stylesheet" href="{{ asset('front/css/auth.css') }}" />
    {{--    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}" />--}}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">

</body>

</html>
<div class="container">
    <div class="auth">
        <script language=javascript>
            function checkform() {
                return true;
            }

        </script>
        <div class="head">
            <div class="float-left">
                <!--<a href="?a=home">
                    <img height="42" width="250" src="styles/img/logo/logo-white.svg">
                </a>-->
            </div>
            <div class="float-right">
                <a class="back" href="{{ route('index') }}">
                    <svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 6.97 11.53" id="prev" width="100%" height="100%">
                            <g clip-path="url(#a)">
                                <path d="M5.51 0l1.46 1.36-4.2 4.5 4.18 4.28-1.43 1.4L0 5.89 5.51 0z"></path>
                            </g>
                        </svg>
                    </svg>Back To Home</a>
            </div>
        </div>



        <div class="main d-flex">
            <div class="right order-1">
                <h1 class="title mb-5">
                        <span class="icon">
                            <svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10.25 14.68" id="user" width="100%" height="100%">
                                    <g clip-path="url(#a)">
                                        <path d="M7.94 3A3 3 0 1 1 5 0a3 3 0 0 1 3 3M1.89 8.94L.33 11.42a2.13 2.13 0 0 0 1.8 3.27h6a2.13 2.13 0 0 0 1.8-3.27L8.36 8.94a3.82 3.82 0 0 0-6.46 0"></path>
                                    </g>
                                </svg>
                            </svg>
                        </span>
                    <span class="t">Create a new account</span>
                </h1>


                <script language=javascript>
                    function checkform() {
                        if (document.regform.fullname.value == '') {
                            alert("Please enter your full name!");
                            document.regform.fullname.focus();
                            return false;
                        } {
                            /literal} {
                            if $settings.use_user_location == 1
                                } {
                            literal
                        }
                        if (document.regform.address.value == '') {
                            alert("Please enter your address!");
                            document.regform.address.focus();
                            return false;
                        }
                        if (document.regform.city.value == '') {
                            alert("Please enter your city!");
                            document.regform.city.focus();
                            return false;
                        }
                        if (document.regform.state.value == '') {
                            alert("Please enter your state!");
                            document.regform.state.focus();
                            return false;
                        }
                        if (document.regform.zip.value == '') {
                            alert("Please enter your ZIP!");
                            document.regform.zip.focus();
                            return false;
                        }
                        if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                            alert("Please choose your country!");
                            document.regform.country.focus();
                            return false;
                        } {
                            /literal} { /
                            if
                                } {
                            literal
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
                        } {
                            /literal} {
                            if $settings.use_transaction_code
                                } {
                            literal
                        }
                        if (document.regform.transaction_code.value == '') {
                            alert("Please enter your transaction code!");
                            document.regform.transaction_code.focus();
                            return false;
                        }
                        if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                            alert("Please check your transaction code!");
                            document.regform.transaction_code2.focus();
                            return false;
                        } {
                            /literal} { /
                            if
                                } {
                            literal
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
                        if (document.regform.agree.checked == true) {
                            alert("You have to agree with the Terms and Conditions!");
                            return false;
                        }
                        return true;
                    }

                    function IsNumeric(sText) {
                        var ValidChars = "0123456789";
                        var IsNumber = true;
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



                <form method="POST" action="{{ route('register') }}" onsubmit="return checkform()" name="regform">

                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="hidden" name="referred_by" value="{{ request()->id}}" />

                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10.25 14.68" id="user" width="100%" height="100%">
                                        <g clip-path="url(#a)">
                                            <path d="M7.94 3A3 3 0 1 1 5 0a3 3 0 0 1 3 3M1.89 8.94L.33 11.42a2.13 2.13 0 0 0 1.8 3.27h6a2.13 2.13 0 0 0 1.8-3.27L8.36 8.94a3.82 3.82 0 0 0-6.46 0"></path>
                                        </g>
                                    </svg>
                                </svg><span>First Name</span>
                            </div>
                            <input data-role="input-box2" name="first_name" value="" placeholder="Enter First Name" type="text" size="30" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10.25 14.68" id="user" width="100%" height="100%">
                                        <g clip-path="url(#a)">
                                            <path d="M7.94 3A3 3 0 1 1 5 0a3 3 0 0 1 3 3M1.89 8.94L.33 11.42a2.13 2.13 0 0 0 1.8 3.27h6a2.13 2.13 0 0 0 1.8-3.27L8.36 8.94a3.82 3.82 0 0 0-6.46 0"></path>
                                        </g>
                                    </svg>
                                </svg><span>Last Name</span>
                            </div>
                            <input data-role="input-box2" name="last_name" value="" placeholder="Enter Last Name" type="text" size="30" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10.25 14.68" id="user" width="100%" height="100%">
                                        <g clip-path="url(#a)">
                                            <path d="M7.94 3A3 3 0 1 1 5 0a3 3 0 0 1 3 3M1.89 8.94L.33 11.42a2.13 2.13 0 0 0 1.8 3.27h6a2.13 2.13 0 0 0 1.8-3.27L8.36 8.94a3.82 3.82 0 0 0-6.46 0"></path>
                                        </g>
                                    </svg>
                                </svg><span>Username</span>
                            </div>
                            <input data-role="input-box2" name="username" value="" placeholder="Enter Username" type="text" size="30" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13.52 8.2" id="mail" width="100%" height="100%">
                                        <path d="M12.3 0H1.22A1.22 1.22 0 0 0 0 1.22V7a1.22 1.22 0 0 0 1.22 1.2H12.3A1.22 1.22 0 0 0 13.52 7V1.22A1.22 1.22 0 0 0 12.3 0zm-.17 2l-4.5 2.46a2 2 0 0 1-2 0C1.35 2.08 1.26 2 1.22 2a.44.44 0 0 1-.09-.56.31.31 0 0 1 .46-.12c.15.1 1.79 1 4.38 2.42a1.41 1.41 0 0 0 1.38 0l4.5-2.45a.32.32 0 0 1 .45.19.43.43 0 0 1-.17.52z"></path>
                                    </svg>
                                </svg><span> Your Email</span>
                            </div>
                            <input data-retype="true" data-target="#email1" name="email" value="" data-role="input-box2" placeholder="Enter Your Email" type="text" class="form-control">
                            <input id="email1" type=hidden name=email1 value="" class=inpts size=30>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" id="key" width="100%" height="100%">
                                        <path d="M463.748 48.251c-64.336-64.336-169.013-64.335-233.349.001-43.945 43.945-59.209 108.706-40.181 167.461L4.396 401.536a14.988 14.988 0 0 0-4.395 10.606V497c0 8.291 6.709 15 15 15h84.858c3.984 0 7.793-1.582 10.605-4.395l21.211-21.226a15.002 15.002 0 0 0 4.292-12.334l-2.637-22.793 31.582-2.974a14.975 14.975 0 0 0 13.521-13.521l2.974-31.582 22.793 2.651c4.233.571 8.496-.85 11.704-3.691a15.04 15.04 0 0 0 5.024-11.206V363h27.422c3.984 0 7.793-1.582 10.605-4.395l38.467-37.958c58.74 19.043 122.381 4.929 166.326-39.046 64.336-64.335 64.336-169.014 0-233.35zm-42.435 106.07c-17.549 17.549-46.084 17.549-63.633 0s-17.549-46.084 0-63.633 46.084-17.549 63.633 0 17.548 46.084 0 63.633z"></path>
                                    </svg>
                                </svg><span>Password</span>
                            </div>
                            <input name=password value="" data-role="input-box2" placeholder="Enter Password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" id="key" width="100%" height="100%">
                                        <path d="M463.748 48.251c-64.336-64.336-169.013-64.335-233.349.001-43.945 43.945-59.209 108.706-40.181 167.461L4.396 401.536a14.988 14.988 0 0 0-4.395 10.606V497c0 8.291 6.709 15 15 15h84.858c3.984 0 7.793-1.582 10.605-4.395l21.211-21.226a15.002 15.002 0 0 0 4.292-12.334l-2.637-22.793 31.582-2.974a14.975 14.975 0 0 0 13.521-13.521l2.974-31.582 22.793 2.651c4.233.571 8.496-.85 11.704-3.691a15.04 15.04 0 0 0 5.024-11.206V363h27.422c3.984 0 7.793-1.582 10.605-4.395l38.467-37.958c58.74 19.043 122.381 4.929 166.326-39.046 64.336-64.335 64.336-169.014 0-233.35zm-42.435 106.07c-17.549 17.549-46.084 17.549-63.633 0s-17.549-46.084 0-63.633 46.084-17.549 63.633 0 17.548 46.084 0 63.633z"></path>
                                    </svg>
                                </svg><span> Retype Password</span>
                            </div>
                            <input name=password_confirmation value="" data-role="input-box2" placeholder=" Retype Password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type=hidden name=agree value=1>
                        <button type="submit" class="btn btn-second btn-lg btn-block">Create New Account</button>
                        <p style="text-align: center;margin: 15px 0 0;color: rgba(0, 31, 93, 0.66);">
                            By creating this account, you agree to our <a href="?a=cust&amp;page=agreement" target="_blank" style="text-decoration: underline !important;">User Agreement.</a>
                        </p>
                    </div>
            </div>
            <div class="left order-0 float-left bw-flex-center ">
                <div class="signup-payments">
                    Diversity of investment methods
                    <ul>
                        <li>
                            <svg fill="#da251c">
                                <svg xmlns="http://www.w3.org/2000/svg" id="PerfectMoney-logo" viewbox="0 0 1119.6 1000" width="100%" height="100%">
                                    <path class="st0" d="M544.6,18c-268.4,0-486,217.6-486,486s217.6,486,486,486s486-217.6,486-486S813,18,544.6,18z M428.2,468.2 c-9.2,17.3-23.7,31.6-43.3,42.7c-14,8-27,13.5-38.8,16.5s-26.4,4.5-43.8,4.5h-42.2v9.6c0,36.3,0.4,64.6,1.1,84.9 c0.7,20.3,2,32.9,3.9,37.7l43.3,1.8V688H174.2v-20.9l35-1.8c1.1-3.2,2-15.2,2.8-36.2c0.7-20.9,1.1-49.7,1.1-86.4v-79.5 c0-42.3-0.5-75-1.4-98.4c-0.9-23.3-2.5-37.6-4.7-42.8l-32.7-1.8v-20.9h158.1c37.3,0,65,8.5,82.9,25.4c18,17,26.9,43.2,26.9,78.7 C442.1,429.2,437.4,450.8,428.2,468.2z M807.6,688v-20.9l36.6-1.8c1.1-2.8,1.8-14.2,1.9-34.4c0.2-20.1-0.1-49.5-0.8-88.2l-4.4-193.2 L706.1,682.6l-12.7,5.4h-1.1L554.7,350l-3.9,166.9c-0.8,38.7-1,69.6-0.8,92.7c0.2,23.1,0.8,41.1,2,53.8l40.5,3V688H482.6v-20.9 l34.4-3.6c1.8-16.4,3.4-38.3,4.7-65.8s2.3-55.2,3-83.1l5.6-189l-39.4-5.4v-20.9h97.6l1.1,0.6c1.8,7.6,6.1,20.7,12.7,39.5 C609,358,617.9,381,629,408.1l79.9,200.4c5.9-13.2,12.6-28.5,20-46.1c7.4-17.5,15.3-36.7,23.8-57.4l83.7-205.1l1.1-0.6h88.2v20.9 L888,322c-0.4,3.2-0.6,10-0.6,20.3c0,27.1,1.1,79.1,3.3,156.1c2.6,105.7,5.2,161.3,7.8,166.9l32.1,1.8V688H807.6z M367.8,342.9 c-17-12.8-46.2-19.1-87.6-19.1H263c-0.7,6-1.4,18.2-1.9,36.8c-0.6,18.5-0.8,40.6-0.8,66.1v70.6c19.2,2.8,32.8,4.6,40.8,5.4 c7.9,0.8,15.1,1.2,21.3,1.2c10.4,0,19.8-0.9,28.3-2.7c8.5-1.8,15.3-4.5,20.5-8.1c8.9-6,14.8-14.2,17.7-24.5 c3-10.4,4.4-27.1,4.4-50.3v-6C393.3,378.8,384.8,355.6,367.8,342.9z"></path>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#00abe8">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Payeer-logo" viewbox="0 0 1119.6 1000" width="100%" height="100%">
                                    <path class="st0" d="M615.9,325.6c12.1,13.3,18.2,29.5,18.2,48.7s-6.1,35.4-18.2,48.5c-12.1,13.2-27.2,19.8-45.4,19.8H486V305.7 h84.5C588.6,305.7,603.8,312.4,615.9,325.6z"></path>
                                    <path class="st0" d="M540.9,39c-227.5,0-412,184.5-412,412s184.5,412,412,412s412-184.5,412-412S768.4,39,540.9,39z M681.9,489 c-28.6,30.9-64.7,46.4-108.5,46.4H486V693h-91V213h178.5c43.5,0,79.6,15.5,108.3,46.4c28.7,30.9,43,69.2,43,114.8 C724.8,419.8,710.5,458.1,681.9,489z"></path>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#f7931a">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.85 30.85" id="Bitcoin-logo" width="100%" height="100%">
                                    <g fill-rule="evenodd">
                                        <path d="M14.08 15.61l-.93 3.73c1.15.28 4.69 1.42 5.21-.68s-3.14-2.77-4.28-3.05z"></path>
                                        <path d="M19.15.46a15.42 15.42 0 1 0 11.23 18.7A15.42 15.42 0 0 0 19.15.46zm3.07 12.77a2.7 2.7 0 0 1-2.16 2.49 3 3 0 0 1 1.56 4.11c-.91 2.61-3.08 2.83-6 2.28l-.7 2.81-1.69-.42.69-2.77-1.35-.35-.69 2.78-1.69-.42.7-2.81-1.21-.31-2.2-.55.84-1.94s1.25.33 1.23.31a.62.62 0 0 0 .78-.4l1.9-7.62a.9.9 0 0 0-.79-1l-1.23-.31.45-1.81 2.34.59 1.08.25.69-2.78 1.69.42-.66 2.74 1.36.32.67-2.71 1.69.42-.69 2.78c2.17.74 3.7 1.85 3.39 3.9z"></path>
                                        <path d="M15.34 10.52l-.84 3.38c1 .24 3.9 1.21 4.38-.7s-2.58-2.44-3.54-2.68z"></path>
                                    </g>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#9da7e4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.09 31.05" id="Ethereum-logo" width="100%" height="100%">
                                    <path d="M9.54 31.05l9.55-13.4-9.55 5.63L0 17.65l9.54 13.4z"></path>
                                    <path d="M9.54 21.48l9.55-5.65-9.55-4.33L0 15.83l9.54 5.65z"></path>
                                    <path d="M9.54 11.5l9.55 4.33L9.54 0 0 15.83l9.54-4.33z"></path>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#bebebe">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.93 30.93" id="Litecoin-logo" width="100%" height="100%">
                                    <path d="M12.77 6.91L10.35 16l-1.93.75-.7 2.58 2-.66L8.37 24h14l.86-3.44H14.7l1.1-4.14 2.29-1 .66-2.53-2.25.76 1.76-6.74h-5.5zM15.47 0A15.47 15.47 0 1 1 0 15.47 15.47 15.47 0 0 1 15.47 0zm0 0" fill-rule="evenodd"></path>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#f7b000">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31.1 31.1" id="Dogecoin-logo" width="100%" height="100%">
                                    <path d="M15.55 0A15.55 15.55 0 1 0 31.1 15.55 15.55 15.55 0 0 0 15.55 0zm.61 24h-5.63v-7.54h-2v-1.83h2V7.14h4.83c1.14 0 8.72-.24 8.72 8.55S16.16 24 16.16 24zm-.24-13.7H13.7v4.38h3.5v1.83h-3.5v4.38H16c.6 0 4.92.07 4.91-5.1s-4.19-5.5-5-5.5z" fill-rule="evenodd"></path>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#47c243">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31 19.15" id="Bitcoin Cash-logo" width="100%" height="100%">
                                    <g>
                                        <path d="M22.21 19.15a11.69 11.69 0 0 0 0-19.15H31v19.15zM3.82 9.57a11.67 11.67 0 0 0 5 9.57H0V0h8.8a11.67 11.67 0 0 0-4.98 9.57zm12.72-1.45h.12a.88.88 0 0 0 .06-.54.88.88 0 0 0-.31-.45h-.21a1.53 1.53 0 0 0-1-.08L14 6.91 14.54 9l1.13-.29a1.53 1.53 0 0 0 .87-.59zM18 10.44a.91.91 0 0 0-.36-.48h-.25a1.93 1.93 0 0 0-1.22-.06l-1.37.1.58 2.25 1.34-.35a1.93 1.93 0 0 0 1-.64h.15a.9.9 0 0 0 .08-.59z"></path>
                                        <path d="M15.5 0a9.57 9.57 0 1 0 9.57 9.57A9.57 9.57 0 0 0 15.5 0zm4.42 11.25h-.22a3 3 0 0 1-1.73 1.19l-.42.11.45 2.16-1 .26-.44-1.71-.81.21.44 1.71-1 .26-.44-1.7-2.1.54v-1.29l.74-.19a.35.35 0 0 0 .25-.43L12.35 7.8a.52.52 0 0 0-.64-.38l-.85.22-.28-1.09 2.1-.55-.44-1.7 1-.26.44 1.7.81-.21-.44-1.7 1-.26.44 1.71h.17a2.62 2.62 0 0 1 1.85.18h.36a1.74 1.74 0 0 1 .57.85v.08a1.74 1.74 0 0 1-.09 1h-.2a2.44 2.44 0 0 1-.23.29 2.73 2.73 0 0 1 .87.28h.4a2 2 0 0 1 .64 1v.09a2 2 0 0 1 .09 2.2z"></path>
                                    </g>
                                </svg>
                            </svg>
                        </li>
                        <li>
                            <svg fill="#0088dc">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.02 16.57" id="Dash-logo" width="100%" height="100%">
                                    <g fill-rule="evenodd">
                                        <path d="M5.94 0h19.25a2.83 2.83 0 0 1 2.69 3.72l-2.79 8.51a6.31 6.31 0 0 1-6 4.34H.51l1.34-4.09h17.3L21.9 4.1H4.59z"></path>
                                        <path d="M1.21 6.42L0 10.15h10.22l1.21-3.73H1.21z"></path>
                                    </g>
                                </svg>
                            </svg>
                        </li>
                        <ul>
                </div>
                <div class="bb">
                    <h2>
                        Already have an account? </h2>
                    <p>
                        &nbsp;
                    </p>
                    <a href="{{ route('login') }}" class="btn btn-white">
                        Access your account </a>
                </div>
            </div>
        </div>
        </form>
        <div class="footer">
            <nav class="float-right menu d-none d-md-block">

            </nav>
            <ul class="socials float-left">
                <li>
                    <a target="_black" href="https://www.facebook.com">
                        <svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 90 90" id="facebook" width="100%" height="100%">
                                <path d="M90 15.001C90 7.119 82.884 0 75 0H15C7.116 0 0 7.119 0 15.001v59.998C0 82.881 7.116 90 15.001 90H45V56H34V41h11v-5.844C45 25.077 52.568 16 61.875 16H74v15H61.875C60.548 31 59 32.611 59 35.024V41h15v15H59v34h16c7.884 0 15-7.119 15-15.001V15.001z"></path>
                            </svg>
                        </svg>
                    </a>
                </li>
                <li>
                    <a target="_black" href="https://twitter.com">
                        <svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 612 612" id="twitter" width="100%" height="100%">
                                <path d="M612 116.258a250.714 250.714 0 0 1-72.088 19.772c25.929-15.527 45.777-40.155 55.184-69.411-24.322 14.379-51.169 24.82-79.775 30.48-22.907-24.437-55.49-39.658-91.63-39.658-69.334 0-125.551 56.217-125.551 125.513 0 9.828 1.109 19.427 3.251 28.606-104.326-5.24-196.835-55.223-258.75-131.174-10.823 18.51-16.98 40.078-16.98 63.101 0 43.559 22.181 81.993 55.835 104.479a125.556 125.556 0 0 1-56.867-15.756v1.568c0 60.806 43.291 111.554 100.693 123.104-10.517 2.83-21.607 4.398-33.08 4.398-8.107 0-15.947-.803-23.634-2.333 15.985 49.907 62.336 86.199 117.253 87.194-42.947 33.654-97.099 53.655-155.916 53.655-10.134 0-20.116-.612-29.944-1.721 55.567 35.681 121.536 56.485 192.438 56.485 230.948 0 357.188-191.291 357.188-357.188l-.421-16.253c24.666-17.593 46.005-39.697 62.794-64.861z"></path>
                            </svg>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>
<!-- java scripts -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script src="styles/js/plugins/CustomEase.min.js"></script>
<script src="styles/js/plugins/SplitText.min.js"></script>
<script src="styles/js/plugins/ScrollMagic.js"></script>
<script src="styles/js/methods.js"></script>
<script src="styles/js/app.js?v=1.0.1"></script>
<!-- end java scripts -->
</body>

</html>
