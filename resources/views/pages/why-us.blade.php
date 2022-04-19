@extends('pages.layout.app')
@section('content')


    <!--Page Header-->
    <section style="padding-bottom:150px; padding-top:150px" class="page_header padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-content">
                    <h1>About US</h1>
                    <p>We offer the most complete house renovating services in the country</p>

                </div>
            </div>
        </div>
    </section>
    <!--Page Header-->


    <!--ABout US-->
    <section id="about" class="padding">
        <div class="container aboutus">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <h2 class="heading heading_space"><span> </span>SIMPLICITY IN INVESTMENT <span class="divider-left"></span></h2>
                    <h4 class="bottom25">

                        <p>Since we started, we have consistently taken measures to ensure that our platform makes online trading and investing accessible to anyone. By keeping a balance between giving easy access to beginners and improving upon important elements for more experienced traders, we have solidified ourself as the world’s leading social trading platform. We offers both short-term options for day traders and long-term options for investors, such that our innovative fully managed thematic portfolio will be available for them. We also acknowledge that different traders have different risk-appetites, and offer instruments varying from low to high risk. Our tools are easy to use, and we make all of the information on the platform accessible on both our web interface and in our mobile app which is yet to come. It is no wonder that more than 6 million people worldwide choose us as their preferred trading platform.</p>
                    </h4>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image">
                        <img src="{{ asset('front/images/about-us2.jpg') }}" alt="Xwin">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABout US-->

    <!-- Company History -->
    <section id="history" class="padding bg_grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h2 class="heading heading_space"> <span>Financial </span>Structures <span class="divider-left"></span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="300ms">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="image"><img src="{{ asset('front/images/history1.jpg') }}" alt="our history"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h3><span>CBN </span>Money Rule</h3>
                            <p>Your money is held in segregated company bank accounts in accordance with the FCA's client money rules </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="400ms">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="image"><img src="{{ asset('front/images/history2.jpg') }}" alt="our history"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h3><span>Top</span> Security</h3>
                            <p>Your money is held with top-tier banks and we have trust letters in place to ensure your money remains segregated from the assets of the bank .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="500ms">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="image"><img src="{{ asset('front/images/history3.jpg') }}" alt="our history"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h3><span> GAIN </span> Capital Holdings</h3>
                            <p>We enforce robust bank review and monitoring guidelines which are set by the Risk Committee of GAIN Capital Holdings, Inc. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 history_wrap bottom25 wow fadeIn" data-wow-delay="600ms">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="image"><img src="{{ asset('front/images/history4.png') }}" alt="our history"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <h3><span>L S E</span> Structure was Founded</h3>
                            <p>We never engage in proprietary trading that result in termination of our connection with london stock exchange.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company History -->


    <!--Fun Facts-->

    <!--Fun Facts-->


    <!-- University Tour -->
    <section id="tours" class="bg_grey padding">
        <div class="container tour_media">
            <div class="row">
                <div class="tour_body wow fadeInLeft" data-wow-delay="300ms">
                    <h2 class="heading heading_space"><span>Our </span> Company<span class="divider-left"></span></h2>
                    <h4 class="bottom25">It’s all going about making ideas happen and making profits daily straight to your personal wallet </h4>
                    <p class="bottom25">We do not share your information unless required to do so by law and/or unless we have your express consent to do so or have another legal basis for sharing such information, e.g., to complete a transaction requested by you, or to prevent fraud. If we share your information with any third party we will do so under our <strong>High level authorization</strong>.
                    </p>
                    <a class="btn_common blue border_radius" href="{{ route('about') }}">Read more</a>
                </div>
                <div class="tour_feature wow fadeInRight" data-wow-delay="300ms">
                    <img src="{{ asset('front/images/tour.jpg') }}" alt="our Tour">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="projects" class="cbp">
                    <div class="cbp-item">
                        <img src="{{ asset('front/images/tour1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="centered text-center">
                                <a href="{{ asset('front/images/tour1.jpg') }}" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-item">
                        <img src="{{ asset('front/images/tour2.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="centered text-center">
                                <a href="{{ asset('front/images/tour2.jpg') }}" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-item">
                        <img src="{{ asset('front/images/tour3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="centered text-center">
                                <a href="{{ asset('front/images/tour3.jpg') }}" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-item">
                        <img src="{{ asset('front/images/tour4.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="centered text-center">
                                <a href="{{ asset('front/images/tour4.jpg') }}" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-item">
                        <img src="{{ asset('front/images/tour5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="centered text-center">
                                <a href="{{ asset('front/images/tour5.jpg') }}" class="cbp-lightbox opens"> <i class=" icon-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- University Tour -->



    <!-- experts -->
    <section id="expertstwo" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">
                    <h2 class="heading heading_space"><span>Our </span> Team<span class="divider-left"></span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_wrapper">
                        <div id="expert_slider" class="owl-carousel">
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/team1.jpg') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">James brownia</h3>
                                <h5 class="color bottom15"><strong>Founder & CEO</strong></h5>
                                <p class=" no_bottom">James with work <strong>ID F9876I</strong> is the director of mcnally-financial.co both in and outside London
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/team2.jpg') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">Warren Jhones</h3>
                                <h5 class="color bottom15"><strong>Signals & Power</strong></h5>
                                <p class=" no_bottom">Jhones with work <strong>ID Z8765H</strong> direct Signals department and power sector
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/team3.jpg') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">Smith .J.Clark</h3>
                                <h5 class="color bottom15"><strong>Control</strong></h5>
                                <p class=" no_bottom">jerry clark with work<strong> ID R48743M</strong>heads the entire control Department in the industry
                            </div>

                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/sara.png') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">Sara Loren</h3>
                                <h5 class="color bottom15"><strong>Front desk</strong></h5>
                                <p class=" no_bottom">sara Loren is a practicing front desk receptionist... </p>
                                <p><strong>No work ID for internship students</strong></p>
                            </div>
                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/robert.png') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">Robert Wishter</h3>
                                <h5 class="color bottom15"><strong>Interpool</strong></h5>
                                <p class=" no_bottom">Robert with work ID <strong>G34573L</strong> heads the interpool division to make standards that applies to all.</p>
                            </div>

                            <div class="item">
                                <div class="image bottom20">
                                    <img src="{{ asset('front/images/team4.jpg') }}" alt="experts" class="img-responsive border_radius">
                                    <div class="overlay">
                                        <div class="centered">

                                        </div>
                                    </div>
                                </div>
                                <h3 class="bottom5">Jcole Marina</h3>
                                <h5 class="color bottom15"><strong>Head of sales</strong></h5>
                                <p class=" no_bottom">Jcole with work <strong>ID H90123J </strong>heads the marketing division, outsourcing and development... </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experts -->



@endsection
