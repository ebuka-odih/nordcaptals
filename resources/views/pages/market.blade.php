@extends('pages.layout.app')
@section('content')



    <!--Page Header-->
<section style="background-image:url(front/images/xdf.jpg); padding-bottom:150px; padding-top:150px; background-repeat:no-repeat" class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1>Our Stock Market</h1>
                <p>We offer the most and latest news about stock market to help you understand when and when not to buy</p>

            </div>
        </div>
    </div>
</section>
<!--Page Header-->



<!-- services -->
<section id="course_all" class="padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st1.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"><a href="#">Netflix Jumps 8%</a></h3>
                    <p class="bottom20">Netflix stocks market again is on a solid run heading into reporting second-quarter earnings next week.</p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/investing/stock-market-news/articles/2020-07-10/stock-rally-rages-netflix-jumps-8?int=undefined-rec">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="500ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st2.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"><a href="#">Nasdaq Hits Record</a></h3>
                    <p class="bottom20"> a fairly cautious outlook on Thursday, with two of the three major U.S. stock market indices losing ground.</p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/investing/stock-market-news/articles/2020-07-09/13-million-jobless-claims-nasdaq-hits-record?int=undefined-rec">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="600ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st3.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"><a href="#">Market Versus Sentiment</a></h3>
                    <p class="bottom20">We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/money/blogs/the-smarter-mutual-fund-investor/articles/in-stock-market-versus-sentiment-its-all-about-money-supply">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top  wow fadeIn" data-wow-delay="700ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st4.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"><a href="#">Apple, New Cases Hit </a></h3>
                    <p class="bottom20">The stock market on apple has appeared to pay close attention to worsening virus conditions in the U.S</p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/investing/stock-market-news/articles/2020-07-08/apple-new-cases-hit-record-highs">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="800ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st5.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"><a href="#">Dividend Aristocrats</a></h3>
                    <p class="bottom20">Many investors looking to preserve and build their capital in this low-yield environment are seeking new strategies to grow </p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/investing/dividends/articles/developing-a-dividend-aristocrat-strategy-during-a-recession">view details</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 equalheight">
                <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
                    <div class="image bottom25">
                        <img src="{{ asset('front/images/st6.png') }}" alt="Services" class="border_radius">
                    </div>
                    <h3 class="bottom10"> <a href="#">Dow Jumps Despite Virus Uptick</a></h3>
                    <p class="bottom20">A uptick in virus cases in the U.S. has seen new cases surge to more than 40,000 per day.</p>
                    <a class="btn_common yellow border_radius" href="https://money.usnews.com/investing/stock-market-news/articles/2020-06-30/dow-jumps-despite-virus-uptick">view details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services ends -->




@endsection
