
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
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
    <script type="text/javascript" src="{{ asset('front/js/calc2.html') }}"></script>
    <script type="text/javascript" src="{{ asset('front/js/tinybox.js') }}"></script>
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
        $.ajax({
            type: "POST",
            async: false,
            url: "api/date.php",
            success: function(html){
                var res = html.match(/\d+/ig);
                dates = new Date(res[0], res[1]-1, res[2], res[3], res[4], res[5]);
            }
        });
        function digitalWatch() {
            var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
            var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            dates.setSeconds(dates.getSeconds() + 1);
            dayname = (weekday[dates.getDay()]);
            monthname = monthNames[dates.getMonth()];
            day = dates.getDate();
            month = dates.getMonth() + 1;
            year = dates.getFullYear();
            hours = dates.getHours();
            if(hours==0){ap=" AM";hours=12;}
            else if(hours
                <12){ap=" AM";}
            else if(hours==12){ap=" PM";}
            else if(hours>12){ap=" PM";hours-=12;}
            minutes = dates.getMinutes();
            seconds = dates.getSeconds();
            if (day < 10) day = "0" + day;
            if (month < 10) month = "0" + month;
            if (year < 10) year = "0" + year;
            if (hours < 10) hours = "0" + hours;
            if (minutes < 10) minutes = "0" + minutes;
            if (seconds < 10) seconds = "0" + seconds;
            //$("#date").text(day + "/" + month + "/" + year);
            $("#server_time").text(dayname + ", " + day + " , " + monthname + " " + hours + ":" + minutes + ap)
        }
        digitalWatch();
        setInterval(function(){ digitalWatch(); }, 1000);

    </script>
    <script type="text/javascript">
        function googleTranslateElementInit () {
            new google.translate.TranslateElement ({pageLanguage: "en", layout:
                    google.translate.TranslateElement.InlineLayout.VERTICAL},
                "google_translate_element");
        }
    </script>
    <script type="text/javascript"
            src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body topmargin="0">
<center>
    <div class="menubar animated bounceIn">
        <div class="topnav" id="myTopnav">
            <a href="{{ route('index') }}" class="active ">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="{{ route('about') }}">
                <i class="fas fa-info-circle"></i> About us
            </a>
            <!-- <a href="?a=news"><i class="far fa-newspaper"></i> News</a>-->
            <a href="{{ route('faq') }}">
                <i class="far fa-question-circle"></i> Faq
            </a>
            <a href="{{ route('rules') }}">
                <i class="far fa-file-alt"></i> Rules
            </a>
            <a href="{{ route('contact') }}">
                <i class="fas fa-headset"></i> Support
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>


    <script>
        $(function () {
            function getUrl(currency) {
                return "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,BCH,ETH,LTC,DASH,DOGE&tsyms=USD";
            }
            function updateRate() {
                $.get(getUrl("BTC"), function (data) {
                    $("#btc_rate").text(data.BTC.USD);
                    //$("#bitcoin_circle").text(data.USD);
                });
                $.get(getUrl("ETH"), function (data, status) {
                    $("#eth_rate").text(data.ETH.USD);
                });
                $.get(getUrl("LTC"), function (data, status) {
                    $("#ltc_rate").text(data.LTC.USD);
                });
                $.get(getUrl("BCH"), function (data, status) {
                    $("#bch_rate").text(data.BCH.USD);
                });
                $.get(getUrl("DASH"), function (data, status) {
                    $("#dash_rate").text(data.DASH.USD);
                });
                $.get(getUrl("DOGE"), function (data, status) {
                    $("#doge_rate").text(data.DOGE.USD);
                });
                var total_deposit =  '3.5906124999999998';
                /* total_deposit += parseFloat($("#eth_rate").text()) * parseFloat($("#ethereum_circle").text());
                  total_deposit += parseFloat($("#ltc_rate").text()) * parseFloat($("#lite_circle").text());*/

                $("#deposits_circle").text(total_deposit);

            }
            updateRate();
            setInterval(updateRate, 1000);

        });
    </script>

    @yield('content')

    <center>
        <div class="fcontent">
            <br>
            <div class="container" align="center">
                <div class="footerblock">
                    <a href="{{ route('index') }}">
{{--                        <h3>NordCaptals</h3>--}}
                        <img height="100" width="200" class="imgblock" src="{{ asset('logo.jpeg') }}">
                    </a>
                    <br>
                    <div class="fbltxt">By carrying out successful transactions on the cryptocurrency exchange, traders and investors have the opportunity to receive income that is characterized by stability and significance.</div>
                </div>
                <div class="footerblock">
                    <div class="ftit">Navigation</div>
                    <br>
                    <a class="flink" href="{{ route('index') }}">
                        <i class="fas fa-caret-right"></i> home
                    </a>
                    <a class="flink" href="{{ route('about') }}">
                        <i class="fas fa-caret-right"></i> About us
                    </a>
                    <a class="flink" href="{{ route('login') }}">
                        <i class="fas fa-caret-right"></i> Login
                    </a>
                    <a class="flink" href="{{ route('register') }}">
                        <i class="fas fa-caret-right"></i> Sign up
                    </a>
                    <a class="flink" href="{{ route('rules') }}">
                        <i class="fas fa-caret-right"></i> Rules
                    </a>
                    <a class="flink" href="{{ route('contact') }}">
                        <i class="fas fa-caret-right"></i> Support
                    </a>
                </div>
                <div class="footerblock">
                    <div class="ftit">CONTACT US</div>
                    <br>
                    <div class="fbltxt">
                        <i class="far fa-envelope"></i> support@nordcaptals.com

                    </div>
                    <div class="fbltxt">
                        <i class="fas fa-map-marker-alt"></i>Tverskaya st. 13 Moscow, Russia
                    </div>
                    <br>
                </div>
                <br>
                <br>
            </div>
            <div class="footercp">
                <div class="container" align="center">
                    <span class="">© Nordcaptals 2022. All rights reserved. </span>
                </div>
            </div>
        </div>
    </center>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'add60204bf47ff68c4db8575f467eb0e6c9a11a2';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script></body>
</html>
