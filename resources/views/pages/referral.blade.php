@extends('pages.layout.app')
@section('content')

<div class="main-home-content">
    <section class="section section_refferals-top">
        <div class="wrapper">
            <div class="inner">
                <div class="inner-top">
                    <h1>Get Extra 20% Income</h1>
                    <p>Welcome to referral program! You can invite your friends, family members,
                        <br> colleagues, and get 20% of their deposits! Share your link and earn! <span>Example: referred client deposited $1000 - you will get $200 as a commission.</span> </p>
                    <div class="btn-row"> <a href="{{ route('register') }}" class="btn btn_accent">Refer a friend</a> </div>
                </div>
                <div class="inner-bottom">
                    <h2>3 Easy steps to refer a friend</h2>
                    <ul class="refferals-top__list js-slider-767">
                        <li class="refferals-top__item">
                            <div class="refferals-top__icon"><span class="icon-ref-icon-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></span>
                            </div>
                            <div class="refferals-top__text">Share your referral link</div>
                        </li>
                        <li class="refferals-top__item">
                            <div class="refferals-top__icon"><span class="icon-ref-icon-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span></span>
                            </div>
                            <div class="refferals-top__text">Get 20% back from your client
                                <br> deposits</div>
                        </li>
                        <li class="refferals-top__item">
                            <div class="refferals-top__icon"><span class="icon-ref-icon-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span></span>
                            </div>
                            <div class="refferals-top__text">Withdraw your earnings or trade and get even more profit</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section section_refferals-bottom">
        <div class="wrapper">
            <div class="refferals-bottom-pic"><img src="https://www.samfingroup.com.au/images/pages/trade-platform.png?id=5f3efe6fcfacb00d818e" alt="mac"></div>
            <div class="inner">
                <h2>Why refer to Samtrade?</h2>
                <ul class="refferals-bottom__list js-slider-767">
                    <li class="refferals-bottom__item">
                        <div class="refferals-bottom-icon"><span class="icon-ref-sup-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span></span>
                        </div>
                        <div class="refferals-bottom-text">24/7 Live Chat Support</div>
                    </li>
                    <li class="refferals-bottom__item">
                        <div class="refferals-bottom-icon"><span class="icon-ref-sup-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span></span>
                        </div>
                        <div class="refferals-bottom-text">Daily payouts</div>
                    </li>
                    <li class="refferals-bottom__item">
                        <div class="refferals-bottom-icon"><span class="icon-ref-sup-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>
                        </div>
                        <div class="refferals-bottom-text">Regular promotions</div>
                    </li>
                    <li class="refferals-bottom__item">
                        <div class="refferals-bottom-icon"><span class="icon-ref-sup-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>
                        </div>
                        <div class="refferals-bottom-text">20% commissions</div>
                    </li>
                </ul>
                <div class="btn-row"> <a href="{{ route('register') }}" class="btn btn_accent">Refer a Friend</a> </div>
            </div>
        </div>
    </section>
</div>

@endsection
