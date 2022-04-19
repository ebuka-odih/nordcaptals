@extends('pages.layout.app')
@section('content')

<div class="main-home-content">
    <section class="section section_platform section_platform-trading">
        <div class="wrapper">
            <div class="inner">
                <h2>Trading Platform</h2>
                <p>Samtrade provides its customers with the most advanced and popular trading platform. The platform is available on any device.</p>
                <div class="platform-pic">
                    <ul class="platform-points">
                        <li class="platform-points__item platform-points__item_1"><span><small>1</small></span></li>
                        <li class="platform-points__item platform-points__item_2"><span><small>2</small></span></li>
                        <li class="platform-points__item platform-points__item_3"><span><small>3</small></span></li>
                        <li class="platform-points__item platform-points__item_4"><span><small>4</small></span></li>
                        <li class="platform-points__item platform-points__item_5"><span><small>5</small></span></li>
                        <li class="platform-points__item platform-points__item_6"><span><small>6</small></span></li>
                    </ul> <img src="../assets/img/main/platform-trading.png" alt="platform"> </div>
            </div>
            <ul class="platform-trading__list js-slider-1280">
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>1</small></span><span>Assets</span></div>
                    <div class="platform-trading-desc">Select the Asset you would like to trade using the Dropdown Menu.</div>
                </li>
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>2</small></span><span>Chart</span></div>
                    <div class="platform-trading-desc">Asset chart price, showing its performance in real time over the selected time period.</div>
                </li>
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>3</small></span><span>Trader's choise</span></div>
                    <div class="platform-trading-desc">Displays (in %) the current number of "bulls" (who buys) and "bears" (who sells) the asset.</div>
                </li>
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>4</small></span><span>Time and amount</span></div>
                    <div class="platform-trading-desc">Choose your desired Expiry Time and enter the amount you would like to invest.</div>
                </li>
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>5</small></span><span>Choose direction</span></div>
                    <div class="platform-trading-desc">Click "BUY", if you think that the price of the asset will be higher. Click "SELL" - lower at CFD expiration time.</div>
                </li>
                <li class="platform-trading__item">
                    <div class="platform-trading-name"><span><small>6</small></span><span>Payout</span></div>
                    <div class="platform-trading-desc">Profit, in percentage from invested amount.</div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section section_platform section_platform-mobile">
        <div class="wrapper">
            <div class="inner">
                <h2>Mobile Platform</h2>
                <p>Experience Samtrade mobile trading platform. It allows to stay connected with the global market and never miss a trading opportunity.</p>
            </div>
            <div class="platform-mobile-wrap">
                <div class="platform-pic">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": 600,
                                "height": 490,
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
{{--                    <img src="../assets/img/main/platform-mobile.png" alt="platform">--}}
                </div>
                <div class="platform-mobile-lists">
                    <div class="platform-mobile-block">
                        <div class="platform-mobile-title">Platform features:</div>
                        <ul class="platform-mobile__list">
                            <li class="platform-mobile__item"><span></span><span>regular options/CFD trading</span></li>
                            <li class="platform-mobile__item"><span></span><span>60 seconds trading</span></li>
                            <li class="platform-mobile__item"><span></span><span>account funding</span></li>
                            <li class="platform-mobile__item"><span></span><span>funds withdrawal</span></li>
                            <li class="platform-mobile__item"><span></span><span>trading history</span></li>
                        </ul>
                    </div>
                    <div class="platform-mobile-block">
                        <div class="platform-mobile-title">Application benefits:</div>
                        <ul class="platform-mobile__list">
                            <li class="platform-mobile__item"><span></span><span>allows for instant execution of trades</span> </li>
                            <li class="platform-mobile__item"><span></span><span>shows live charts of every cfd available on the
								platform</span></li>
                            <li class="platform-mobile__item"><span></span><span>enables traders to view their entire trade
								history</span></li>
                            <li class="platform-mobile__item"><span></span><span>same login as the web-based platform</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
