@extends('pages.layout.app')
@section('content')
    @include('pages.layout.menu')

    <div class="homehow">
        <div class="homehowgrad">
            <div class="homehowicobg post ">
                <img class="rotate imgblock" src="{{ asset('front/images/howbgico.png') }}">
            </div>
            <div class="container ">
                <br>
                <br>
                <br>
                <br>
                <div class="post">
                    <div class="homeptit w">How it works</div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="homesol post">
                    <img src="{{ asset('front/images/h1.png') }}">
                    <div class="homesoltit">Create Account</div>
                    <div class="homewhytxt">Registration takes about 2 min and is free. Your account will be active immediately.</div>
                    <br>
                    <br>
                    <br>
                    <a class="homewhybtn" href="{{ route('register') }}">Join now</a>
                </div>
                <div class="homesol post ">
                    <img src="{{ asset('front/images/h2.png') }}">
                    <div class="homesoltit">Deposit</div>
                    <div class="homewhytxt">The process is very simple. You can make a deposit using 7 available payment methods.</div>
                    <br>
                    <br>
                    <br>
                    <a class="homewhybtn" href="{{ route('register') }}">Join now</a>
                </div>
                <div class="homesol post ">
                    <img src="{{ asset('front/images/h3.png') }}">
                    <div class="homesoltit">Withdraw</div>
                    <div class="homewhytxt">You will receive profit every day after you make a deposit. Instant payments. 7 days in a week.</div>
                    <br>
                    <br>
                    <br>
                    <a class="homewhybtn" href="{{ route('register') }}">Join now</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="post">
                    <div class="homeptit2 w">Crypto Currency</div>
                    <div class="hometxt2">Live Price</div>
                </div>
                <br>
                <br>
                <div class="homeitembox post ">
                    <div class="itemimg">
                        <img src="{{ asset('front/images/pr-btc.png') }}">
                    </div>
                    <div class="itemtit">$
                        <span id="btc_rate"></span>
                    </div>
                    <div class="itemtxt">Bitcoin</div>
                </div>
                <div class="homeitembox post ">
                    <div class="itemimg">
                        <img src="{{ asset('front/images/pr-bch.png') }}">
                    </div>
                    <div class="itemtit">$
                        <span id="bch_rate"></span>
                    </div>
                    <div class="itemtxt">Bitcoin Cash</div>
                </div>
                <div class="homeitembox post ">
                    <div class="itemimg">
                        <img src="{{ asset('front/images/pr-eth.png') }}">
                    </div>
                    <div class="itemtit">$
                        <span id="eth_rate"></span>
                    </div>
                    <div class="itemtxt">Ethereum</div>
                </div>
                <div class="homeitembox post ">
                    <div class="itemimg">
                        <img src="{{ asset('front/images/pr-ltc.png') }}">
                    </div>
                    <div class="itemtit">$
                        <span id="ltc_rate"></span>
                    </div>
                    <div class="itemtxt">Litecoin</div>
                </div>
            </div>
        </div>
    </div>
    <div class="homewelbg">
        <div class="container2">
            <div class="block1 ltr post8">
                <img class="homebtc imgblock animated infinite flash slower "  alt=""/>
                <img class="homebtc imgblock updown2" src="{{ asset('front/images/homebtc2.png') }}" alt=""/ width="450">
                <img class="imgblock"  alt=""src="{{ asset('front/images/homebtc2.png') }}" width="450"/ >
            </div>
            <div class="block2 post9" align="left">
                <div class="hometxt2">What is Nordcaptals</div>
                <span class="hometxt1 w">About Us</span>
                <br>
                <div class="logosplit"></div>
                <br>
                <div class="hometxt2about w">
                    Nordcaptals is a crypto mining firm and a subsidiary of a well known Russian gold mining company.Nordgold is an independent international gold mining company founded in 2007
                    <br>
                    <br>

                    Nordgold is an international gold mining company Nordgold’s mission is to provide forward growth for the business and value to its shareholders and all other investors. But for us, success is about more than just gold.Our values run deeper than effective gold production. Nordgold operates 9 mines in four countries – Russia, Kazakhstan, Burkina Faso and Guinea.Nordgold has several prospective projects in feasibility study, advanced and early exploration phases in Burkina Faso, Russia, French Guiana and Canada.

                </div>
                <br>
                <br>
                <!--  <img class="imgblock post9 hidden visible animated fadeInUp full-visible" src="images/evl.png" alt="">-->
                <br>
                <br>
                <br>
                <br>
                <a class="sbmt" href="{{ route('about') }}">
                    <i class="fas fa-long-arrow-alt-right"></i> About us
                </a>
            </div>
        </div>
        <div class="homeitembg">
            <div class="container post "></div>
        </div>
    </div>
    <script>
        $(window).load(function () {
            $(".trigger_popup_fricc").click(function(){
                $('.hover_bkgr_fricc').show();
            });
            $('.hover_bkgr_fricc').click(function(){
                $('.hover_bkgr_fricc').hide();
            });
            $('.popupCloseButton').click(function(){
                $('.hover_bkgr_fricc').hide();
            });
        });
    </script>
    <div class="hover_bkgr_fricc">
        <span class="helper"></span>
        <div>
            <div class="popupCloseButton">X</div>
            <div class="hoverpop">OUR CERTIFICATE</div>
            <p>
                <img class="hoverimg imgblock" src="{{ asset('front/images/certificate.html') }}">
            </p>
        </div>
    </div>
    <div class="homeplanbg">
        <div class="container">
            <div class="post">
                <div class="homeptitplan">Investments Plans</div>
            </div>
            <br>
            <br>
            @foreach($invest_plans as $item)
            <div class="homefebox post2">
                <div class="homeplanico">
                    <img src="{{ asset('front/images/p1.png') }}">
                </div>
                <br>
                <span class="homefetit2">{{ $item->name }}</span>
                <div class="homefetit">{{ $item->daily_interest }}% Daily For {{ $item->term_days }} days</div>
                <div class="homefetxt">
                    <span class="homefetxtl">MIN:</span>
                    <span class="homefetxtr">{{ $item->min_deposit }} USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">MAX:</span>
                    <span class="homefetxtr">{{ $item->max_deposit }} USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">Referral Commission:</span>
                    <span class="homefetxtr">10%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">TOTAL ROI:</span>
                    <span class="homefetxtr">{{ $item->total_return() }}%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">PAYMENTS:</span>
                    <span class="homefetxtr">INSTANTLY</span>
                </div>
                <br>
                <a class="homewhybtn" href="{{ route('user.user_deposits') }}">Deposit</a>
            </div>
            @endforeach

            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    </div>
    <!--<div class="homeitembg2"><div class="homeitembg2img"><div class="container post "><div class="homeitembox2 heart"><div class="itemimg"><i class="far fa-calendar-alt"></i></div><div class="itemtit"> 2664</div><div class="itemtxt">Running Days</div></div><div class="homeitembox2 heart"><div class="itemimg"><i class="fas fa-signal"></i></div><div class="itemtit">9</div><div class="itemtxt">Visitors Online</div></div><div class="homeitembox2 heart"><div class="itemimg"><i class="fas fa-user-friends"></i></div><div class="itemtit"> 590</div><div class="itemtxt">Total Memebers</div></div><div class="homeitembox2 heart"><div class="itemimg"><i class="fab fa-btc"></i></div><div class="itemtit">$ 3225795.28</div><div class="itemtxt">Total Deposited</div></div><div class="homeitembox2 heart"><div class="itemimg"><i class="fab fa-btc"></i></div><div class="itemtit">$ 1215120.94</div><div class="itemtxt">Total Withdraw</div></div></div></div></div>-->
    <div class="homehow">
        <div class="homehowgrad">
            <div class="homehowicobg post ">
                <img class="heart2 imgblock" src="{{ asset('front/images/refbg.png') }}">
            </div>
            <div class="container ">
                <br>
                <br>
                <br>
                <br>
                <div class="post">
                    <div class="hometxt2">Affiliate Program</div>
                    <div class="homeptit w"> Referral & Representative</div>
                    <div class="homeptxt">You can get additional income from our affiliate program. .</div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="homerefbox post ">
                    <div class="homerefbr">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="homereftit">10.00%</div>
                    <br>
                    <br>
                    <br>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="post">
        <div class="homeptit2">Accepted Payment Gateways</div>
    </div>
    <br>
    <div class="post9">
        <img class="imgblock fpay" src="{{ asset('front/images/3.png') }}" title="BTC"/>
        <img class="imgblock fpay" src="{{ asset('front/images/5.png') }}" title="DOGE"/>
        <img class="imgblock fpay" src="{{ asset('front/images/6.png') }}" title="ETH"/>
        <img class="imgblock fpay" src="{{ asset('front/images/7.png') }}" title="BCH"/>
        <img class="imgblock fpay" src="{{ asset('front/images/9.png') }}" title="DASH"/>
    </div>
    <br>
    <br>
    <br>
    <div class="post9">
        <a class="paybtn" href="{{ route('register') }}">join us</a>
    </div>
    </div>
    </div>
    <div class="homehow">
        <div class="homehowgrad homehowicobg2">
            <br>
            <br>
            <br>
            <div class="container2">
                <div class="block1 ltr">
                    <a class="trigger_popup_fricc homebtc post  hidden visible animated fadeIn">
                        <img class="certimg imgblock animated infinite flash slower" src="{{ asset('front/images/uklogo2.png') }}" alt="">
                    </a>
                    <img class="post2 certimg imgblock hidden visible animated bounceIn full-visible" src="https://www.uid.admin.ch/Detail.aspx?uid_id=CHE-112.867.710" alt="">
                </div>
                <div class="block2 justify">
                    <div class="post hidden visible animated fadeIn">
                        <div class="hometxt2">Russia Corporation</div>
                        <span class="hometxt1">Company Certificate</span>
                    </div>
                    <br>
                    <br>
                    <div class="hometxt2about post9 hidden visible animated fadeInUp full-visible">
                        Nordcaptals is a fully registered and licensed company in Russia. Nordcaptals is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.

                        <br>
                        <br>
                    </div>
                    <br>
                    <div class="homecertbg post9 hidden visible animated fadeInUp full-visible">
                        <div class="homecertlb">
                            <img class="imgblock" src="{{ asset('img/cert.jpeg') }}" alt="">
                        </div>
                        <div class="homecerttit">Nordcaptals</div>
                    </div>
                    <br>
                    <br>
                    <br>
{{--                    <a class="sbmt post9  hidden visible animated fadeInUp full-visible" href="https://www.uid.admin.ch/Detail.aspx?uid_id=CHE-112.867.710">--}}
{{--                        <i class="fas fa-certificate"></i> View Certificate--}}
{{--                    </a>--}}
                </div>
                <br>
                <br>
            </div>

        </div>
    </div>

@endsection
