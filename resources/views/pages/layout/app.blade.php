<!doctype html>
<html>
<!-- Mirrored from www.raceoption.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 15:31:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Samtrader - Binary Options and CFD Broker - Trading Platform </title>
    <meta name="description" content="Samtrade Binary Options and CFD Trading Platform
    ">
    <meta name="keywords" content="">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico.png" sizes="32x32" />
    <link rel="canonical" href="index.html" />
    <link rel="alternate" hreflang="x-default" href="index.html" />
    <link rel="alternate" hreflang="es" href="es.html" />
    <link rel="stylesheet" type="text/css" href="assets/css/min/app.min1095.css?v=1632420940" />
    <script async src='cdn-cgi/bm/cv/669835187/api.js'></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="4b3fb2fe-bca8-4cb2-b542-3175264b0e1a";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</head>

<body ng-app="app" class="body" ng-controller="Internal">
<div class="main-wrapper">
    <div ng-include="'/api/ag/chat'"></div>
    <header class="header">
        <div class="wrapper">
            <div class="header-wrap">
                <a href="{{ route('index') }}" class="logo">
                    <h3 class="text-white">Samtrader</h3>
{{--                    <img src="assets/css/img/main/logo.svg" alt="logo">--}}
                </a>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item"> <a href="javascript:;" class="nav__link drop">How to start?</a>
                            <ul class="hide-cont">
                                <li><a href="{{ route('register') }}">Open an account</a></li>
                                <li><a href="{{ route('account_types') }}">Account types</a></li>
                                <li><a href="{{ route('payment_method') }}">Payment options</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="nav__item"> <a href="javascript:;" class="nav__link drop">Trading platform</a>
                            <ul class="hide-cont">
                                <li><a href="{{ route('platform') }}">Platform</a></li>
                                <li><a href="{{ route('advantages') }}">Advantages</a></li>
                            </ul>
                        </li>
                        <li class="nav__item"> <a href="javascript:;" class="nav__link drop">Specials</a>
                            <ul class="hide-cont">
                                <li><a href="{{ route('contest') }}">Trading contest</a></li>
                                <li><a href="{{ route('referral') }}">Referrals</a></li>
                                <!--<li><a href="/en/giveaway" class="nav__link_giveaway" >Giveaway</a></li>-->
                            </ul>
                        </li>
                        <li class="nav__item"> <a href="{{ route('giveaway') }}" class="nav__link_giveaway">Giveaway</a> </li>
                    </ul>
                    <div class="nav__info">
{{--                        <div class="lang"> <a href="javascript:;" class="lang__link drop">EN</a>--}}
{{--                            <ul class="hide-cont">--}}
{{--                                <li> <a href="es.html" class="lng-drop-item">ES</a> </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="nav-btns"> <a href="{{ route('login') }}" class="btn btn_login">Login</a>
                            <a href="{{ route('register') }}" class="btn btn_accent">Register</a> </div>
                    </div>
                </nav>
                <a href="javascript:;" class="hamburger js-hamburger"> <span></span> <span></span> <span></span> </a>
            </div>
        </div>
    </header>

   @yield('content')

    <footer class="footer">
        <div class="wrapper">
            <div class="footer-wrap">
                <div class="footer-top">
                    <ul class="footer-top__list">
                        <li class="footer-top__item">
                            <div class="footer-title">ABOUT OUR COMPANY</div>
                            <ul class="footer-link-list">
                                <li><a href="{{ route('terms') }}">User Agreement</a></li>
                                <li><a href="{{ route('policies') }}">Confidentiality Policy</a></li>
{{--                                <li><a href="en/jobs.html">We are hiring</a></li>--}}
                                <li><a href="{{ route('contact') }}">Contacts</a></li>
{{--                                <li><a href="assets/docs/bonus_rules_raceoption.pdf">Bonus rules</a></li>--}}
{{--                                <li><a href="assets/docs/risk_statement.pdf">Risk statement</a></li>--}}
                            </ul>
                        </li>
                        <li class="footer-top__item">
                            <div class="footer-title">TRADING PLATFORM</div>
                            <ul class="footer-link-list">
                                <li><a href="{{ route('platform') }}">Platform features</a></li>
                                <li><a href="{{ route('trading_assets') }}">Trading Assets</a></li>
                            </ul>
                        </li>
                        <li class="footer-top__item">
                            <div class="footer-title">ADVANTAGES</div>
                            <ul class="footer-link-list">
                                <li><a href="{{ route('advantages') }}">Advantages</a></li>
                                <li><a href="{{ route('contest') }}">Trading contest</a></li>
                            </ul>
                        </li>
                        <li class="footer-top__item">
                            <div class="footer-title">HOW TO START?</div>
                            <ul class="footer-link-list">
                                <li><a href="{{ route('register') }}">Open an Account</a></li>
                                <li><a href="{{ route('account_types') }}">Account types</a></li>
                                <li><a href="{{ route('payment_method') }}">Payment options</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="footer-top__item">
                            <div class="footer-title footer-title_soc">FOLLOW/CHAT US ON</div>
                            <ul class="footer-soc-list">
                                <li><a href="https://www.instagram.com/sam_trader__" target="_blank"><span class="icon-instagram"></span></a></li>
                                <li><a href="https://twitter.com/raceoptioncom" target="_blank"><span class="icon-whatsapp"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <div class="footer-bottom__top">
                        <div class="footer-text"> <span>Disclaimer:</span>
                            <br> When trading CFD as with any financial assets, there is a possibility that you may sustain a partial or total loss of your investment funds when trading. As a result, it is expressly advised that you should never invest with, or trade upon, money which you cannot afford to lose through this manner of trading. Raceoption provides no guarantees of profit nor of avoiding losses when trading.
                            <br> The Website and Content may be available in multiple languages. The English version is the original version and the only one binding on Raceoption; it shall prevail on any other version in case of discrepancy. Raceoption shall not be responsible for any erroneous, inadequate, or misleading translations from the original version into other languages. Raceoption nor its agents or partners are not registered and do not provide any services on the USA territory.</div>
                    </div>
                    <div class="footer-bottom__down">
                        <div class="footer-copy"><span data-company></span>. <span data-company-address></span>. All rights reserved</div>
                        <div class="footer-pics">
                            <div class="footer-pic"><img src="assets/css/img/main/footer-pic-1.png" alt="footer"></div>
                            <div class="footer-pic"><img src="assets/css/img/main/footer-pic-2.png" alt="footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="assets/js/min/vendor.min1095.js?v=1632420940"></script>
<script src="assets/js/min/app.min1095.js?v=1632420940"></script>
<script type="text/javascript">
    (function() {
        window.Cc = new Tron('eyJ0cmFkZXJzIjp7ImRhdGUiOiIxNS4xMi4yMDIxIiwidHJhZGVycyI6MTg5MCwiZWFybmVkIjoxOTk3NDEyLCJhdmVyYWdlIjoxMDU3LCJ3aXRoZHJhd2FsIjozNX0sIkdFTyI6Ik5HIiwiSVAiOiIxOTcuMjEwLjIyNy4zIiwiREFURSI6IjE1LjEyLjIwMjEiLCJEQVkiOjMsIkhPVVIiOjE1LCJJTlBVVCI6W10sIklOUFVUX0xPQ0FMIjpbXSwiU0VTU0lPTiI6W10sIkRBVEVfTE9DQUwiOiJEZWNlbWJlciAyMDIxIiwiVFJZIjoxfQ==', 1);
        window.Lang = new Tron('eyJzaWciOiJlbiIsImF1dGgiOnsibG9naW5fZXJyb3IiOiJJbnZhbGlkIHVzZXJuYW1lIG9yIHBhc3N3b3JkIiwic2VydmVyX2Vycm9yIjoiU29ycnkgc2VydmljZSBpcyB0ZW1wb3JhcmlseSB1bmF2YWlsYWJsZSJ9LCJyZWdpc3RlciI6eyJ0aXRsZSI6Ik9wZW4gYW4gYWNjb3VudCIsImNob3NlIjoiU2VsZWN0IENvdW50cnkiLCJuYW1lIjoiTmFtZSIsInN1cm5hbWUiOiJTdXJuYW1lIiwiY291bnRyeSI6IkNvdW50cnkiLCJlbWFpbCI6IkVtYWlsIChsb2dpbikiLCJwYXNzd29yZCI6IlBhc3N3b3JkIiwicHJvbW8iOiJQcm9tbyBjb2RlIChvcHRpb25hbCkiLCJwaG9uZSI6IlBob25lIG51bWJlciIsInBob25lX2NvZGUiOiJDb2RlIiwibmV4dCI6Ik5leHQiLCJjdXJyZW5jeSI6IkFjY291bnQgY3VycmVuY3kiLCJ0ZXJtcyI6IkkgaGF2ZSByZWFkIGFuZCBhZ3JlZSB0byA8YSBocmVmPVwiXC9lblwvdGVybXNcIiB0YXJnZXQ9XCJfYmxhbmtcIj50aGUgVGVybXM8XC9hPiAgYW5kIDxhIGhyZWY9XCJcL2Fzc2V0c1wvZG9jc1wvcmlza19zdGF0ZW1lbnQuZG9jeFwiIHRhcmdldD1cIl9ibGFua1wiPlJpc2sgc3RhdGVtZW50PFwvYT4iLCJoYXZlX3Byb21vIjoiSGF2ZSBhIHByb21vIGNvZGU/IiwiZW1haWxBbHJlYWR5RXhpc3RzIjoiVGhpcyBlbWFpbCBhZGRyZXNzIGFscmVhZHkgZXhpc3RzIiwiZW1haWxOb3RWYWxpZCI6IkVtYWlsIEFkZHJlc3MgaXMgbm90IHZhbGlkIiwicGhvbmVOb3RWYWxpZCI6IkludmFsaWQgUGhvbmUgTnVtYmVyIn0sImhpc3RvcnkiOnsic3RhcnQiOiJTdGFydCBkYXRlIiwiZW5kIjoiRW5kIGRhdGUiLCJkZXBvc2l0IjoiRnVuZGluZyIsIndpdGhkcmF3YWwiOiJXaXRoZHJhd2FsIiwiYWxsIjoiQWxsIiwidGFibGUiOnsiaWQiOiJJRCIsImRhdGUiOiJEYXRlIiwidHlwZSI6IlR5cGUiLCJzdGF0dXMiOiJTdGF0dXMiLCJtZXRob2QiOiJNZXRob2QiLCJhbW91bnQiOiJBbW91bnQiLCJlbXB0eV9zZXJ2ZXIiOiJObyBkYXRhLiJ9fSwicnVuIjp7InRpdGxlIjoiTGFzdCBiaWRzOiJ9LCJyZXBvcnRzIjp7ImRhdGUiOiJEYXRlIiwiZGF0ZV9mcm9tIjoiRGF0ZSBmcm9tIiwiZGF0ZV90byI6IlRvIiwiZW1wdHlfc2VydmVyIjoiTm8gZGF0YSIsInBvc2l0aW9uIjoiUG9zaXRpb24iLCJjYWxsIjoiQ2FsbCIsInB1dCI6IlB1dCIsInJlc3VsdCI6IlJlc3VsdCIsInJlc3VsdF9zdGF0ZSI6eyJvcGVuIjoiT3BlbiIsIndvbiI6IldvbiIsImxvc3QiOiJMb3N0IiwidGllIjoiVGllIiwiYWxsIjoiQWxsIn0sInRhYmxlIjp7ImlkIjoiSUQiLCJhY3RpdmUiOiJBc3NldCIsImNhbGwiOiJDYWxsXC9QdXQiLCJyZXN1bHQiOiJSZXN1bHQgb2YgdGhlIGJpZCIsImRhdGUiOiJTdGFydCBUaW1lIiwiZXhwaXJlIjoiRW5kIHRpbWUiLCJpbnZlc3QiOiJJbnZlc3RtZW50IiwicGF5b3V0IjoiUGF5b3V0Iiwib3Blbl9wcmljZSI6Ik9wZW4gcHJpY2UiLCJjbG9zZV9wcmljZSI6IkNsb3NlIHByaWNlIn0sInNlbGVjdCI6eyJzdGF0dXMiOiJTdGF0dXMiLCJhbGwiOiJBbGwiLCJvcGVuIjoiT3BlbiIsImNsb3NlZCI6IkNsb3NlZCJ9fSwic2VjdXJpdHkiOnsib2xkIjoiQ3VycmVudCBwYXNzd29yZCIsInBhc3N3b3JkIjoiTmV3IHBhc3N3b3JkIiwicmVwZWF0IjoiQ29uZmlybSBuZXcgcGFzc3dvcmQiLCJzYXZlIjoiU2F2ZSIsIm5vdF9tYXRjaCI6IkVudGVyZWQgYW4gaW5jb3JyZWN0IG9sZCBwYXNzd29yZCIsInN1Y2Nlc3MiOiJJbmZvcm1hdGlvbiBoYXMgYmVlbiBzdWNjZXNzZnVsbHkgdXBkYXRlZCJ9LCJtZXNzYWdlcyI6eyI1MDAiOiJBIHNlcnZlciBlcnJvciBvY2N1cnJlZCwgcGxlYXNlIHRyeSBhZ2FpbiBsYXRlciIsIm5vdF9hdXRoIjoiTmVlZCBhdXRob3JpemF0aW9uIn0sInBhc3N3b3JkX3Jlc2V0Ijp7Im1lc3NhZ2UiOnsiZXJyb3IiOiJDYW4ndCBmaW5kIHRoYXQgZW1haWwsIHNvcnJ5LiJ9LCJyZXNldCI6eyJzdWNjZXNzIjoiTmV3IHBhc3N3b3JkIHdhcyBzZW50IHRvIHlvdXIgZW1haWwuUGxlYXNlIDxhIGhyZWY9XCJcLzpsYW5nXC9sb2dpblwiPmxvZ2luPFwvYT4uIiwiZXJyb3IiOiJVbnN1Y2Nlc3NmdWxseS4gVHJ5IHJlc2V0dGluZyB5b3VyIHBhc3N3b3JkIDxhIGhyZWY9XCJcLzpsYW5nXC9mb3JnZXRcIj5hZ2Fpbi48XC9hPiIsInVuYXZhaWxhYmxlIjoiU29ycnkgc2VydmljZSBpcyB0ZW1wb3JhcmlseSB1bmF2YWlsYWJsZSJ9LCJzdWJqZWN0Ijp7ImZvcmdvdCI6IlBhc3N3b3JkIHJlc2V0In19LCJpbmZvIjp7Im5hbWUiOiJOYW1lIiwic3VybmFtZSI6IlN1cm5hbWUiLCJlbWFpbCI6IkUtbWFpbCIsInBob25lIjoiUGhvbmUgbnVtYmVyIiwiY3VycmVuY3kiOiJDdXJyZW5jeSIsInNhdmUiOiJTYXZlIiwic3VjY2VzcyI6IkluZm9ybWF0aW9uIGhhcyBiZWVuIHN1Y2Nlc3NmdWxseSB1cGRhdGVkIiwiYWNjX2RhdGEiOiJBY2NvdW50IGRhdGEiLCJhY2NfdmVyIjoiQWNjb3VudCB2ZXJpZmljYXRpb24iLCJwYXNzcG9ydCI6IkNvcHkgb2YgcGFzc3BvcnQgKCBQbGVhc2UgdXBsb2FkIGEgcGFzc3BvcnQgaW4gYSBmdWxsIGxheW91dCwgd2l0aCBib3JkZXJzIGNsZWFybHkgdmlzaWJsZSApIiwic2lnbiI6IlNpZ24gdGhlIGFncmVlbWVudCIsInNpZ25fc2lnbiI6IlNpZ25lZCIsImNhcmQiOiJDb3B5IG9mIGNyZWRpdCBjYXJkOiIsImNhcmRfbGFzdCI6Ikxhc3QgNCBkaWdpdHMgbXVzdCBiZSBzZWVuIiwiY2FyZF9leCI6ImV4YW1wbGUiLCJiaWxsIjoiQ29weSBvZiB1dGlsaXR5IGJpbGwgKG5vdCBvbGRlciB0aGFuIDMgbW9udGhzKSIsInVwbG9hZF9idG4iOiJVcGxvYWQgZmlsZSBbIFBERiwgUE5HLCBKUEcsIEpQRUcgXSBtYXggMTBNYiIsImJyb3dzZSI6IkJyb3dzZSBmaWxlIGZvciB1cGxvYWQiLCJ1cGxvYWRfc3RhdHVzX3VwbG9hZCI6IlVwbG9hZGVkIiwidXBsb2FkX3N0YXR1c19mYWlsIjoiRmFpbGVkIiwidmVyX3N0YXR1cyI6IkFjY291bnQgdmVyaWZpY2F0aW9uIHN0YXR1czoiLCJ2ZXJfc3RhdHVzX25vdCI6Ik5vdCBWZXJpZmllZCIsInZlcl9zdGF0dXNfeWVzIjoiVmVyaWZpZWQiLCJ2ZXJfc3RhdHVzX2hhbGYiOiJQYXJ0aWFsIiwidmVyX2luZm8iOiJBY2NvdW50IHZlcmlmaWNhdGlvbiB1c3VhbGx5IHRha2VzIDEtMiB3b3JraW5nIGRheXMiLCJub3RfbG9hZF9wcyI6IkNvcHkgb2YgcGFzc3BvcnQgbm90IGxvYWRlZCIsImxvYWRfcHMiOiJTaG93IGNvcHkgb2YgcGFzc3BvcnQiLCJub3RfbG9hZF9zZyI6IkFncmVlbWVudCBub3Qgc2lnbmVkIiwibG9hZF9zZyI6IlNob3cgZG9jdW1lbnQiLCJub3RfbG9hZF9jYXJkIjoiQ29weSBvZiBjcmVkaXQgY2FyZCBub3QgbG9hZGVkIiwibG9hZF9jYXJkIjoiU2hvdyBjb3B5IG9mIGNyZWRpdCBjYXJkIiwic2lnbl9hYm92ZSI6IlNpZ24gYWJvdmUiLCJzaWduX2Nsb3NlIjoiQ2xvc2UiLCJzaWduX2NsZWFyIjoiQ2xlYXIiLCJzaWduX3NhdmUiOiJTYXZlIiwibm90X2xvYWQiOiJOb3QgbG9hZGVkIiwibG9hZGVkIjoiTG9hZGVkIiwic3RhdHVzX2JhZCI6Ik5vdCBWZXJpZmllZCIsInN0YXR1c19vayI6IlZlcmlmaWVkIiwibm9fZGF0YSI6Ik5vIGRhdGEiLCJjYXJkX3Nob3ciOiJzaG93IiwiY2FyZF9sb2FkaW5nIjoiTG9hZGluZy4uLiIsInR5cGVfY2hvc2UiOiJDaG9vc2UgeW91ciBJRCB0eXBlIiwib3B0aW9uX3BlcnNvbmFsX2lkIjoiUGVyc29uYWwgSUQiLCJvcHRpb25fcGFzc3BvcnQiOiJQYXNzcG9ydCIsIm9wdGlvbl9kcml2ZXJzIjoiRHJpdmVyXHUyMDE5cyBsaWNlbnNlIiwicGVyc29uYWxfaWQiOiJDb3B5IG9mIFBlcnNvbmFsIElEICggUGxlYXNlIHVwbG9hZCBhIFBlcnNvbmFsIElEIGluIGEgZnVsbCBsYXlvdXQsIHdpdGggYm9yZGVycyBjbGVhcmx5IHZpc2libGUgKSIsImRyaXZlcnMiOiJDb3B5IG9mIERyaXZlclx1MjAxOXMgbGljZW5zZSAoIFBsZWFzZSB1cGxvYWQgYSBEcml2ZXJcdTIwMTlzIGxpY2Vuc2UgaW4gYSBmdWxsIGxheW91dCwgd2l0aCBib3JkZXJzIGNsZWFybHkgdmlzaWJsZSApIiwiZnJvbnRfc2lkZSI6IkZyb250IHNpZGUiLCJiYWNrX3NpZGUiOiJCYWNrIHNpZGUifSwid2QiOnsiYWRkIjoiSSBoYXZlIHswfSBhY2NvdW50IiwibmV4dCI6Ik5leHQiLCJhbW91bnQiOiJXaXRoZHJhd2FsIGFtb3VudDogIiwibm90ZSI6IjxiPlBsZWFzZSBub3RlOjxcL2I+IGJlZm9yZSBhY2NlcHRpbmcgYSB3aXRoZHJhd2FsIHJlcXVlc3QsIHJhY2VvcHRpb24gbWF5IHJlcXVlc3QgYSBwcm9vZiBvZiBpZGVudGl0eSBhbmQgYWRkcmVzcyBvZiB0aGUgcmVxdWVzdGVyLiBXaXRoZHJhd2FsIGZlZXMgd2lsbCBiZSBhcHBsaWVkLCBiYXNlZCBvbiB0eXBlIG9mIHRyYWRpbmcgYWNjb3VudCBhbmQgYWNjZXB0YWJsZSB3aXRoZHJhd2FsIG1ldGhvZC4gV2l0aGRyYXdhbHMgYXJlIG5vcm1hbHkgcHJvY2Vzc2VkLCB1c2luZyB0aGUgc2FtZSBtZXRob2QgYXMgZGVwb3NpdCB3YXMgZG9uZS4gRm9yIHNlY3VyaXR5IHJlYXNvbnMsIHJhY2VvcHRpb24gZG9lc24ndCBwcm9jZXNzIHdpdGhkcmF3YWwgcmVxdWVzdHMgdG8gZXdhbGxldHMsIGJhbmsgYW5kIGNyZWRpdGNhcmQgYWNjb3VudHMsIG5vdCBiZWxvbmdpbmcgdG8gYSB0cmFkaW5nIGFjY291bnQgb3duZXIuIFBsZWFzZSByZWZlciB0byB0ZXJtcyBhbmQgY29uZGl0aW9ucyBmb3IgbW9yZSBpbmZvcm1hdGlvbi4iLCJjcmVkaXRfY2FyZCI6IlBsZWFzZSB0YWtlIG5vdGUgdGhhdCBjYXJkIHdpdGhkcmF3YWxzIG1heSBiZSBkZWxheWVkIGR1ZSB0byBiYW5rcycgc2xvdyBwcm9jZXNzaW5nIHRpbWUuIFRvIHdpdGhkcmF3IGZhc3RlciBhbmQgd2l0aCAwIGNvbW1pc3Npb24gaXQncyBwcmVmZXJyZWQgdG8gb3BlbiBiaXRjb2luIGFjY291bnQuIDxicj5UbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIGNhcmQsIHBsZWFzZSBtYWtlIGF0IGxlYXN0IG9uZSB0cmFkaW5nIGRlcG9zaXQgYnkgdXNpbmcgc2VsZWN0ZWQgbWV0aG9kLiIsInBheXBhbCI6IlRvIHJlcXVlc3QgZm9yIHdpdGhkcmF3YWwgdG8gPGI+UGF5UGFsPFwvYj4sIHBsZWFzZSBtYWtlIGF0IGxlYXN0IG9uZSB0cmFkaW5nIGRlcG9zaXQgYnkgdXNpbmcgc2VsZWN0ZWQgbWV0aG9kLiIsInFpd2kiOiJUbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIDxiPlFpd2kgd2FsbGV0PFwvYj4sIHBsZWFzZSBtYWtlIGF0IGxlYXN0IG9uZSB0cmFkaW5nIGRlcG9zaXQgYnkgdXNpbmcgc2VsZWN0ZWQgbWV0aG9kLiIsIndlYm1vbmV5IjoiVG8gcmVxdWVzdCBmb3Igd2l0aGRyYXdhbCB0byA8Yj5XZWJtb25leTxcL2I+LCBwbGVhc2UgbWFrZSBhdCBsZWFzdCBvbmUgdHJhZGluZyBkZXBvc2l0IGJ5IHVzaW5nIHNlbGVjdGVkIG1ldGhvZC4iLCJza3JpbGwiOiJUbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIDxiPlNrcmlsbDxcL2I+LCBwbGVhc2UgbWFrZSBhdCBsZWFzdCBvbmUgdHJhZGluZyBkZXBvc2l0IGJ5IHVzaW5nIHNlbGVjdGVkIG1ldGhvZC4iLCJva19wYXkiOiJUbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIDxiPk9rIFBheTxcL2I+LCBwbGVhc2UgbWFrZSBhdCBsZWFzdCBvbmUgdHJhZGluZyBkZXBvc2l0IGJ5IHVzaW5nIHNlbGVjdGVkIG1ldGhvZC4iLCJwZXJmZWN0IjoiVG8gcmVxdWVzdCBmb3Igd2l0aGRyYXdhbCB0byA8Yj5QZXJmZWN0IE1vbmV5PFwvYj4sIHBsZWFzZSBtYWtlIGF0IGxlYXN0IG9uZSB0cmFkaW5nIGRlcG9zaXQgYnkgdXNpbmcgc2VsZWN0ZWQgbWV0aG9kLiIsImJhbmsiOiJUbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIDxiPkJhbmsgVHJhbnNmZXI8XC9iPiwgcGxlYXNlIG1ha2UgYXQgbGVhc3Qgb25lIHRyYWRpbmcgZGVwb3NpdCBieSB1c2luZyBzZWxlY3RlZCBtZXRob2QuIiwibmV0ZWxsZXIiOiJUbyByZXF1ZXN0IGZvciB3aXRoZHJhd2FsIHRvIDxiPk5ldGVsbGVyPFwvYj4sIHBsZWFzZSBtYWtlIGF0IGxlYXN0IG9uZSB0cmFkaW5nIGRlcG9zaXQgYnkgdXNpbmcgc2VsZWN0ZWQgbWV0aG9kLiIsImJpdGNvaW4iOiJCaXRjb2luIGlzIHJlY29tbWVuZGVkIHdpdGhkcmF3YWwgbWV0aG9kLiBJdCBwcm92aWRlcyA8Yj5mYXN0ZXN0IHdpdGhkcmF3YWwgd2l0aCAwIGNvbW1pc3Npb248XC9iPi4gVG8gcmVxdWVzdCBmb3Igd2l0aGRyYXdhbCB0byBiaXRjb2luLCBwbGVhc2UgY29uZmlybSB5b3UgaGF2ZSBiaXRjb2luIGFjY291bnQgb3IgY3JlYXRlIGl0LiIsImltcG9ydGFudCI6IjxiPkltcG9ydGFudDo8XC9iPiBDaG9zZW4gd2l0aGRyYXdhbCBtZXRob2Qgc2hvdWxkIGNvcnJlc3BvbmQgdG8gbWV0aG9kIHVzZWQgZm9yIGRlcG9zaXQuIiwic3VjY2VzcyI6IllvdXIgcmVxdWVzdCB3YXMgc3VjY2Vzc2Z1bGx5IHN1Ym1pdHRlZC4gT3VyIGNsaWVudHMgc3VwcG9ydCB0ZWFtIHdpbGwgdHJlYXQgeW91ciByZXF1ZXN0IHdpdGhpbiAxIGhvdXIgYW5kIHdpbGwgY29tZSBiYWNrIHRvIHlvdSB3aXRoIGEgcmVzb2x1dGlvbi4ifSwiZnVuZGluZyI6eyJib251c19jb25maXJtIjp7InRpdGxlIjoiV2l0aGRyYXdhbCIsImJ0bl9vayI6IkkgY29uZmlybSIsImJ0bl9jYW5jZWwiOiJObywgdGhhbmtzIiwiaW5zdWZmaWNpZW50X3R1cm5vdmVyIjoiSW5zdWZmaWNpZW50IHR1cm5vdmVyLiBQbGVhc2UgZnVuZCB5b3VyIGFjY291bnQgb3IgaW5jcmVhc2UgYSB0dXJub3ZlciB3aXRoIGN1cnJlbnQgYmFsYW5jZSIsInlvdV9jYW5fZ2V0X2JvbnVzIjoiPHN0cm9uZz5JbXBvcnRhbnQhPFwvc3Ryb25nPiBZb3UgY2FuIGdldCBhbiBleHRyYSA1MCUgYm9udXMgZm9yIHJlcXVlc3RlZCBhbW91bnQsPGJyPiBzbyB0aGUgdG90YWwgYW1vdW50IHdpbGwgYmUgZXF1YWwgdG8gOnN1bW0gOmN1cnJlbmN5IiwiY29uZ3JhdHVsYXRpb25zIjoiQ29uZ3JhdHVsYXRpb25zISBZb3UgZ290IDpib251cyBib251cyB0byB5b3VyIGFjY291bnQuIiwibmVlZF9tb3JlX2dvbGQiOiJ3aXRoZHJhd2FsIGFtb3VudCBleGNlZWRzIHlvdXIgYmFsYW5jZSJ9LCJ0YWIiOnsibWFpbiI6eyJ0aXRsZSI6IlRyYWRpbmcgYWNjb3VudCIsInN1YiI6IkRyYWcgdGhlIHNsaWRlciB0byBjaG9vc2UgYWNjb3VudCB0eXBlIGFuZCBkZXBvc2l0IGFtb3VudCIsImZlYXR1cmVfdGl0bGUiOiJHb2xkIGFjY291bnQgZmVhdHVyZXM6IiwiZmVhdHVyZV90aXRsZV9nb2xkIjoiR29sZCBhY2NvdW50IGZlYXR1cmVzOiIsImZlYXR1cmVfdGl0bGVfc2lsdmVyIjoiU2lsdmVyIGFjY291bnQgZmVhdHVyZXM6IiwiZmVhdHVyZV90aXRsZV9icm9uemUiOiJCcm9uemUgYWNjb3VudCBmZWF0dXJlczoiLCJmZWF0dXJlIjpbIldpdGhkcmF3YWxzIGluIDEgaG91ciIsIkRlbW8gYWNjb3VudCIsIk1hc3RlciBjbGFzcyAod2ViIHNlc3Npb24pIiwiVHJhZGluZyBjb3Vyc2UgKGJvb2sgYW5kIHZpZGVvKSIsIkluZGl2aWR1YWwgYWNjb3VudCBtYW5hZ2VyIl0sImRlcG9zaXQiOiJZb3VyIGRlcG9zaXQiLCJ0b3RhbCI6IlRvdGFsIHRyYWRpbmcgZGVwb3NpdCIsImJvbnVzIjoiQm9udXMiLCJyZWFkIjoiSSByZWFkIGFuZCBhZ3JlZSB3aXRoIGJvbnVzIHBvbGljeSIsInByb21vIjoiSGF2ZSBhIFByb21vIENvZGU/IiwiZ29sZCI6WyIyNFwvNyBMaXZlIHZpZGVvIGNoYXQiLCJXaXRoZHJhd2FscyBpbiAxIGhvdXIiLCJCb251cyArMTAwJSIsIkRlbW8gYWNjb3VudCIsIkNvcHkgVHJhZGluZyB0b29sIiwiSW50ZWdyYXRlZCB0ZWNobmljYWwgYW5hbHlzaXMiLCJNYXN0ZXIgY2xhc3MgKHdlYiBzZXNzaW9uKSIsIkluZGl2aWR1YWwgYWNjb3VudCBtYW5hZ2VyIl0sInNpbHZlciI6WyIyNFwvNyBMaXZlIHZpZGVvIGNoYXQiLCJXaXRoZHJhd2FscyBpbiAxIGhvdXIiLCJCb251cyArNTAlIiwiRGVtbyBhY2NvdW50IiwiQ29weSBUcmFkaW5nIHRvb2wiLCJNYXN0ZXIgY2xhc3MgKHdlYiBzZXNzaW9uKSIsIkluZGl2aWR1YWwgYWNjb3VudCBtYW5hZ2VyIl0sImJyb256ZSI6WyIyNFwvNyBMaXZlIHZpZGVvIGNoYXQiLCJXaXRoZHJhd2FscyBpbiAxIGhvdXIiLCJCb251cyArMjAlIiwiRGVtbyBhY2NvdW50IiwiQ29weSBUcmFkaW5nIHRvb2wiXX0sImZpeGVkIjp7InRpdGxlIjoiRml4ZWQgaW5jb21lIGFjY291bnQiLCJzdWIiOiJEcmFnIHRoZSBzbGlkZXIgdG8gY2hvb3NlIGRlcG9zaXQgYW1vdW50IiwiZmVhdHVyZV90aXRsZSI6IkZpeGVkIGluY29tZSBhY2NvdW50IGZlYXR1cmVzOiIsImZlYXR1cmUiOlsiSW5jb21lIDEwJVwvbW9udGgiLCJDYXBpdGFsIHJldHVybiBndWFyYW50ZWVkISIsIldpdGhkcmF3IGludmVzdGVkIGNhcGl0YWwgYW55IHRpbWUhIl0sImRlcG9zaXQiOiJFbnRlciBkZXBvc2l0IGFtb3VudCJ9fSwibWV0aG9kcyI6IkNob29zZSBmdW5kaW5nIG1ldGhvZCIsImZvcm1fdGl0bGUiOnsiY2FyZCI6IkRlcG9zaXQgdXNpbmcgVmlzYVwvTWFzdGVyY2FyZFwvTWFlc3RybzoiLCJwYXlwYWwiOiJEZXBvc2l0IHVzaW5nIFBheVBhbDoiLCJxaXdpIjoiRGVwb3NpdCB1c2luZyBRaXdpIFdhbGxldDoiLCJ3ZWJtb25leSI6IkRlcG9zaXQgdXNpbmcgV2ViTW9uZXk6Iiwib2tfcGF5IjoiRGVwb3NpdCB1c2luZyBPayBQQVkiLCJwZXJmZWN0IjoiRGVwb3NpdCB1c2luZyBQZXJmZWN0IE1vbmV5OiIsImJhbmsiOiJEZXBvc2l0IHVzaW5nIEJBTksgVHJhbnNmZXI6IiwibmV0ZWxsZXIiOiJEZXBvc2l0IHVzaW5nIE5ldGVsbGVyOiIsImJpdGNvaW4iOiJEZXBvc2l0IHVzaW5nIEJpdGNvaW46IiwibGl0ZWNvaW4iOiJEZXBvc2l0IHVzaW5nIEFsdGNvaW5zOiIsImV0aCI6IkRlcG9zaXQgdXNpbmcgRXRoZXJldW06Iiwic2tyaWxsIjoiRGVwb3NpdCB1c2luZyBTa3JpbGw6In0sImZyb21fbW9iaWxlIjp7ImNhcmQiOiJWaXNhXC9NYXN0ZXJjYXJkXC9NYWVzdHJvIiwicGF5cGFsIjoiUGF5UGFsIiwicWl3aSI6IiBRaXdpIFdhbGxldCIsIndlYm1vbmV5IjoiV2ViTW9uZXkiLCJva19wYXkiOiJPayBQQVkiLCJwZXJmZWN0IjoiUGVyZmVjdCBNb25leToiLCJiYW5rIjoiQkFOSyBUcmFuc2ZlciIsIm5ldGVsbGVyIjoiTmV0ZWxsZXIiLCJiaXRjb2luIjoiQml0Y29pbiIsInNrcmlsbCI6IlNrcmlsbCJ9LCJwYXlwYWwiOnsiYnRuIjoiRnVuZCB0aGUgYWNjb3VudCIsInRleHQiOiJUbyBtYWtlIGFjY291bnQgZGVwb3NpdCBieSBQYXlQYWwsIHBsZWFzZSB1c2UgdGhlc2UgZGV0YWlsczoiLCJhY2NvdW50IjoiQWNjb3VudCBpZDogIiwiYW1vdW50IjoiQW1vdW50IGluIGJhc2UgY3VycmVuY3k6IiwiZGV0YWlscyI6IlBsZWFzZSBzcGVjaWZ5IGluIHRyYW5zZmVyIGRldGFpbHM6In0sIm5ldGVsbGVyIjp7ImFjYyI6Ik5ldGVsbGVyIElEOiIsInNlY3VyZSI6IlNlY3VyZSBjb2RlOiIsImFtb3VudCI6IkFtb3VudDoiLCJwYXkiOiJGdW5kIHlvdXIgYWNjb3VudCJ9LCJxaXdpIjp7ImN1cnJlbmN5IjoiQ3VycmVuY3k6IiwiYW1vdW50IjoiQW1vdW50IFJVQiAoIDE1MDAwIGxpbWl0IG9uZSB0cmFuc2FjdGlvbik6IiwiYnRuIjoiRnVuZCB0aGUgYWNjb3VudCJ9LCJ3ZWJtb25leSI6eyJidG4iOiJGdW5kIHRoZSBhY2NvdW50IiwidGV4dCI6IlBsZWFzZSBhY2Nlc3MgeW91ciBXZWJtb25leSB3YWxsZXQgYW5kIG1ha2UgYSB0cmFuc2ZlciB0byB0aGUgZm9sbG93aW5nIGFjY291bnQ6IiwiYWNjb3VudCI6IkFjY291bnQ6IiwiYW1vdW50IjoiQW1vdW50OiIsImRldGFpbHMiOiJUcmFuc2FjdGlvbiBkZXRhaWxzOiIsImRldGFpbHNfbW9yZSI6IkRvbid0IGZvcmdldCB0byBzdWJtaXQgY29ycmVjdCB0cmFuc2FjdGlvbiBkZXRhaWxzISJ9LCJva3BheSI6eyJlbWFpbCI6IkVtYWlsOiIsImJ0biI6IkZ1bmQgdGhlIGFjY291bnQifSwicGVyZmVjdCI6eyJlbWFpbCI6IkVtYWlsOiIsImFtb3VudCI6IkFtb3VudCBpbiBiYXNlIGN1cnJlbmN5IiwiYnRuIjoiRnVuZCB0aGUgYWNjb3VudCJ9LCJiaXRjb2luIjp7InRleHQiOiJUbyBtYWtlIGFjY291bnQgZGVwb3NpdCBieSBCaXRjb2luLCBwbGVhc2UgdXNlIHRoZXNlIGRldGFpbHM6IiwiYWNjb3VudF90ZXh0IjoiUGxlYXNlIGVudGVyIHlvdXIgYnRjIGFjY291bnQgbnVtYmVyIChleGFtcGxlOiAxOWViMXlwZHR5Z21mdHlrd251ZmI0ZWdhbW1la2R4cjVlKSIsImZyb20iOiJBY2NvdW50IGlkIGZyb206IiwiYWNjb3VudCI6IkFjY291bnQgaWQgdG86IiwiYW1vdW50IjoiQW1vdW50IGluIGJhc2UgY3VycmVuY3k6IiwiYnRuIjoiRnVuZCB0aGUgYWNjb3VudCJ9LCJzdGF0dXMiOnsiYnJvbnplIjoiQnJvbnplIiwic2lsdmVyIjoiU2lsdmVyIiwiZ29sZCI6IkdvbGQifX0sImNhcmRzIjp7ImxpbWl0IjoiWW91IGZhaWxlZCAzIHRpbWVzIHRvIGVudGVyIGJhbmsgY2FyZCBkYXRhLiA8YnJcLz5QbGVhc2UgY29udGFjdCBvdXIgY2xpZW50cyBzdXBwb3J0LCBvciB1c2UgYW5vdGhlciBkZXBvc2l0IG1ldGhvZCIsImJhZF9jYXJkIjoiVW5zdWNjZXNzZnVsIGF0dGVtcHQuIFBsZWFzZSBjb250YWN0IHN1cHBvcnQiLCJmYXN0Ijp7ImFkZDEwMCI6IjEwMCIsImFkZDI1MCI6IjI1MCIsImFkZDUwMCI6IjUwMCIsImFkZDEwMDAiOiIxMDAwIiwidG9wX3VwX2hlYWQiOiJRdWljayB0b3AgdXAgOiIsImFsZXJ0X2NvbmZpcm0iOiIgSSBjb25maXJtIGZ1bmRpbmcgb2YgbXkgdHJhZGluZyBhY2NvdW50IHZpYSBiYW5rIGNhcmQuPGJyPiBBbW91bnQgPGI+ezB9IHsxfTxcL2I+LiIsImFsZXJ0X2hlYWRlciI6IlF1aWNrIGFjY291bnQgdG9wLXVwIiwiYWxlcnRfYnRuX29rIjoiSSBjb25maXJtIiwiYWxlcnRfYnRuX2NhbmNlbCI6IkNhbmNlbCIsImZvdW5kZWQiOiJBY2NvdW50IHdhcyBmdW5kZWQhIn0sImZvcm0iOnsiZmlyc3RfbmFtZSI6IkZpcnN0IE5hbWU6IiwibGFzdF9uYW1lIjoiTGFzdCBOYW1lOiIsImZpcnN0X2xhc3QiOiJOYW1lLCBTdXJuYW1lOiIsImFkZHJlc3MxIjoiQWRkcmVzczoiLCJjaXR5IjoiQ2l0eToiLCJjb3VudHJ5IjoiQ291bnRyeToiLCJhbW91bnQiOiJBbW91bnQ6IiwiY2FyZF90eXBlIjoiQ2FyZCBUeXBlOiIsImNhcmRfbnVtYmVyIjoiQ2FyZCBOdW1iZXI6IiwiY3Z2Ml9udW1iZXIiOiJDVlYyOiIsImN2djJfdGV4dCI6IkNWViBudW1iZXIgY2FuIGJlIGxvY2F0ZWQgYnkgbG9va2luZyBvbiB5b3VyIGNyZWRpdCBvciBkZWJpdCBjYXJkIiwiZXhwaXJ5X2RhdGUiOiJFeHBpcnkgRGF0ZToiLCJidG5fZm91bnQiOiJGdW5kIHRoZSBhY2NvdW50IiwiYnRuX3NhdmUiOiJTYXZlIG9ubHkiLCJidG5fYWRkIjoiQWRkIG5ldyBjYXJkIiwid2hhaXRfcmVzcG9uc2UiOiJXYWl0LCB3ZSBleHBlY3QgdGhlIGJhbmsncyByZXNwb25zZSJ9LCJjYXJkIjp7ImJhbmVkIjoiV3JvbmcgZGF0YSJ9LCJtb2RhbCI6eyJ0ZXh0IjoiQmFsYW5jZSBwcm90ZWN0aW9uIHdpbGwga2VlcCBhbiBleWUgb24geW91ciB0cmFkaW5nIGJhbGFuY2Ugc3VmZmljaWVuY3kuIEl0IHNhdmVzIHNpZ25pZmljYW50IHRpbWUgdG8gbWFrZSBmYXN0IHRyYWRpbmcgZGVjaXNpb25zLCB3aXRob3V0IG1hbnVhbCBhY2NvdW50IGZ1bmRpbmcuIEJhbGFuY2UgcHJvdGVjdGlvbiByZXF1aXJlcyB5b3VyIGNhcmQgZGV0YWlsczoiLCJ2YWxpZF9vbmUiOiJUbyB2YWxpZGF0ZSB5b3VyIGNhcmQsIHlvdXIgdHJhZGluZyBhY2NvdW50IHdpbGwgYmUgYXV0b21hdGljYWxseSBmdW5kZWQgZm9yIiwidmFsaWRfdHdvIjoiWW91IGNhbiBjbGFpbSBpdCBiYWNrIG9yIHVzZSBpdCBmb3IgdHJhZGluZy4iLCJidG5fY2FuY2VsIjoiQ2FuY2VsIiwiYnRuX29rIjoiQWN0aXZhdGUgYWNjb3VudCBwcm90ZWN0aW9uIiwiYnRuX2FjdGl2ZSI6IkFjdGl2YXRlIn0sInBsZWFzZSI6eyJtb2RhbF9oZWFkZXIiOiJUb3AgdXAgYW5kIGdldCBib251cyIsInRleHQiOiJZb3UgYmFsYW5jZSBkcm9wcGVkIGJlbG93IDUgezB9LiBUb3AgdXAgeW91IGFjY291bnQgYW5kIGdldCBpbW1lZGlhdGUgYm9udXM6IiwiYWRkXzEwMCI6IkFkZCAxMDAgezB9ICwgPHNwYW4gY2xhc3M9XCJ0ZXh0LWdyZWVuXCI+Z2V0ICsyMCB7MH0gYm9udXM8XC9zcGFuPiIsImFkZF8yMDAiOiJBZGQgNTAwIHswfSAsIDxzcGFuIGNsYXNzPVwidGV4dC1ncmVlblwiPmdldCArMTAwIHswfSBib251czxcL3NwYW4+IiwiYWRkXzEwMDAiOiJBZGQgMTAwMCB7MH0gLCA8c3BhbiBjbGFzcz1cInRleHQtZ3JlZW5cIj5nZXQgKzUwMCB7MH0gYm9udXM8XC9zcGFuPiIsImJ0biI6IlRvcCB1cCBhbmQgZ2V0IGJvbnVzIiwiYnRuX3N1YiI6IllvdSBhdXRob3JpemUgdG8gbWFrZSBhIHRyYW5zYWN0aW9uIG9uIHlvdSBjYXJkIn19LCJjYXNjYWRlX2NhcmQiOnsiZm91bmRlZCI6IkFjY291bnQgd2FzIGZ1bmRlZCEiLCJmYWlsZWQiOiJUcmFuc2FjdGlvbiBmYWlsZWQuIFBsZWFzZSB0cnkgYWdhaW4gb3IgY29udGFjdCBzdXBwb3J0IiwiZW5jcnlwdGVkIjoiVGhpcyBpcyBhbiBTU0wtZW5jcnlwdGVkIHBheW1lbnQuIFlvdSdyZSBzYWZlLiIsImNhcmRfbnVtYmVyIjoiQ2FyZCBudW1iZXIiLCJjYXJkX2V4cCI6IkV4cGlyYXRpb24iLCJjYXJkX2hvbGRlciI6Ik5hbWUsIFN1cm5hbWUiLCJjYXJkX2N2diI6IlNlY3VyaXR5IGNvZGUiLCJjdnZfaGVscF8xIjoiT3IgXHUyMDFjPHN0cm9uZz5DVlY8XC9zdHJvbmc+XHUyMDFkLCBcdTIwMWM8c3Ryb25nPkNWQzxcL3N0cm9uZz5cdTIwMWQgb3IgXHUyMDFjPHN0cm9uZz5DSUQ8XC9zdHJvbmc+XHUyMDFkLiIsImN2dl9oZWxwXzMiOiJBIDMtZGlnaXQgY29kZSBsb2NhdGVkIHRvIHRoZSByaWdodCBvZiBzaWduYXR1cmUgc3RyaXAgb24gdGhlIGJhY2sgb2YgeW91ciBjYXJkLiIsImN2dl9oZWxwXzQiOiJBIDQtZGlnaXQgY29kZSBsb2NhdGVkIG9uIHRoZSBmcm9udCBvZiB5b3VyIGNhcmQuIiwiY3Z2X2hlbHBfMV9hbWV4IjoiT3IgXHUyMDFjPHN0cm9uZz5DSUQ8XC9zdHJvbmc+XHUyMDFkLiIsImN2dl9oZWxwXzRfYW1leCI6IkEgNC1kaWdpdCBjb2RlIGxvY2F0ZWQgb24gdGhlIDxzdHJvbmc+ZnJvbnQgb2YgeW91ciBjYXJkPFwvc3Ryb25nPiwgc2VwYXJhdGUgZnJvbSB0aGUgY2FyZCBudW1iZXIuIiwib25seV9zYXZlIjoiU2F2ZSBvbmx5IiwibXNnIjp7InBmcyI6IlRoaXMgdHJhbnNhY3Rpb24gd2lsbCBiZSB0aXRsZWQgYXMgXCJOb3Jza2UgSW50ZXIgTFBcIiBpbiB5b3VyIGJhbmsncyBzdGF0ZW1lbnQuIiwib3JhbmdlIjoiVGhpcyB0cmFuc2FjdGlvbiB3aWxsIGJlIHRpdGxlZCBhcyBcInJhY2VvcHRpb24uY29tXCIgaW4geW91ciBiYW5rJ3Mgc3RhdGVtZW50LiIsIm9yYW5nZV9ub3RfM2QiOiJUaGlzIHRyYW5zYWN0aW9uIHdpbGwgYmUgdGl0bGVkIGFzIFwiT1JBTkdFUEFZIFNFUlZJQ0VTLCBCQUtVIEFaXCIgaW4geW91ciBiYW5rJ3Mgc3RhdGVtZW50LiIsImNvbmNlcHQiOiJoaXMgdHJhbnNhY3Rpb24gd2lsbCBiZSB0aXRsZWQgYXMgXCJERUtTSS5ORVRcIiBpbiB5b3VyIGJhbmsncyBzdGF0ZW1lbnQuIiwidW5pb24iOiJUaGlzIHRyYW5zYWN0aW9uIHdpbGwgYmUgdGl0bGVkIGFzIFwicmFjZW9wdGlvbi5jb21cIiBpbiB5b3VyIGJhbmsncyBzdGF0ZW1lbnQuIiwic2tyaWxsIjoiVGhpcyB0cmFuc2FjdGlvbiB3aWxsIGJlIHRpdGxlZCBhcyBcInJhY2VvcHRpb24uY29tXCIgaW4geW91ciBiYW5rJ3Mgc3RhdGVtZW50LiIsInpvb20iOiJUaGlzIHRyYW5zYWN0aW9uIHdpbGwgYmUgdGl0bGVkIGFzIFwiQ3QqMTg1NTkyNTI3NTMgMDAwMDAyMjE4M1wiIGluIHlvdXIgYmFuaydzIHN0YXRlbWVudC4iLCJ1bml2ZXJzZSI6IlRoaXMgdHJhbnNhY3Rpb24gd2lsbCBiZSB0aXRsZWQgYXMgXCJCSU5BUllGT1JFWC1UUkFERS5DT01cIiBpbiB5b3VyIGJhbmsncyBzdGF0ZW1lbnQuIiwiZXpwYXkiOiJUaGlzIHRyYW5zYWN0aW9uIHdpbGwgYmUgdGl0bGVkIGFzIFwiezB9XCIgaW4geW91ciBiYW5rJ3Mgc3RhdGVtZW50LiJ9fSwicHJvbW8iOnsiZW50ZXIiOiJFbnRlciBwcm9tbyBjb2RlIiwiaW52YWxpZCI6IlByb21vIGNvZGUgaXMgbm90IHZhbGlkIiwiaXAiOiJSZXBlYXRlZCByZWdpc3RyYXRpb24gd2l0aCB0aGUgc2FtZSBwcm9tby1jb2RlIGlzIHByb2hpYml0ZWQuICBBbHNvLCBpdCdzIHByb2hpYml0ZWQgdG8gbWFuYWdlIGRpZmZlcmVudCB0cmFkaW5nIGFjY291bnRzLCByZWdpc3RlcmVkIHRvIGRpZmZlcmVudCB1c2Vycy4iLCJhY3RpdmF0ZWQiOiJQcm9tbyBjb2RlIGFjdGl2YXRlZCEiLCJhbHJlYWR5IjoiUHJvbW8gY29kZSBhbHJlYWR5IGFjdGl2YXRlZCJ9LCJwYXlwYWwiOnsic3VjY2VzcyI6Ikludm9pY2UgaGFzIGJlZW4gc3VjY2Vzc2Z1bGx5IHNlbnQgdG8geW91ciBlbWFpbCwgeW91IHNob3VsZCByZWNlaXZlIGl0IHdpdGhpbiA1LW1pbnV0ZXMuIiwiZW1haWwiOiJFbWFpbCIsImFtb3VudCI6IkFtb3VudCIsInBheSI6IkZ1bmQgeW91ciBhY2NvdW50In0sInZhbGlkYXRpb24iOnsibWluYW0iOiJNaW4gYW1vdW50In0sIm9yYW5nZSI6eyJwYXlfZmFpbCI6IlRyYW5zYWN0aW9uIGZhaWxlZC4gUGxlYXNlIHZlcmlmeSB0aGUgZGV0YWlscyB5b3UgaW5wdXQgYW5kIHRyeSBhZ2Fpbi4gUGxlYXNlIGNvbnRhY3Qgb3VyIHN1cHBvcnQgaW4gY2FzZSBvZiBmYWlsdXJlLiJ9LCJ2ZXJpZmljYXRpb24iOnsiYmxvY2tfdmVyaSI6IjxoMz5BY2NvdW50IHZlcmlmaWNhdGlvbiE8XC9oMz48aDU+RGVhciBjdXN0b21lciw8XC9oNT4gSW4gb3JkZXIgdG8gc3RhcnQgdHJhZGluZywgd2Uga2luZGx5IGFzayB5b3UgdG8gcGFzcyBhY2NvdW50IHZlcmlmaWNhdGlvbiBmaXJzdC48YnI+IEl0J3MgbmVlZGVkIHRvIGVuc3VyZSBzYWZldHkgb2YgeW91ciBhY2NvdW50LiIsImJsb2NrX2NhcmQiOiI8aDM+QWNjb3VudCB2ZXJpZmljYXRpb24hPFwvaDM+PGg1PkRlYXIgY3VzdG9tZXIsPFwvaDU+IEluIG9yZGVyIHRvIHN0YXJ0IHRyYWRpbmcsIHdlIGtpbmRseSBhc2sgeW91IHRvIHBhc3MgYWNjb3VudCB2ZXJpZmljYXRpb24gZmlyc3QuPGJyPiBJdCdzIG5lZWRlZCB0byBlbnN1cmUgc2FmZXR5IG9mIHlvdXIgYWNjb3VudC4iLCJtb3JlIjoiR2V0IG1vcmUgaW5mbyJ9LCJlcnJvcnMiOnsiZGV2aWNlX25vdF9zdXBwb3J0IjoiU29ycnkhIFlvdXIgZGV2aWNlIGlzIG5vdCBzdXBwb3J0ZWQuIn0sImJsYWNrbGlzdCI6eyJyZWciOiJFcnJvciAjMjU5LCBwbGVhc2UgY29udGFjdCBvdXIgc3VwcG9ydCIsImF1dGgiOiJFcnJvciAjMjU5LCBwbGVhc2UgY29udGFjdCBvdXIgc3VwcG9ydCJ9LCJjb250ZXN0Ijp7InRyYWRpbmdfd2Vla2VuZCI6IlRyYWRlciBjb250ZXN0IiwiZW1wdHkiOiJFbXB0eSIsIm1vcmUiOiJ2aWV3IGRldGFpbHMifSwidmFsaWRhdGVfdHJhbnNjYXRpb24iOnsidGl0bGUiOiJBZGRpdGlvbmFsIHZlcmlmaWNhdGlvbiBpcyByZXF1aXJlZCEiLCJib2R5IjoiRGVhciwgPHN0cm9uZz57MH08XC9zdHJvbmc+LiBZb3VyIGFjY291bnQgd2FzIHN1Y2Nlc3NmdWxseSBmdW5kZWQuIEhvd2V2ZXIgdG8gbWFrZSBzdXJlIHRoYXQgdGhpcyB0cmFuc2FjdGlvbiB3YXMgaW5pdGlhdGVkIGJ5IHlvdSwgcGxlYXNlOjxicj48YnI+XG4gICAgICAgICAgICAxLiBHbyB0byB5b3VyIGNhcmQgc3RhdGVtZW50IChpbiB5b3VyIGludGVybmV0IGJhbmspPGJyPlxuICAgICAgICAgICAgMi4gQ2hlY2sgdGhlIGFtb3VudCB0aGF0IHdhcyBjaGFyZ2VkIChsYXN0IHRyYW5zYWN0aW9uKTxicj5cbiAgICAgICAgICAgIDMuIEVudGVyIGhlcmUgdGhlIGV4YWN0IGFtb3VudCB5b3Ugc2VlIGluIHlvdXIgY2FyZCBzdGF0ZW1lbnQiLCJidG4iOiJDb25maXJtIiwibWF4X3RyeSI6IkhhcyByZWFjaGVkIHRoZSBtYXhpbXVtIG51bWJlciBvZiBhdHRlbXB0cywgcGxlYXNlIGNvbnRhY3Qgb3VyIHN1cHBvcnQgdGVhbSBvciB5b3VyIGFjY291bnQgbWFuYWdlciIsImVycm9yIjoiSW5jb3JyZWN0IGFtb3VudCwgYXR0ZW1wdHMgbGVmdCB7MH0iLCJzbWFsbCI6IkluIGNhc2UgeW91IGhhdmUgZGlmZmljdWx0aWVzIHRvIGlkZW50aWZ5IHRoZSBleGFjdCBhbW91bnQgb2YgeW91ciBsYXN0IHRyYW5zYWN0aW9uLCBwbGVhc2UgY29udGFjdCBvdXIgc3VwcG9ydCB0ZWFtIG9yIHlvdXIgYWNjb3VudCBtYW5hZ2VyLiBXZSB3aWxsIGFzc2lzdCB5b3UuIn0sImNhbGxzIjp7InRleHQiOiJQbGVhc2UgaW5wdXQgeW91ciBwaG9uZSBudW1iZXIgd2l0aCBjb3VudHJ5IGNvZGUgYW5kIGFuZCB3ZSB3aWxsIGltbWVkaWF0ZWx5IGNvbnRhY3QgeW91LiIsImVycm9yX3Bob25lIjoiSW5jb3JyZWN0IHBob25lIiwicGxhY2Vob2xkZXIiOiJwaG9uZSBudW1iZXIiLCJidXR0b24iOiJjYWxsIGJhY2siLCJzZXJ2ZXJfZXJyb3IiOiJTb3JyeSwgdGhlIHNlcnZpY2UgaXMgdGVtcG9yYXJpbHkgdW5hdmFpbGFibGUuIiwic2VydmVyX3N1Y2Nlc3MiOiJFeHBlY3QgYSBjYWxsIHRvIHRoZSBudW1iZXIgZW50ZXJlZC4ifSwidGlwcyI6eyJ3YWl0IjoiU2VuZCB0aXBzLi4uIiwic3VjY2VzcyI6IlRpcHMgc3VjY2Vzc2Z1bGx5IHNlbnQiLCJlcnJvciI6Ikluc3VmZmljaWVudCBmdW5kcyJ9LCJmb3JfdXMiOnsidGl0bGUiOiJJbmZvcm1hdGlvbiIsInRleHQiOiJEZWFyIHZpc2l0b3IsPGJyPlBsZWFzZSBiZSBpbmZvcm1lZCB0aGF0IHJhY2VvcHRpb24gZG8gbm90IHByb3ZpZGUgYW55IHNlcnZpY2VzIG9uIHRoZSBVUyBhbmQgQ0FOQURBIHRlcnJpdG9yeS4ifSwicGF5bWVudCI6eyJzdWNjZXNzIjp7InRpdGxlIjoiUGF5bWVudCBzdWNjZXNzZnVsIiwibWVzc2FnZSI6IlBheW1lbnQgc3VjY2Vzc2Z1bCwgVGhlIHBheW1lbnQgaGFzIGJlZW4gcHJvY2Vzc2VkISJ9LCJlcnJvciI6eyJ0aXRsZSI6IlBheW1lbnQgZXJyb3IiLCJtZXNzYWdlIjoiUGF5bWVudCBlcnJvciwgVGhlIHBheW1lbnQgaGFzbid0IGJlZW4gbWFkZSJ9LCJwcm9jZXNzIjp7InRpdGxlIjoiUGF5bWVudCBpbiBwcm9ncmVzcyIsIm1lc3NhZ2UiOiJQYXltZW50IGluIHByb2dyZXNzLCBwbGVhc2Ugd2FpdCBmb3IgYSBmZXcgbWludXRlcyJ9fSwiZXhjaGFuZ2UiOnsidGFiX29uZSI6IkJpbmFyeSBvcHRpb25zIGFuZCBDRkQgdHJhZGluZyBhY2NvdW50IiwidGFiX3R3byI6IkNyeXB0b2N1cnJlbmN5IGV4Y2hhbmdlIiwiYmFsYW5jZXMiOiJCYWxhbmNlcyIsIndkIjoiWW91ciBhdmFpbGFibGUgZXhjaGFuZ2UgYmFsYW5jZSBpczoiLCJzZWxlY3QiOnsic3RhdHVzIjoiU3RhdHVzIiwiYWxsIjoiQWxsIiwiZnVuZGluZyI6IkZ1bmRpbmciLCJ3aXRoZHJhd2FsIjoiV2l0aGRyYXdhbCIsImV4Y2hhbmdlIjoiRXhjaGFuZ2UiLCJvdGhlciI6IkJpbmFyeSBvcHRpb25zIGFuZCBDRkQifX0sInR1dHMiOnsiYnRjIjoiSG93IHRvIGJ1eSBCaXRjb2lucyB1c2luZyBjb2luYmFzZS5jb20iLCJhbHQiOiJIb3cgdG8gYnV5IEFsdGNvaW5zIHVzaW5nIGNvaW5iYXNlLmNvbSIsInZsb2FkIjoiSG93IHRvIGJ1eSB2b3VjaGVyIHR1dG9yaWFsOiIsInZpZGVvIjoiUXVpY2sgVmlkZW8gdHV0b3JpYWwiLCJ0ZXh0IjoiVGV4dCB0dXRvcmlhbCJ9LCJjb250YWN0cyI6eyJoZWFkIjoiV3JpdGUgdG8gdXMiLCJzdWNjZXNzIjoiVGhhbmsgeW91IGZvciBjb250YWN0aW5nIFJhY2VvcHRpb24uPGJyXC8+PGJyXC8+WW91ciByZXF1ZXN0IGhhcyBiZWVuIHNlbnQgdG8gb25lIG9mIGEgbWVtYmVyIG9mIG91ciBzdXBwb3J0IHRlYW0gd2hvIHdpbGwgcmVwbHkgdG8geW91ciBpbnF1aXJ5IHNob3J0bHkuIiwiZmlsbCI6IlBsZWFzZSBmaWxsIHVwIHRoZSBmb3JtIGFuZCBvdXIgc3VwcG9ydCB0ZWFtIHdpbGwgZ2V0IGluIGNvbnRhY3Qgd2l0aCB5b3UuIiwic2VuZCI6IlNlbmQiLCJtZXNzYWdlIjoiTWVzc2FnZSoiLCJwaG9uZSI6IlBob25lKiIsImVtYWlsIjoiRW1haWwqIiwibmFtZSI6Ik5hbWUqIn19', 1);
        window.User = new Tron('W10=', 1);
        window.Settings = new Tron('eyJwbGF0Zm9ybSI6Imh0dHBzOlwvXC90cmFkaW5nLnJhY2VvcHRpb24uY29tIiwiY2hhdCI6Imh0dHBzOlwvXC9yb2NrZXRjcnlwdC5jb21cL2Jyb2FkY2FzdGluZ3NcL2lmcmFtZS1jbGllbnRcLz9wcm9qZWN0SWQ9NiZ0cmFuc2xhdGU9b24mdGVtcGxhdGU9bWluaS10cmFuc2xhdGUmdGhlbWU9ZmlucmFsbHkmcmVnVXJsPWh0dHBzOlwvXC93d3cucmFjZW9wdGlvbi5jb21cL2VuXC9yZWdpc3RlciZ0b2tlbj0iLCJjaGF0X2F1dGgiOiJodHRwczpcL1wvcm9ja2V0Y3J5cHQuY29tXC9icm9hZGNhc3RpbmdzXC9pZnJhbWUtY2xpZW50XC8/cHJvamVjdElkPTYmdHJhbnNsYXRlPW9uJnRlbXBsYXRlPW1pbmktdHJhbnNsYXRlJnRoZW1lPWZpbnJhbGx5JnJlZ1VybD1odHRwczpcL1wvd3d3LnJhY2VvcHRpb24uY29tXC9lblwvcmVnaXN0ZXImdG9rZW49IiwiY2hhdF9kaXNhYmxlZCI6Im5vIiwiY2hhdF9vZmYiOiJubyIsImppdm9faWQiOiJwUEluWmlBdktVIiwibWRwcyI6eyJERUZBVUxUIjoyNTAsIkNPVU5UUlkiOnsiNTAwIjpbIlVTIiwiQ0EiXX0sIkFMTCI6eyIxIjpbIk5pY2tNaW5pc3RlciJdLCIyNTAiOlsiQlBhZmZpbGlhdGUiLCJXaW5uZXJzY2lyY2xlIiwiUHJveHlhY2Nlc3MiLCJCUEFmZmlsaWF0ZUJSUCIsIkJQQWZmaWxpYXRlQ0FUIiwiQlBBZmZpbGlhdGVXTCJdLCI1MDAiOlsiaW52ZXN0b29wcGMiLCJ0b3BjdHIiLCJ3aGl0ZWxhYmVscm9ib3QiXSwiMjAwMCI6WyI3MGtwcm9maXRAZ21haWwuY29tIl19LCJVU0EiOnsiMjUwIjpbImh5YnJpZCIsIlByb3h5YWNjZXNzIiwiY2xpY2tpbmdtZWRpYSIsIkJpbk9wdFVLIiwiZm9yZXhnYW1lIiwidnZyYWdlbmN5IiwidHJhZGluZ2Z4IiwidHJhZmZpYzEwOCIsIktmcmVza28iLCJqY21jZ2VlIiwiQXVzdHluZXViYW5rcyIsIkxpbGpheSIsIkJsYWNrd2FsbHN0IiwibWF0dGxvcGV6MjU5MiIsIm1pbGVzdGF0ODkiLCJGYWJvIiwiTGV4aWkiLCJDd3JpZ2h0NzA5IiwiQWxpU2hhbmUiLCJkY292b25nMSIsIkVsbmVuZTEwMSIsIkpvbmVlYXJjaGVsbGUiLCJHVEYiLCJGeHBvd2VycGxheWVyIiwiUm9udGhlY3JlYXRvciIsIldpbnNhbmR3aXNkb21meCIsIndrYm9zcyIsIkxpbGpheTE3IiwiRG9sY2VhbmRpbHZhbmEiLCJzbHBhdWw5OCIsIkphbGl3b29kIiwiUm9icm9jIiwiQm9vZ2llcm9iIiwiYXdhbGVtcHIiLCJBbWVyYWhvbGxpZGF5IiwiamF3YXJlODgiLCJhbmplbGlrYTQxIiwiRGlyaWUiLCJsbmVlY2VmaXR0cyIsIkVsZXZhdGlvbkVtcGlyZSJdfSwiT0NPREUiOltdLCJHRU8iOltdLCJOT19FVV9VUyI6eyIxMCI6WyJ0b3BmaXZlZm9yZXgiLCJhbnRvbmx1a2kiLCJBc3NTaGFrZXIiXX19LCJub192bG9hZCI6WyJjYXNoZmxvdyIsIkFuZ3VzTGV2aWUiXSwiY29tcGFueSI6Ik1ha2VydW4gQ29ycC4gLSBOci4gMTA0MDM4IiwiY29tcGFueS1hZGRyZXNzIjoiVHJ1c3QgQ29tcGFueSBDb21wbGV4LCBBamVsdGFrZSBSb2FkLCBBamVsdGFrZSBJc2xhbmQsIE1hanVybywgTWFyc2hhbGwgSXNsYW5kcyBNSDk2OTYwIiwiY2hhdF9oaWRlIjpbInJlZ2lzdGVyIl0sIm1heF9ib251cyI6IjIwMCIsIm1heF9ib251c19wcm9jIjoiMyJ9', 1);
    })();
</script>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MVLWT34');
</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google AdWords: 824992907 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-824992907"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-824992907');
</script>
<script type="text/javascript">
    (function() {
        window['__CF$cv$params'] = {
            r: '6be8f6162b67422a',
            m: 'WOfq04qSd__3.AoKiXdfXI0D26lCysUSde4CbClLi1M-1639668714-0-AfUo176IVDD6yHtWSt81H0A92bDgeKMlxsMEjgaq6VcoWaCJyLgCeHp/gbRSJvDaisYEaowebleOuXlrsPoHvQ7qYRah1P3V5KMR75blNojFHIak6zxvHEWw6poKD1ejLA==',
            s: [0xfeab4d0fdc, 0x6f734bfa3d],
        }
    })();
</script>

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?58838';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled":true,
        "chatButtonSetting":{
            "backgroundColor":"#4dc247",
            "ctaText":"Message Us",
            "borderRadius":"25",
            "marginLeft":"0",
            "marginBottom":"50",
            "marginRight":"50",
            "position":"left"
        },
        "brandSetting":{
            "brandName":"Samtrader",
            "brandSubTitle":"Typically replies within a day",
            "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
            "welcomeText":"Hi there!\nHow can I help you?",
            "messageText":"Hello, I have a question about Samtrader",
            "backgroundColor":"#0a5f54",
            "ctaText":"Start Chat",
            "borderRadius":"25",
            "autoShow":false,
            "phoneNumber":"35795124545"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
</body>
<!-- Mirrored from www.raceoption.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 15:32:56 GMT -->

</html>
