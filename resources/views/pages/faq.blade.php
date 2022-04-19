@extends('pages.layout.app')
@section('content')


<div class="main-home-content">
    <div class="current-page h1">
        <div class="wrap"> Education Center </div>
    </div>
    <div class="secondary-nav">
        <ul class="sn-menu wrap">
            <!--<li class="snm-item"><a href="/en/video" class="snmi-link">Video tutorials</a></li>-->
            <li class="snm-item active"><a href="faq.html" class="snmi-link">FAQ</a></li>
        </ul>
    </div>
    <section class="wrap b-content">
        <div class="h1 text-centered">FAQ</div>
        <h1 class="hide">Binary Options & CFD trading FAQ</h1>
        <div class="b-tabs">
            <div class="bt-list">
                <a data-tab="#tab-1" href="javascript:;" class="js-tab btl-item type-2 active"> <span class="btli-arrow-s"></span> <img src="../assets/img/faq/img-1.png" alt="" class="btli-img" /> Offers </a>
                <a data-tab="#tab-2" href="javascript:;" class="js-tab btl-item type-2"> <span class="btli-arrow-s"></span> <img src="../assets/img/faq/img-2.png" alt="" class="btli-img" /> My account </a>
                <a data-tab="#tab-3" href="javascript:;" class="js-tab btl-item type-2"> <span class="btli-arrow-s"></span> <img src="../assets/img/faq/img-3.png" alt="" class="btli-img" /> How to begin? </a>
                <a data-tab="#tab-4" href="javascript:;" class="js-tab btl-item type-2"> <span class="btli-arrow-s"></span> <img src="../assets/img/faq/img-4.png" alt="" class="btli-img" /> Trading </a>
                <a data-tab="#tab-5" href="javascript:;" class="js-tab btl-item type-2"> <span class="btli-arrow-s"></span> <img src="../assets/img/faq/img-5.png" alt="" class="btli-img" /> Safety </a>
            </div>
            <div id="tab-1" class="js-pane bt-pane active">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What are the conditions for trading bonus?</a>
                    <div class="ba-content js-toggle-target"> The bonus will be paid in the currency of your choice, selected upon registration only.
                        <br>
                        <br> The maximum bonus that can be awarded during any year to client is €/$ 100000, depending on the currency of client account. Samtrade, at its sole discretion, may award additional bonus to client.
                        <br>
                        <br> Bonuses are optional and will be granted only after client's confirmation. In case if client by mistake accepted a bonus, he must notify customer support within 3 working days, without making any trading activity and the bonus will be removed from client's account. More information about bonuses you can find in User Agreement.
                        <br>
                        <br> When trading CFD, Bonus is used only as an additional margin for order volume increase, as a leverage and can’t be withdrawn. </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What does “First 3 risk free trades” mean?</a>
                    <div class="ba-content js-toggle-target">
                        <p> In case of negative trading results, risk-free trades are compensated in the form of a trading bonus based on bonus provision rules. To use this service, you have to contact your account manager and get a prior confirmation.</p>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How can I fund my trading account?</a>
                    <div class="ba-content js-toggle-target">
                        <p>You can fund your account by credit cards (VISA/MasterCard), Bank wire transfer, Bitcoin, Ethereum, Litecoin, Altcoins, Neteller, Skrill, Perfect Money.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How quickly the funds will be added to my trading account?</a>
                    <div class="ba-content js-toggle-target">
                        <p>The funds will be available for trading immediately, once we receive a confirmation from payment system.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What are the conditions for withdrawals?</a>
                    <div class="ba-content js-toggle-target">
                        <p> For security reasons, identification of the person is required for all withdrawals, regardless of the withdrawal amount.
                            <br> For account without bonus: trader has to reach a 100% turnover from deposited amount, to claim for for withdrawal.
                            <br> For account with bonus: trader has to reach 300% turnover from deposited amount, to claim for deposited amount and profit withdrawal. More details in "User agreement".
                            <br>
                            <br>
                            <br>The minimal amount allowed for withdrawal is $50.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How quickly my withdrawal request is processed?</a>
                    <div class="ba-content js-toggle-target"> Samtrade processes all withdrawal requests within 1 hour.
                        <br>
                        <br> However verification may take longer time, if client didn't submit all requested documents in time. </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How quickly my withdrawal request is processed?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Samtrade processes all withdrawal requests within 1 hour. However verification may take longer time, if client didn't submit all requested documents in time.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Does Samtrade withhold a tax from payouts?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Samtrade doesn't withhold any taxes. However, as a customer, it is your responsibility to follow the taxes requirements in your jurisdiction.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How can I close my Samtrade account?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Please email at <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="96e5e3e6e6f9e4e2d6c4f7f5f3f9e6e2fff9f8b8f5f9fb">[email&#160;protected]</a> to request closing of your account. You will receive a confirmation when this request will be completed.</p>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is CFD?</a>
                    <div class="ba-content js-toggle-target">
                        <p>CFD - Contract for Difference.
                            <br>
                            <br> CFD is type of financial asset which helps trader to gain and earn in a continuous way. By predicting the move of a currency, trader can choose to open BUY or SELL contract for any asset.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is binary option?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Binary options are a simple and potentially very profitable way to make money from short term movements on the market. By correctly predicting whether the price of an asset will go up or down, you can get a significant income in a continuous way.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is cryptocurrency?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Cryptocurrency is a digital currency, which functioning is based on blockchain techology. Physically currency doesn't exist, it exist only in virtuality.
                            <br>
                            <br>The most popular cryptocurrencies are Bitcoin, Ethereum, Litecoin, Dash, Ripple. You can use these currencies to fund and trade.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is the minimum and maximum deposit amount?</a>
                    <div class="ba-content js-toggle-target">
                        <p>The minimum deposit amount is 250$ (or €), and the maximum - 50000$ (or €).</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Do I have to download any software for trading?</a>
                    <div class="ba-content js-toggle-target">
                        <p>There is no need to download something before you can start trading with Samtrade. All you need to do is sign up and add funds into your account and you’ll be ready to start trading.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Is there any maintenance or registration fee?</a>
                    <div class="ba-content js-toggle-target">
                        <p>No, it is free to open an account with Samtrade.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How can I sign up?</a>
                    <div class="ba-content js-toggle-target">
                        <p>To sign up go to ‘Open an Account’ and enter the required information.
                            <br> Please make sure the data you submit is correct and up to date.
                            <br> In the future it will simplify withdrawal process.</p>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How to trade on demo account?</a>
                    <div class="ba-content js-toggle-target">
                        <p>To receive demo account access you need to fund your trading account and contact customer support to get an demo account credentials.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How to trade binary options?</a>
                    <div class="ba-content js-toggle-target">
                        <p>To trade binary options, simply fund your account and login into the platform. You will see binary options trading by default.
                            <br>
                            <br> To start trading, choose CALL or PUT options depending on your forecast.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How to trade CFD?</a>
                    <div class="ba-content js-toggle-target">
                        <p>To start trading CFD, fund your account and login into the platform. On the top you'll be able to choose CFD trading tab and start trading CFD.
                            <br>
                            <br> You can choose BUY or SELL options, depending on your market forecasts.
                            <br>
                            <br> It’s not permitted to trade CFD, if total account loss is exceeding total amount of deposits on the account.
                            <br>
                            <br> When trading CFD, if balance drops to the level of bonus, an automatic closing of all open trades takes place - Margin call.
                            <br>
                            <br> Example: You deposited $1000 and got bonus of $1000. If the loss in your account equals to $1000, bonus is automatically withdrawn and open trades are closed. </p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How to trade CFD?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Bonuses are eligible on all CFD trades and are awarded by Samtrade up to 100%, based on your deposited amount. Bonuses are meant to give a trader an additional margin for maintaining positions and/or to open larger volume positions. With this statement client should understand, that Profit and Loss (PnL) always relates to client's Net balance, not Bonus amount.
                            <br>
                            <br> Bonuses awarded by Samtrade are not withdrawable or tradable separately. </p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What time base is used by the platform?</a>
                    <div class="ba-content js-toggle-target">
                        <p>The time is displayed based on Greenwich Time (GMT)</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Payouts for assets</a>
                    <div class="ba-content js-toggle-target">
                        <p>You can find payouts for different trading assets in the trading platform, on the right left side.
                            <br>
                            <br> For example, you will see: <b>EURUSD - 85%</b>. That means if you will open trade with $100 investment, then in case of win you will receive $185 payout - $100 investment return and $85 of profit.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">Copy trading - follow successful traders</a>
                    <div class="ba-content js-toggle-target">
                        <p>Copy trading service designed for novices and people who want to trade automatically without manual trades.
                            <br>
                            <br>To get started, you need to fund your account and on the trading platform press Copy trading, then choose trader to copy from.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is Margin Call</a>
                    <div class="ba-content js-toggle-target">
                        <p>Margin call is account state when all your open trades will be automatically closed.
                            <br> Margin call is triggered by 5% margin level (5% from free funds + opened positions margin).
                            <br> <strong>For instance</strong>, you have $1000 on your balance and you open several positions.
                            <br> In case your total floating profit/loss will reach -$950 (5% from free funds + opened positions margin), margin call will be triggered.</p>
                    </div>
                </div>
                <!-- functions -->
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is Double Up?</a>
                    <div class="ba-content js-toggle-target">
                        <p>You can double up your investment on chosen option. When you double up trade, you will get duplicate position - asset, direction, amount and expiry time will be the same, but open price will differ. New positions will be opened by current market price.</p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is Rollover?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Rollover feature allows you to extend your trade for 100% of chosen time for the first usage. Every next usage of this feature for the same trade will bring you additional 30% of extra time for this trade.
                            <br> Following conditions should be complied:
                            <br>
                            <br> 1. Opened position should be out of the money (not in profit).
                            <br> 2. Using rollover your investment amount will be increased on 30%. You need to have enough funds on balance.
                            <br> 3. Till option expiry time remaining >1/4 from chosen period.
                            <br>
                        </p>
                    </div>
                </div>
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">What is Sell Out?</a>
                    <div class="ba-content js-toggle-target">
                        <p> You can close opened position before its expiry time if the position is in profit on 0.1% or more.
                            <br>
                            <br> After position is closed, investment will be returned back to your balance.
                            <!--		You can close opened position before option expiry time.<br>
            Following conditions should be complied:<br><br>
1. Option position should be in the money (in profit).<br>
2. From the option open time passed at least >1/4 from chosen period.<br>
3. Payout for the option will be calculated by next formula:<br><br>

             <i>Payout before expiry = planned payout * past period coefficient - discount</i><br><br>

            <small>Past period coefficient - ratio between time from start time till option action time<br>

            Discount - 10% from investment amount<br>

            If payout before expiry time get negative, then it's deducted from option investment amount.</small><br>

            -->
                        </p>
                    </div>
                </div>
                <!-- functions -->
            </div>
            <div id="tab-5" class="js-pane bt-pane">
                <div class="b-accordion"> <a href="javascript:;" class="ba-header js-toggle">How secure is trading with Samtrade?</a>
                    <div class="ba-content js-toggle-target">
                        <p>Samtrade uses SSL (Secure Socket Layer) technology to encrypt your transactions and keep your personal information as secure as possible. This automated technology is used by major banks and other financial companies who have information on the web. Most browsers support SSL encryption, however, if for any reason your browser is not able to support the technology, you will receive an instant notification. You can verify whether web page is SSL compliant by checking the address. It should start with "https://..." - the "s" stands for "secure".</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
