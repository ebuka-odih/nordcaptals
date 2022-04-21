@extends('pages.layout.app')
@section('content')
    @include('pages.layout.menu2')

<script>
    $(function () {
        function getUrl(currency) {
            return "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,BCH,ETH,LTC,DASH,DOGE&tsyms=USD";
        }
        function updateRate() {
            $.get(getUrl("BTC"), function (data) {
                $("#btc_rate").text(data.BTC.USD);
                //$("#bitcoin_circle").text(data.USD);
            });
            $.get(getUrl("ETH"), function (data, status) {
                $("#eth_rate").text(data.ETH.USD);
            });
            $.get(getUrl("LTC"), function (data, status) {
                $("#ltc_rate").text(data.LTC.USD);
            });
            $.get(getUrl("BCH"), function (data, status) {
                $("#bch_rate").text(data.BCH.USD);
            });
            $.get(getUrl("DASH"), function (data, status) {
                $("#dash_rate").text(data.DASH.USD);
            });
            $.get(getUrl("DOGE"), function (data, status) {
                $("#doge_rate").text(data.DOGE.USD);
            });
            var total_deposit =  '3.5906124999999998';
            /* total_deposit += parseFloat($("#eth_rate").text()) * parseFloat($("#ethereum_circle").text());
              total_deposit += parseFloat($("#ltc_rate").text()) * parseFloat($("#lite_circle").text());*/

            $("#deposits_circle").text(total_deposit);

        }
        updateRate();
        setInterval(updateRate, 1000);

    });
</script>
<br>
<br>
<div class="logobar">
    <div class="pagetit">
        <span class="hometxtcolor"></span>
    </div>
</div>
<div class="logobar">
    <div class="pagetit">Frequently
        <span class="hometxtcolor">Asked Questions</span>
    </div>
</div>
<div class="container">
    <div class="homeptxt post slow hidden visible animated fadeIn full-visible">Still have questions? Before contacting us you might want to look through the questions and answers in this section.

        <br>
        Please click on the questions in order to read the answers.
    </div>
</div>
<br>
<br>
<script>
    $(document).ready(function() {

        $('.faq_question').click(function() {

            if ($(this).parent().is('.open')){
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
                $(this).closest('.faq').removeClass('open');

            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }

        });

    });
</script>
<div class="logopage container">
    <div class="container fslideinup">
        <div class="contet">
            <ul class="tab">
                <center>
                    <li>
                        <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'gen')" id="defaultOpen">
                            <i class="fas fa-caret-down"></i> General
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'dep')">
                            <i class="fas fa-caret-down"></i> DEPOSITS
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'with')">
                            <i class="fas fa-caret-down"></i> WITHDRAWALS
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'ref')">
                            <i class="fas fa-caret-down"></i> referral
                        </a>
                    </li>
                </center>
            </ul>
            <div id="gen" class="tabcontent" style="display: block;">
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> What is the business of the Nordcaptals, and does it have official registration?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Nordcaptals is a Switzerland investment company with company Number CHE-112.867.710. We conduct fully legal activities and are engaged in trading in real estate, agriculture and the cryptocurrency market.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> What are the advantages of working with the Nordcaptals company?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">The main advantages of the Nordcaptals project are its profitability, reliability and convenience for clients. Due to the experience of our traders and the developed trading strategies, we can guarantee significant increase in your capital within a short time frame.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> Who may be a client of Nordcaptals?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Anyone can be a client of Nordcaptals, provided he\she is over 18 years of age.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dep" class="tabcontent" style="display: none;">
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> How may I make a deposit?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">You can open a deposit in the corresponding menu in your personal account.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> When the deposit should be activated?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Your deposit should be activated immediately if you use Perfect Money.
                            If you use cryptocurrencies it could be some time longer which is required for getting confirmations by the cryptocurrency network.
                            For deposits in cryptocurrencies we need at least 1 confirmation.
                            If your deposit hasn't appear in your account for a long time, please contact us.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> Do you have any limits for an investment amount?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">The minimum investment amount is only $100 and the maximum amount is Unlimited per transaction.

                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="with" class="tabcontent" style="display: none;">
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> How can I withdraw funds?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Login to your account using your username and password and check the Withdraw section
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> How long does it take for the withdrawals to complete?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Payments are made instantly. 7 days a week.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> What is the minimum withdrawal amount？
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Minimum withdrawal amount: = $5.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ref" class="tabcontent" style="display: none;">
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> How will I get my referral commission?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">The commission will be credited to your account automatically, immediately after the deposit has been created by your referral.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> Will I get my referral bonus for every additional deposit my referrals make?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Yes, you will get referral bonus on every deposit your referrals make.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <div class="faq_question">
                        <i class="fas fa-long-arrow-alt-right"></i> Can I withdraw my income that I got from taking part in the Affiliate program?
                    </div>
                    <div class="faq_answer_container">
                        <div class="faq_answer">Yes, you can regularly withdraw your referral income or you can form investments using it.
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

    </script>
    <br>
    <br>
</div>

@endsection
