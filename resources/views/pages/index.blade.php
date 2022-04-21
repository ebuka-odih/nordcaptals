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
                    By carrying out successful transactions on the cryptocurrency exchange, traders and investors have the opportunity to receive income that is characterized by stability and significance. However, it is pointless to count on success in trading if a trader is not guided by the peculiarities of the cryptocurrency market, which has important differences from other markets.

                    <br>
                    <br>

                    The main task of Nordcaptals remains unchanged to acquire assets at the minimum cost, and sell at the maximum, but at the same time we must not forget about the trend of rapid volatility of quotations, in other words, its volatility, which is especially characteristic of this market. This, on the one hand, is an advantage for quick transactions and rapid increase in the deposit, but on the other hand, it implies high risks of losing investments. Unlike traditional exchanges, where large investments are required to generate tangible profits, even a minimal deposit in cryptocurrency trading can become the basis for the accumulation of significant income.

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
            <div class="homefebox post2">
                <div class="homeplanico">
                    <img src="{{ asset('front/images/p1.png') }}">
                </div>
                <br>
                <span class="homefetit2">Starter</span>
                <div class="homefetit">1.5% Daily For 10 days</div>
                <div class="homefetxt">
                    <span class="homefetxtl">MIN:</span>
                    <span class="homefetxtr">100 USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">MAX:</span>
                    <span class="homefetxtr">4,999 USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">Referral Commission:</span>
                    <span class="homefetxtr">10%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">TOTAL ROI:</span>
                    <span class="homefetxtr">15%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">PAYMENTS:</span>
                    <span class="homefetxtr">INSTANTLY</span>
                </div>
                <br>
                <a class="homewhybtn" href="indexcca3.html?a=signup">Deposit</a>
            </div>
            <div class="homefebox post2 ">
                <div class="homeplanico">
                    <img src="{{ asset('front/images/p2.png') }}">
                </div>
                <br>
                <span class="homefetit2">Advanced</span>
                <div class="homefetit">2% Daily For 10 days</div>
                <div class="homefetxt">
                    <span class="homefetxtl">MIN:</span>
                    <span class="homefetxtr">5,000 USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">MAX:</span>
                    <span class="homefetxtr">9,999 USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">Referral Commission:</span>
                    <span class="homefetxtr">10%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">TOTAL ROI:</span>
                    <span class="homefetxtr">20%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">PAYMENTS:</span>
                    <span class="homefetxtr">INSTANTLY</span>
                </div>
                <br>
                <a class="homewhybtn" href="indexcca3.html?a=signup">Deposit</a>
            </div>
            <div class="homefebox post2 ">
                <div class="homeplanico">
                    <img src="{{ asset('front/images/p3.png') }}">
                </div>
                <br>
                <span class="homefetit2">Premium </span>
                <div class="homefetit">3% Daily For 10 days</div>
                <div class="homefetxt">
                    <span class="homefetxtl">MIN:</span>
                    <span class="homefetxtr">10,000 USD</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">MAX:</span>
                    <span class="homefetxtr">Unlimited</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">Referral Commission:</span>
                    <span class="homefetxtr">10%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">TOTAL ROI:</span>
                    <span class="homefetxtr">30%</span>
                </div>
                <div class="homefetxt">
                    <span class="homefetxtl">PAYMENTS:</span>
                    <span class="homefetxtr">INSTANTLY</span>
                </div>
                <br>
                <br>
                <a class="homewhybtn" href="indexcca3.html?a=signup">Deposit</a>
            </div>
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
        <img class="imgblock fpay" src="{{ asset('front/images/1.png') }}" title="PM"/>
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
                        <div class="hometxt2">Switzerland Corporation</div>
                        <span class="hometxt1">Company Certificate</span>
                    </div>
                    <br>
                    <br>
                    <div class="hometxt2about post9 hidden visible animated fadeInUp full-visible">
                        Nordcaptals is a fully registered and licensed company in Switzerland. Nordcaptals is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.

                        <br>
                        <br>
                    </div>
                    <br>
                    <div class="homecertbg post9 hidden visible animated fadeInUp full-visible">
                        <div class="homecertlb">
                            <img class="imgblock" src="{{ asset('front/images/reg.png') }}" alt="">
                        </div>
                        <div class="homecerttit">Nordcaptals</div>
                        <div class="homecerttxt">Company number CHE-112.867.710 </div>
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
            <br>
            <br>
            <br>
            <br>
            <div class="container2">
                <div class="sec-title text-center">
                    <h3>Presentation Video</h3>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8dtV3k1jZlg" allowfullscreen="" style="width:100%; height:400px;"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
