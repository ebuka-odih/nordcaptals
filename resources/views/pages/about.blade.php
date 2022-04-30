@extends('pages.layout.app')
@section('content')
    @include('pages.layout.menu2')


    <br>
<br>
<div class="logobar">
    <div class="pagetit">
        <span class="hometxtcolor"></span>
    </div>
</div>
<div class="logopage">
    <div class="container2">
        <div class="block1 ltr ">
            <img class="homebtc heart2 imgblock post delay-1s hidden visible animated fadeIn" src="{{ asset('front/images/homebtc2.png') }}" alt="" width="450">
            <img class="post rotate imgblock hidden visible animated fadeIn" src="{{ asset('front/images/homebtc2.png') }}" alt="" width="450">
        </div>
        <div class="block2 justify">
            <div class="post hidden visible animated fadeIn full-visible">
                <div class="hometxt2">OVERVIEW</div>
                <span class="hometxt1">About Us</span>
            </div>
            <br>
            <br>
            <div class="hometxt2about post9 hidden visible animated fadeInUp">
                Nordcaptals is a crypto mining firm and a subsidiary of a well known Russian gold mining company.Nordgold is an independent international gold mining company founded in 2007
                Nordgold is an international gold mining company Nordgold’s mission is to provide forward growth for the business and value to its shareholders and all other investors. But for us, success is about more than just gold.Our values run deeper than effective gold production. Nordgold operates 9 mines in four countries – Russia, Kazakhstan, Burkina Faso and Guinea.Nordgold has several prospective projects in feasibility study, advanced and early exploration phases in Burkina Faso, Russia, French Guiana and Canada.

                <br>
                <br>
                <span class="hometxt1">OUR AIM</span>
                <p>*To create the most conducive community for all investors, even if they do not have any knowledge or clear understanding of the features of the digital currency market by employing the services of professional cryptocurrency analysts.

                    <br>
                </p>
                <p>*To provide Investors with a rare opportunity to experience ROI investments that is characterized by stability and significance.</p>
                <br>
                <br>
                <span class="hometxt1">OUR TASK</span>
                <p>we are interested in delivering excellent, quality and speedy services for customer satisfaction while exhibiting transparency, establishing trust, expanding our client base and international legacy </p>
                <br>
                <br>
                <span class="hometxt1">OUR VISION</span>
                <p>To raise an indefatigable standard in asset management and the global equity market as an innovative digital platform that gives every the opportunity to engage and benefit off a wide range of businesses anywhere and on the go by funding and facilitating trades in different commodities  </p>
                <br>
                <br>
                <span class="hometxt1">OUR GOAL</span>
                <p>Our goal at Nordcaptals remains honest and unchanged.
                    To acquire assets at the minimum cost, and sell at the maximum, but at the same time we must not forget about the trend of rapid volatility of quotations,which is most especially a characteristic of this market.</p>
                <p>
                    This, on one hand is an advantage for quick transactions and rapid increase in the deposit, but on the other hand, it implies high risks of loss of investments.
                    Unlike traditional exchanges, where large investments are required to generate tangible profits, with Nordcaptals even a minimal deposit in cryptocurrency trading can become the basis for the accumulation of significant income. </p>
                <br>
                <br>
                <span class="hometxt1">OUR FOUNDATION</span>
                <p>Nordcaptals are a group of traders and investors who have united into a single company in order to maximize the profitability of their activities.
                    From the very beginning of its existence, the company has been cooperating with leading exchanges in different fields and financing others who have consistently shown their potential to become leaders.
                    A competent approach to money management allows us to increase the volume of transactions,excluding our participation in external investments.
                    Furthermore our professional team of analysts
                    explores high-quality analytical information from specialized professional research agencies, which makes it possible to safely move along the most profitable vectors while safeguarding itself and clients with a guaranteed insurance policy.</p>
                <p>
                    This uncommon but ethical approach to financial management fundamentally factors and establish basis for the stable operation of the company and the outright success of all transactions which simply ensures guaranteed profit for each investor. Several investment plans developed by our specialists, allow us to determine in advance the desired level of profitability and the size of the initial investment.  </p>
                <br>
                <p>digital currency investments within Nordcaptals is indeed a  safe and stress free means to increase capital as we are always ready to provide necessary support to everyone who is interested in making fruitful investments.</p>
            </div>
            <br>
            <br>
            <!--  <img class="imgblock post9" src="images/evl.png" alt=""/>-->
            <br>
            <br>
            <br>
            <br>
            <a class="sbmt post delay-1s hidden" href="{{ route('register') }}">
                <i class="far fa-user"></i> Create an Account

            </a>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<br>
<br>
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
            <img class="hoverimg" src="images/certificate.html">
        </p>
    </div>
</div>
<div class="homehow">
    <div class="homehowgrad homehowicobg2">
        <br>
        <br>
        <br>
        <div class="container2">
            <div class="block1 ltr">
                <a class="trigger_popup_fricc homebtc post  hidden">
                    <img class="certimg imgblock animated infinite flash slower" src="{{ asset('front/images/uklogo2.png') }}" alt="">
                </a>
                <img class="post2 certimg imgblock hidden" src="https://www.uid.admin.ch/Detail.aspx?uid_id=CHE-112.867.710" alt="">
            </div>
            <div class="block2 justify">
                <div class="post hidden">
                    <div class="hometxt2">Russia Corporation</div>
                    <span class="hometxt1">Company Certificate</span>
                </div>
                <br>
                <br>
                <div class="hometxt2about post9 hidden">
                    Nordcaptals is a fully registered and licensed company in Russia. Nordcaptals is powered by the latest and most secure form of SSL data encryption to keep all your data and information safe and secure.


                    <br>
                    <br>
                </div>
                <br>
                <div class="homecertbg post9 hidden">
                    <div style="padding: 10px" class="homecertlb">
                        <img class="imgblock" src="{{ asset('img/ceo.jpeg') }}" alt="">
                    </div>
                    <div class="homecerttit">Nordcaptals</div>
                    <div class="homecerttxt">Alexey Alexandrovich Mordashov (Russian: Алексей Александрович Мордашов; born 26 September 1965) is a Russian billionaire businessman. He is the main shareholder and chairman. </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            <br>
            <br>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

@endsection
