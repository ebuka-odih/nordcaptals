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
    <script async="" src="https://embed.tawk.to/6189a5946bb0760a4941b7f8/default" charset="UTF-8" crossorigin="*"></script>
    <script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/6189a5946bb0760a4941b7f8/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); </script>
    <!--End of Tawk.to Script-->
    <meta http-equiv="Content-Language" content="en-us">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Nordcaptals</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/viewportchecker.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('js/calc.js') }}"></script>
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
    <script>
        function clearText(theField)
        {
            if (theField.defaultValue == theField.value)
                theField.value = '';
        }

        function addText(theField)
        {
            if (theField.value == '')
                theField.value = theField .defaultValue;
        }
    </script>
</head>
<body class="loginpagebg animated fadeIn" topmargin="0">
<center>
    <div class="container">
        <br>
        <br>
        <span class="logoicon">
        <a href="{{ route('index') }}">
            <h3>NordCaptals</h3>
{{--            <img src="images/logo.png" alt="">--}}
            </a>
        </span>
        <br>
        <br>
    </div>

    <div class="logopage loginimg">
        <div class="container">
            <div class="regborderf">
                <div class="signboxtit">Create Account</div>
                <form method="post" action="{{ route('register') }}" name="regform">
                    @csrf
                    <input type="hidden" name="referred_by" value="{{ request()->id}}" />
                    <div class="regstepi">
                        <i class="fas fa-info-circle"></i> Personal Information:
                    </div>
                    <table width="100%" border="0">
                        <tbody>
                        <tr>
                            <td class="regbl editborder regbg">
                                <p>Your First Name:</p>
                            </td>
                            <td class="regbl editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-user-circle icon"></i>
                                    <input type="text" name="first_name" value="" class="inpts" size="30">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="regbl editborder regbg">
                                <p>Your Last Name:</p>
                            </td>
                            <td class="regbl editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-user-circle icon"></i>
                                    <input type="text" name="last_name" value="" class="inpts" size="30">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="regstepa">
                        <i class="far fa-user"></i> Account Information:
                    </div>
                    <table width="100%" border="0">
                        <tbody>
                        <tr>
                            <td class="regbl editborder regbg">
                                <p>Your Username:</p>
                            </td>
                            <td class="regbl editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="username" value="" class="inpts" size="30">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="regbl editborder partbg1 regbg">
                                <p>Your E-mail Address:</p>
                            </td>
                            <td class="regbl editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="email" name="email" value="" class="inpts" size="30">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="regbl editborder partbg1 regbg">
                                <p>Your Password:</p>
                            </td>
                            <td class="editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="password" value="" class="inpts keyboardInput inpts" size="30">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="regbl editborder regbg">
                                <p>Retype Your Password:</p>
                            </td>
                            <td class="regbl editborder editbg2">
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="password_confirmation" value="" class="inpts keyboardInput inpts" size="30">
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="0">
                        <tbody>
                        <tr>
                            <td class="regbl regterm">
                                <br>
                                <br>
                                <center>
                                    <div class="radiobox">
                                        <input type="radio" id="radio-1" name="agree" value="1" class="">
                                        <label for="radio-1" class="radio-label">I have read and agreed with
                                            <a href="{{ route('rules') }}">Terms and conditions</a>
                                        </label>
                                    </div>
                                </center>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <input type="submit" value="Create Account" class="sbmt">
                    <br>
                    <br>
                </form>
            </div>
            <br>
            <br>
        </div>
    </div>
    <br>
    <center>
        <span class="ftxt">© Nordcaptals 2021.All rights reserved.</span>
    </center>
    <br>
    <br>
    <br>
</center>
<script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/625d36b405c/languages/en.js"></script>
</body>
</html>
