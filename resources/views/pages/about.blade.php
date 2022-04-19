@extends('pages.layout.app')
@section('content')



<!--Page Header-->
<section style="padding-bottom:150px; padding-top:150px;" class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1>ABOUT US</h1>


            </div>
        </div>
    </div>
</section>
<!--Page Header-->



<!--BLOG SECTION-->
<section id="blog" class="padding">
    <div class="container">
        <h2 class="hidden">Blog</h2>
        <div class="row">
            <div class="col-md-9 col-sm-8">
                <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
                    <div class="image">
                        <img src="{{ asset('front/images/blogfull1.jpg') }}" alt="blog" class="border_radius">
                    </div>
                    <h3 class="top25">ABOUT Astroption</h3>

                    <p class="margin10">Astroption also known as Astroption is a U.S based investment platform that serves 184+ countries, across 30+ currencies (traditional and crypto) and commodities with frictionless foreign exchange and cross-border remittance for members around the world. Since 2019, We have powered more than US$4+ billion in transactions.

                        Also combines a platform model with payment connectivity to offer financial services to a global market.We empowers innovation in financial services through a platform approach where app developers and fintech partners can leverage through licensed relationships with banks and financial services partners around the world. Built on a core of proprietary technologies and e-money apps, We embraces a future where people and businesses are automated.
                    </p>
                    <p class="margin10">
                    </p>
                    <a class=" btn_common btn_border margin10 border_radius heading_space" href="{{ route('about') }}">Read More</a>
                </article>
                <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="400ms">

                    <h3 class="top25"> Access and Encryption</h3>

                    <p style="text-align:left" class="margin10">



                        Our Information Security and Personal Information protection programs are designed to prevent bad actors from taking advantage of our systems, members, employees, or brand. We deploy a multitude of security measures to ensure that all personal and financial information on our system is completely safe and secure at all times. Get a detailed look at some of the access and encryption measures we enforce in our trading page.
                    </p>
                </article>


            </div>

        </div>
    </div>
</section>
<!--BLOG SECTION-->




@endsection
