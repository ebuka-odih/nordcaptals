@extends('pages.layout.app')
@section('content')


<div class="main-home-content">
    <div class="current-page h1">
        <div class="wrap"> About our Company </div>
    </div>
    <div class="secondary-nav">
        <ul class="sn-menu wrap">
            <li class="snm-item "><a href="{{ route('terms') }}" class="snmi-link">User Agreement</a></li>
{{--            <li class="snm-item "><a href="jobs.html" class="snmi-link">We are hiring</a></li>--}}
            <li class="snm-item active"><a href="{{ route('contact') }}" class="snmi-link">Contacts</a></li>
            <li class="snm-item"><a href="{{ route('policies') }}" class="snmi-link">Confidentiality Policy</a></li>
        </ul>
    </div>
    <section class="b-content">
        <div class="wrap text-block">
            <div class="h1 text-centered">Contacts</div>
            <h1 class="hide">CFD Broker Contacts</h1> </div>
        <div class="map" style="background-image: url(../assets/img/map.png);">
            <div class="wrap">
                <div class="map-pointer" style="top: 100px; left: 196px;">1</div>
                <div class="map-pointer" style="top: 46px; left: 548px;">5</div>
                <div class="map-pointer" style="top: 189px; left: 753px;">3</div>
                <div class="map-pointer" style="top: 215px; left: 724px;">4</div>
                <div class="map-pointer" style="top: 80px; left: 414px;">2</div>
                <!--<div class="map-pointer" style="top: 338px; left: 828px;">6</div>--></div>
        </div>
        <div class="wrap contacts-block">
            <div ng-include="'/api/ag/contacts'" style="float:left;"></div>
            <div class="c-phones">
                <h3>Customer Support phone numbers</h3>
                <div class="cp-item"> <i class="cpi-icon">1</i>
                    <div class="cpi-title">Cyprus</div>
                    <div class="cpi-phone">+35795124545</div>
                </div>
                <div class="cp-item"> <i class="cpi-icon">2</i>
                    <div class="cpi-title">Cyprus</div>
                    <div class="cpi-phone">+35795522425</div>
                </div>
{{--                <div class="cp-item"> <i class="cpi-icon">3</i>--}}
{{--                    <div class="cpi-title">Hong Kong</div>--}}
{{--                    <div class="cpi-phone">3-395-0396</div>--}}
{{--                </div>--}}

                <!--
        <div class="cp-item">
            <i class="cpi-icon">6</i>
            <div class="cpi-title">Australia</div>
            <div class="cpi-phone">61-8-5550-7288</div>
        </div>
        --></div>
        </div>
    </section>
    <style>
        @media only screen and (min-width: 1023px) {
            .c-phones {
                float: right;
                width: 300px;
            }
            .c-phones .cp-item {
                display: block;
                width: 100%;
            }
        }

        .cpi-title {
            display: none;
        }

        .cpi-phone {
            line-height: 33px;
        }
    </style>
</div>

@endsection
