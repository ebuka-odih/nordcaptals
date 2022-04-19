@extends('pages.layout.app')
@section('content')

    <div class="main-home-content">
    <section class="section section_account">
        <div class="tab-wrap tab-wrap_account">
{{--            <div class="wrapper">--}}
{{--                <ul class="nav-tab-list tabs">--}}
{{--                    <li class="nav-tab-list__item "> <a href="#tab_1" class="nav-tab-list__link">Open an account</a> </li>--}}
{{--                    <li class="nav-tab-list__item active"> <a href="#tab_2" class="nav-tab-list__link">Account types</a> </li>--}}
{{--                    <li class="nav-tab-list__item"> <a href="#tab_3" class="nav-tab-list__link">Funding & withdrawal methods</a> </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="box-tab-cont">
                <div class="tab-cont tab-cont_1 hide" id="tab_1">
                    <div ng-include="'/api/ag/register'"></div>
                </div>
                <div class="tab-cont tab-cont_2 " id="tab_2">
                    <div class="wrapper" style="min-height:70vh;">
                        <div class="account-slider" id="js-nouislider"></div>
                        <ul class="account-type__list">
                            <li class="account-type__item">
                                <div class="account-type-head">Bronze</div>
                                <div class="account-type-cont">
                                    <ul class="account-type-cont__list">
                                        <li>24/7 live video chat support</li>
                                        <li>Withdrawals in 1 hour</li>
                                        <li>Bonus +20%</li>
                                        <li>Demo account</li>
                                        <li>Copy Trading tool</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="account-type__item">
                                <div class="account-type-head">Silver</div>
                                <div class="account-type-cont">
                                    <ul class="account-type-cont__list">
                                        <li>24/7 live video chat support</li>
                                        <li>Withdrawals in 1 hour</li>
                                        <li>Bonus +50%</li>
                                        <li>Demo account</li>
                                        <li>Copy Trading tool</li>
                                        <li>Master class (web session)</li>
                                        <li>First 3 risk free trades <span>*</span></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="account-type__item">
                                <div class="account-type-head">Gold</div>
                                <div class="account-type-cont">
                                    <ul class="account-type-cont__list">
                                        <li>24/7 live video chat support</li>
                                        <li>Withdrawals in 1 hour</li>
                                        <li>Bonus +100%</li>
                                        <li>Demo account</li>
                                        <li>Copy Trading tool</li>
                                        <li>Master class (web session)</li>
                                        <li>First 3 risk free trades <span>*</span></li>
                                        <li>Personal success manager</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="account-type-utils">
                            <ul class="account-utils__list">
                                <li class="account-utils__item account-utils__item_inputs">
                                    <div class="account-utils-title">Your deposit</div>
                                    <div class="account-utils-cont">
                                        <input type="text" value="3 000" class="form-control js-utils-input"> <span>USD</span> </div>
                                </li>
                                <li class="account-utils__item">
                                    <div class="account-utils-title">Bonus</div>
                                    <div class="account-utils-cont"><span>+<span id="bonus-slide-value">100</span>%</span>
                                    </div>
                                </li>
                                <li class="account-utils__item">
                                    <div class="account-utils-title">Total traiding deposit</div>
                                    <div class="account-utils-cont"><span id="bonus-slide-redesing">6000</span> USD</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-cont tab-cont_3 hide" id="tab_3">
                    <div class="account-methods-banner">
                        <ul class="account-methods__list js-methods__slider">
                            <li class="account-methods__item">
                                <div class="wrapper">
                                    <h3>Fast and reliable transfers supported by the most popular providers</h3>
                                    <ul class="account-methods-inner__list owl-carousel owl-theme">
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-1"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
                                            </div>
                                            <div class="account-methods-text">SSL certified</div>
                                        </li>
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-2"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span></span>
                                            </div>
                                            <div class="account-methods-text">Funds safety in Europe bank</div>
                                        </li>
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-3"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span></span>
                                            </div>
                                            <div class="account-methods-text">3D Secure enable</div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="account-methods__item">
                                <div class="wrapper">
                                    <h3>Guaranteed withdrawals processing in 1 hour</h3>
                                    <ul class="account-methods-inner__list  owl-carousel owl-theme">
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-1"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
                                            </div>
                                            <div class="account-methods-text">SSL certified</div>
                                        </li>
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-2"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span></span>
                                            </div>
                                            <div class="account-methods-text">Funds safety in Europe bank</div>
                                        </li>
                                        <li>
                                            <div class="account-methods-icon"><span class="icon-account-icon-3"><span
                                                        class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span></span>
                                            </div>
                                            <div class="account-methods-text">3D Secure enable</div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="account-methods-table">
                        <div class="wrapper">
                            <div class="methods-table">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Regions covered</th>
                                        <th>Transfer fee <span>*</span></th>
                                        <th>Funding time <span>**</span></th>
                                        <th>Withdrawal time <span>***</span></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-hide"> Method </div>
                                            <div class="td-inner">
                                                <div class="methods-table-pic" style="max-width: 103px;"><img src="../assets/css/img/main/methods-img-1.png" alt="method"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Regions covered </div>
                                            <div class="td-inner"> All </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Transfer fee <span>*</span> </div>
                                            <div class="td-inner"> 5% </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Funding time <span>**</span> </div>
                                            <div class="td-inner"> Instant </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Withdrawal time <span>***</span> </div>
                                            <div class="td-inner"> up to 1 hour </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-hide"> Method </div>
                                            <div class="td-inner">
                                                <div class="methods-table-pic" style="max-width: 97px;"><img src="../assets/css/img/main/methods-img-2.png" alt="method"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Regions covered </div>
                                            <div class="td-inner"> All </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Transfer fee <span>*</span> </div>
                                            <div class="td-inner"> no fee </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Funding time <span>**</span> </div>
                                            <div class="td-inner"> Instant </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Withdrawal time <span>***</span> </div>
                                            <div class="td-inner"> up to 1 hour </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-hide"> Method </div>
                                            <div class="td-inner">
                                                <div class="methods-table-pic" style="max-width: 129px;"><img src="../assets/css/img/main/methods-img-3.png" alt="method"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Regions covered </div>
                                            <div class="td-inner"> All </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Transfer fee <span>*</span> </div>
                                            <div class="td-inner"> no fee </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Funding time <span>**</span> </div>
                                            <div class="td-inner"> Instant </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Withdrawal time <span>***</span> </div>
                                            <div class="td-inner"> up to 1 hour </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-hide"> Method </div>
                                            <div class="td-inner td-inner_mod">
                                                <div class="acoount-table-text">Altcoins</div>
                                                <div class="methods-table-pic" style="max-width: 91px;"><img src="../assets/css/img/main/methods-img-4.png" alt="method"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Regions covered </div>
                                            <div class="td-inner"> All </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Transfer fee <span>*</span> </div>
                                            <div class="td-inner"> no fee </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Funding time <span>**</span> </div>
                                            <div class="td-inner"> Instant </div>
                                        </td>
                                        <td>
                                            <div class="td-hide"> Withdrawal time <span>***</span> </div>
                                            <div class="td-inner"> up to 1 hour </div>
                                        </td>
                                    </tr>
                                    <!--	<tr>
                                        <td>
                                            <div class="td-hide">
                                                Method
                                            </div>
                                            <div class="td-inner">
                                                <div class="methods-table-pic" style="max-width: 135px;"><img
                                                        src="/assets/css/img/main/methods-img-5.png" alt="method"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide">
                                                Regions covered
                                            </div>
                                            <div class="td-inner">
                                                All
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide">
                                                Transfer fee <span>*</span>
                                            </div>
                                            <div class="td-inner">
                                                no fee
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide">
                                                Funding time <span>**</span>
                                            </div>
                                            <div class="td-inner">
                                                up to 1 hour
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-hide">
                                                Withdrawal time <span>***</span>
                                            </div>
                                            <div class="td-inner">
                                                up to 1 hour
                                            </div>
                                        </td>
                                    </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <ul class="methods-table-desc">
                                <li><span>*</span> Raceoption doesn't charge transfer fee. However third-party fee may be applied. </li>
                                <li><span>**</span> During weekends and public holidays, funding time may be delayed.</li>
                                <li><span>***</span> Withdrawal time after confirmation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<div class="current-page h1">
<div class="wrap">
    How to start?
</div>
</div>

<div class="secondary-nav">
<ul class="sn-menu wrap">
    <li class="snm-item"><a href="/en/register" class="snmi-link">Open an Account</a></li>
    <li class="snm-item active"><a href="/en/account-types" class="snmi-link">Account types</a></li>
    <li class="snm-item "><a href="/en/funding-methods" class="snmi-link">Funding methods</a></li>
    <li class="snm-item"><a href="/en/withdrawals-methods" class="snmi-link">Withdrawal methods</a></li>
</ul>
</div>

<section class="b-content" old-ng-controller="Interal" old-ng-cloak>
<div class="wrap text-block">

    <div class="h1 text-centered">Account Types</div>
    <h1 class="hide">Binary Options & CFD Trading Accounts</h1>


    <p>For your convenience we have combined the most demanded services into packages. Their accessibility depends from the amount of first trading deposit. By investing more, you get more bonuses and advantages!</p>
</div>

<div class="wrap tab-block light">
    <div class="tb-tabs">
        <a href="javascript:;" data-tab="#tab1" class="js-tab tbt-tab active"><span class="tbtt-inner">Trading account</span></a>
    </div>
    <div id="tab1" class="js-pane tb-pane active">
        <div class="range-block">
            <div class="rb-wrap">
                <div class="rb-info">
                    <div class="rbi-title">
                        Your deposit
                    </div>
                    <div class="rbi-details type-1">
                        <span id="slider-bonus-value" class="value" ng-bind="slide.value"></span> USD
                    </div>
                </div>

                <div class="rb-info">
                    <div class="rbi-title">
                        Total trading deposit
                    </div>
                    <div class="rbi-details">
                        <b id="total-summ"></b> USD
                    </div>
                </div>
            </div>

            <div class="rb-tooltip type-2">
                <div class="rbt-arrow-n"></div>

                <div class="range-slider" style="margin-top:55px;">

                    <div class="range-slider range-slider-wrap">
                         <div id="slider-bonus"></div>
                     </div>


                    <table class="rs-group">
                        <colgroup>
                            <col style="width: 181px;" />
                            <col style="width: 280px;" />
                            <col style="width: auto;" />
                        </colgroup>
                        <tr>
                            <td><strong class="rs-levels bronze">Bronze</strong></td>
                            <td><strong class="rs-levels silver">Silver <span class="rsl-offer" style="background: url(/assets/img/levels-offer_en.png)">Most popular</span></strong></td>
                            <td><strong class="rs-levels gold">Gold</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="rs-levels custom bronze">
                                    <div class="rsl-details narrow">
                                        <div class="rsl-title">Bronze account features</div>
                                        <ul class="rsl-list">
                                            <li class="rsll-item">Withdrawals in 1 hour</li>

                                            <li class="rsll-item">Demo account</li>
                                        </ul>
                                        <a href="/en/register" class="btn-custom-2">Open "Bronze" account</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="rs-levels custom silver">
                                    <div class="rsl-details">
                                        <div class="rsl-title">Silver account features</div>
                                        <ul class="rsl-list">
                                            <li class="rsll-item">Withdrawals in 1 hour</li>

                                            <li class="rsll-item">Demo account</li>
                                            <li class="rsll-item">Master class (web session)</li>

                                        </ul>
                                        <a href="/en/register" class="btn-custom-2">Open "Silver" account</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="rs-levels custom gold">
                                    <div class="rsl-details">
                                        <div class="rsl-title">Gold account features</div>
                                        <ul class="rsl-list">
                                            <li class="rsll-item">Withdrawals in 1 hour</li>

                                            <li class="rsll-item">Demo account</li>
                                            <li class="rsll-item">Master class (web session)</li>

                                            <li class="rsll-item">Individual account manager</li>
                                        </ul>
                                        <a href="/en/register" class="btn-custom-2">Open "Gold" account</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="wrap text-block">
</div>
    </div>

</section>

<script>
setTimeout(function(){
var slider = document.getElementById('slider-bonus');
var range_all_sliders = {
    'min': [    250 ],
    '20%': [   1000 ],
    '50%': [  3000 ],
    'max': [ 50000 ]
};
noUiSlider.create(slider, {
    range: range_all_sliders,
    start: [1000],
    connect: 'lower',

    format: wNumb({
        decimals: 0,
        //postfix: ' USD'
    }),
    pips: {
        mode: 'values',
        values: [250, 1000, 3000, 50000],
        density: 4,
        format: wNumb({
            prefix: '$',
            //postfix: 'USD'
        })

    }
});

var bonusValue = document.getElementById('slider-bonus-value');

slider.noUiSlider.on('update', function( values, handle ){


    var summ = parseInt(values[handle]);
    var bonus = 1.5;
    var bonus_value = 20;

    if(summ < 250){
        bonus = 1.2;
        bonus_value = 20;
    }

    if(summ >= 1000 && summ < 3000){
        bonus = 1.5;
        bonus_value = 50;
    }

    if(summ >= 3000){
        bonus = 2;
        bonus_value = 100;
    }

    var bonus_need = bonus ;

    bonusValue.innerHTML = values[handle];
    var total = (summ * bonus_need).toFixed(0);
    $('#total-summ').html(summ);
    $('#total-bonus').html(bonus_value);

});
},500);
</script>--></div>

@endsection
