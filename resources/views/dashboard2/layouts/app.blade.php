
<!doctype html>
<html class="no-js" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="https://boomchart.net/bitmine"/>
    <title>{{ env('APP_NAME') }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Bitmine"/>
    <meta name="application-name" content="Bitmine"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="description" content="Nordcaptals platform is at your service with its user-friendly features, secure infrastructure and applications that make a difference." />
    <link rel="shortcut icon" href="{{ asset('front/asset/images/logo_1588143489.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('front/asset/images/logo_1588143489.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://boomchart.net/bitmine/asset/images/favicon_1582498359.jpg" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://boomchart.net/bitmine/asset/images/favicon_1582498359.jpg" />
{{--    <link rel="stylesheet" href="https://boomchart.net/bitmine/asset/css/sweetalert.css" type="text/css">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,600,700&display=swap">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/asset/dashboard/css/argon9f1e.css?v=1.1.0') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/asset/frontend/css/sweetalert.css') }}" type="text/css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}


</head>
<!-- header begin-->
<body>

<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-dark bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('index') }}">
                <h2 style="color: white; font-size: 18px; font-weight: bold">NordCaptals</h2>
{{--                <img src="{{ asset('assets/logo.png') }}" class="navbar-brand-img" alt="...">--}}
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.user_dashboard') }}">
                            <i class="ni ni-shop"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.user_deposits') }}">
                            <i class="ni ni-credit-card"></i>
                            <span class="nav-link-text">Deposit</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.user_withdrawal') }}">
                            <i class="ni ni-bag-17"></i>
                            <span class="nav-link-text">Withdraw</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.user_deposit_list') }}">
                            <i class="ni ni-chart-bar-32"></i>
                            <span class="nav-link-text">Transactions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.messages') }}">
                            <i class="ni ni-email-83"></i>
                            <span class="nav-link-text">Messages <span class="badge badge-warning">{{ auth()->user()->unread_msg() }}</span></span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('user.share.index') }}">--}}
{{--                            <i class="ni ni-send"></i>--}}
{{--                            <span class="nav-link-text">Share BTC</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">More</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://tawk.to/chat/61a15f8d9099530957f6d87d/1flf5qgr9">
                            <i class="ni ni-support-16"></i>
                            <span class="nav-link-text">Support</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.user_details') }}">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-text">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.security') }}">
                            <i class="ni ni-key-25"></i>
                            <span class="nav-link-text">Security</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.all_referrals') }}">
                            <i class="ni ni-compass-04"></i>
                            <span class="nav-link-text">Referral</span>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ni ni-button-power"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->


                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="">
                    <h6 class="h3 mb-0 text-dark">
                        {{ auth()->user()->btc_value(auth()->user()->acct_wallet) }} BTC
                    </h6>
                    <h6 class="h3 mb-0 text-dark">
                        {{ auth()->user()->acct_wallet }} USD
                    </h6>
                </div>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="javascript:void;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" src="https://boomchart.net/bitmine/asset/profile/1588117945_user.jpg">
                    </span>
                            </div>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links">
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    @yield('content')

    <!-- Start of boomchart Zendesk Widget script -->
{{--    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=28d95343-bf07-4815-b14d-1d2db9792ca3"> </script>--}}
    <!-- End of boomchart Zendesk Widget script -->
    <script src="{{ asset('front/asset/dashboard/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('front/asset/dashboard/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/js/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('front/asset/dashboard/vendor/clipboard/dist/clipboard.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.1.0') }}"></script>
{{--    <script src="https://boomchart.net/bitmine/asset/dashboard/js/argon.js?v=1.1.0"></script>--}}
    <!-- Demo JS - remove this in your project -->
    <script src="{{ asset('front/asset/dashboard/js/demo.min.js') }}"></script>
    <script src="{{ asset('front/asset/frontend/js/sweetalert.js') }}"></script>



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
    </script>

</body>

</html>

<script>
</script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#modal-notification').modal('show');
    });
</script>
