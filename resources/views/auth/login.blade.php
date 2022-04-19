
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


</html>



<div class="container">
    <form action="{{ route('login') }}" method="POST">
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

        <div class="auth">
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


            <script language=javascript>
                function checkform() {
                    if (document.mainform.email.value == '') {
                        alert("Please type your email!");
                        document.mainform.email.focus();
                        return false;
                    }
                    if (document.mainform.password.value == '') {
                        alert("Please type your password!");
                        document.mainform.password.focus();
                        return false;
                    }
                    return true;
                }

            </script>


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
                        <span class="t">Access Account</span>
                    </h1>
                    <div class="form-group">
                        <div class="input-box2">
                            <div class="label">
                                <svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 10.25 14.68" id="user" width="100%" height="100%">
                                        <g clip-path="url(#a)">
                                            <path d="M7.94 3A3 3 0 1 1 5 0a3 3 0 0 1 3 3M1.89 8.94L.33 11.42a2.13 2.13 0 0 0 1.8 3.27h6a2.13 2.13 0 0 0 1.8-3.27L8.36 8.94a3.82 3.82 0 0 0-6.46 0"></path>
                                        </g>
                                    </svg>
                                </svg><span>Email</span>
                            </div>
                            <input data-role="input-box2" name="email" value='' maxlength="30" placeholder="Enter Email" type="text" class="form-control">
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
                            <input data-role="input-box2" name="password" placeholder="Enter Password" maxlength="30" type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-second btn-lg btn-block">Login</button>
                    </div>

                    <div class="mt-4">
                        <div class="forgot text-center">
                            Forgot your password? <a target="_blank" href="?a=forgot_password">Recover it now</a>
                        </div>
                    </div>
                </div>
                <div class="left order-0 float-left bw-flex-center ">
                    <div class="bb">
                        <h2>Don‘t have an account?</h2>
                        <p>
                            It's easy to create one!
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-white">
                            Create an account </a>
                    </div>
                </div>
            </div>
            <div class="footer">
                <nav class="float-right menu d-none d-md-block">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About Us</a>
                        </li>

                    </ul>
                </nav>
                <ul class="socials float-left">
                    <li>
                        <a target="_black" href="">
                            <svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 90 90" id="facebook" width="100%" height="100%">
                                    <path d="M90 15.001C90 7.119 82.884 0 75 0H15C7.116 0 0 7.119 0 15.001v59.998C0 82.881 7.116 90 15.001 90H45V56H34V41h11v-5.844C45 25.077 52.568 16 61.875 16H74v15H61.875C60.548 31 59 32.611 59 35.024V41h15v15H59v34h16c7.884 0 15-7.119 15-15.001V15.001z"></path>
                                </svg>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_black" href="">
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
    </form>
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
