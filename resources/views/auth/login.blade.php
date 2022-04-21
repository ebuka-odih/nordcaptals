<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <!-- /Added by HTTrack -->
    <!--StartofTawk.toScript-->
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-main.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script>
    <script src="https://embed.tawk.to/_s/v4/app/625d36b405c/js/twk-app.js" charset="UTF-8" crossorigin="*"></script>
    <!--End of Tawk.to Script-->
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Nordcaptals</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('front/js/viewportchecker.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.post').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 50
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post1').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated zoomIn', // Class to add to the elements when they are visible
                offset: 0
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post2').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 50
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post3').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 100
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post4').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 150
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post5').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 200
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post6').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 250
            });
        });

        jQuery(document).ready(function() {
            jQuery('.post7').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated bounceIn', // Class to add to the elements when they are visible
                offset: 300
            });
        });
        jQuery(document).ready(function() {
            jQuery('.post8').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
                offset: 100
            });
        });
        jQuery(document).ready(function() {
            jQuery('.post9').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
                offset: 100
            });
        });
    </script>
    <script type="text/javascript" src="{{ asset('front/js/calc.js') }}"></script>
    <link href="{{ asset('front/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/style.css') }}" rel="stylesheet" type="text/css">
    <link href="flaticon.html" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
    <script type="text/javascript">
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

        });
    </script>
</head>
<body class="loginpagebg animated fadeIn" topmargin="0">
<center>
    <div class="">
        <div class="container">
            <br>
            <br>
            <span class="logoicon">
                <a href="{{ route('index') }}">
                    <h3>NordCaptals</h3>
{{--                    <img src="images/logo.png" alt="">--}}
                    </a>
                </span>
            <br>
            <br>
            <div class="loginbox">
                <div class="loginblock2ss">
                    <div class="loginboxtit">Sign In</div>
                    <div class="container">
                        <div class="loginsize">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
                                <tbody>
                                <tr>
                                    <td class="forgotbg loginop" width="100%" valign="top">
                                        <div class="">
                                            <form method="POST" name="mainform" action="{{ route('login') }}">
                                               @csrf
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li style="color: red">{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <center>
                                                    <table cellspacing="0" cellpadding="2" border="0" width="100%">
                                                        <tbody>
                                                        <tr>
                                                            <td class="loginborder" colspan="2">
                                                                <div class="input-container">
                                                                    <i class="fa fa-user icon"></i>
                                                                    <input class="input-field" type="email" value="" placeholder="Email" name="email">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="loginborder" colspan="2">
                                                                <div class="input-container">
                                                                    <i class="fa fa-key icon"></i>
                                                                    <input class="input-field" type="password" placeholder="Password" value="" name="password">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="loginborder" colspan="2">
                                                                <center>
                                                                    <div class="forgotlinkbg ">
                                                                        @if (Route::has('password.request'))
                                                                            <a class="forgotlink" style="text-decoration: none" href="{{ route('password.request') }}" tabindex="7">
                                                                                <i class="fas fa-unlock-alt"></i> Forgot password?
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                    <div class="forgotlinkbg ">
                                                                        <a class="forgotlink" style="text-decoration: none" href="{{ route('register') }}">
                                                                            <i class="far fa-user"></i> Don't have an account?
                                                                        </a>
                                                                    </div>
                                                                </center>
                                                                <br>
                                                                <center>
                                                                    <input type="submit" value="Login" class="sbmt loginbtnsize">
                                                                </center>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </center>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <center>
        <span class="ftxt">© Nordcaptals 2021.All rights reserved.</span>
    </center>
</center>
<script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/625d36b405c/languages/en.js"></script>
</body>
</html>
