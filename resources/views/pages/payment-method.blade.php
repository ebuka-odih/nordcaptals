@extends('pages.layout.app')
@section('content')


<div class="main-home-content">
    <section class="section section_account">
        <div class="tab-wrap tab-wrap_account">

            <div class="box-tab-cont">
                <div class="tab-cont tab-cont_1 hide" id="tab_1">
                    <div ng-include="'/api/ag/register'"></div>
                </div>
                <div class="tab-cont tab-cont_2 hide" id="tab_2">
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
                <div class="tab-cont tab-cont_3 " id="tab_3">
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
</div>


@endsection
