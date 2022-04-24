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

        All the data given by a member to Nordcaptals will be only privately used and not disclosed to any third parties. Nordcaptals will not be held responsible for any loss of data.
        <br>
        <br>
        you are advised to contact the company administrators when ever you encounter technical issues.
        <br>
        <br>


        <br>
        <br>
    </div>
</div>

@endsection
