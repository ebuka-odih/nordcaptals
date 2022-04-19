@extends('pages.layout.app')
@section('content')

<div class="main-home-content">
    <section class="section section_our-advantages">
        <div class="wrapper">
            <div class="inner wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                <h2>Our advantages</h2>
                <p>There are many reasons why clients choose Raceoption, but these <span>8 points</span> make our offer really unique.</p>
            </div>
            <ul class="our-advantages__list js-slider-991">
                <li class="our-advantages__item wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span></span>
                    </div>
                    <div class="our-advantages__text">Guaranteed withdrawals
                        <br> processing within 1 hour</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="0.6s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span>
                    </div>
                    <div class="our-advantages__text">Non-stop trading, even
                        <br> over weekends</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="0.9s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span></span>
                    </div>
                    <div class="our-advantages__text">Wide range of deposit
                        <br> and withdrawal methods</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="1.2s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></span>
                    </div>
                    <div class="our-advantages__text">100% secured trading
                        <br> with full data protection</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="1.5s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
                    </div>
                    <div class="our-advantages__text">Possibility to trade under
                        <br> experienced trader guidance</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="1.8s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span></span>
                    </div>
                    <div class="our-advantages__text">24/7 customer
                        <br> multilingual support</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="2.1s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span></span>
                    </div>
                    <div class="our-advantages__text">More than 10 000 daily processed
                        <br> transactions</div>
                </li>
                <li class="our-advantages__item wow fadeIn" data-wow-delay="2.4s" data-wow-duration="0.3s">
                    <div class="our-advantages__icon"><span class="icon-our-adv-8"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span></span>
                    </div>
                    <div class="our-advantages__text">Copy trades and earn even without
                        <br> any experience in trading</div>
                </li>
            </ul>
            <div class="btn-row wow fadeInUp" data-wow-delay="1.3s" data-wow-duration="0.7s"> <a href="{{ route('register') }}" class="btn btn_accent">START TRADING NOW</a> </div>
        </div>
    </section>
</div>

@endsection
