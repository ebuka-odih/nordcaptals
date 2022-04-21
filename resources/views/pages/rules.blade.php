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
    <div class="pagetit">TERMS AND
        <span class="hometxtcolor">CONDITIONS</span>
    </div>
</div>
<div class="logopage">
    <div class="container justify rulestxt">Please read the following rules carefully before signing in.
        <br>
        <br>



        You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years.
        <br>
        <br>

        Nordcaptals is not available to the general public and is opened only to the qualified members of Nordcaptals, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the Nordcaptals and its Member.
        <br>
        <br>

        As a private transaction, this program is exempt from the Switzerland Securities Act of 1933, the Switzerland Securities Exchange Act of 1934 and the Switzerland Investment Company Act of 1940 and all other rules, regulations and amendments thereof.
        <br>
        <br>
        You agree that all information, communications, materials coming from Nordcaptals
        are unsolicited and must be kept private, confidential and protected from any
        disclosure. Moreover, the information, communications and materials contained
        herein are not to be regarded as an offer, nor a solicitation for investments
        in any jurisdiction which deems non-public offers or solicitations unlawful,
        nor to any person to whom it will be unlawful to make such offer or solicitation.
        <br>
        <br>

        All the data given by a member to Nordcaptals will be only privately used and not disclosed to any third parties. Nordcaptals will not be held responsible for any loss of data.
        <br>
        <br>
        You agree to hold all principals and members harmless of any liability. You agree that all information,
        communications and materials you will find on this site are intended to be regarded
        as an informational and educational matter and not an investment advice.
        <br>
        <br>
        We reserve the right to change the rules, commissions and rates of the program
        at any time and at our sole discretion without notice, especially in order to
        respect the integrity and security of the members' interests. You agree that
        it is your sole responsibility to review the current terms.
        <br>
        <br>

        Nordcaptals is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to Nordcaptals that you will not use this site in any illegal way and you agree to respect your local, national and international laws.
        <br>
        <br>

        you are advised to contact the company administrators when ever you encounter technical issues.
        <br>
        note: do not post unverified information in any social media platform without first of all consulting the administrators to rectify the issue
        <br>
        <br>

        We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.
        <br>
        <br>

        Nordcaptals reserves the right to accept or decline any member for membership without explanation.
        <br>
        <br>

        If you do not agree with the above disclaimer, please do not go any further.
        <br>
        <br>
    </div>
</div>

@endsection
