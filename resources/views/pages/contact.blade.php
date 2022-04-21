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
    <div class="pagetit">Support
        <span class="hometxtcolor">Departments</span>
    </div>
</div>
<div class="supformtxt post9 hidden visible animated fadeInUp full-visible">If you have any questions concerning our services, please fill out the contact form below.</div>
<br>
<br>
<div class="logopage loginimg">
    <div class="container">
        <div class="supbox post delay-1s hidden visible animated fadeIn">
            <img src="images/fo-email.png" class="imgblock">
            <br>
            <div class="supboxtit">E-mail</div>
            <a href="mailto:support@nordcaptals.com" target="_blank">support@nordcaptals.com</a>

        </div>
        <div class="supbox post delay-2s hidden visible animated fadeIn">
            <img src="images/fo-cert.png" class="imgblock">
            <br>
            <div class="supboxtit">Company Number</div>
            CHE-112.867.710

        </div>
        <div class="supbox post delay-3s hidden visible animated fadeIn">
            <br>
            <div class="supboxtit">Open Time</div>
            24/7

        </div>
    </div>
    <br>
    <br>
    <div class="supbg">
        <div class="container">
            <div class="post hidden visible animated fadeIn">
                <div class="hometxt2">Contact Form</div>
                <div class="homeptit2">Get in touch!</div>
            </div>
            <div class="supformbg">
                <script language="javascript">

                    function checkform() {
                        if (document.mainform.name.value == '') {
                            alert("Please type your full name!");
                            document.mainform.name.focus();
                            return false;
                        }
                        if (document.mainform.email.value == '') {
                            alert("Please enter your e-mail address!");
                            document.mainform.email.focus();
                            return false;
                        }
                        if (document.mainform.message.value == '') {
                            alert("Please type your message!");
                            document.mainform.message.focus();
                            return false;
                        }
                        return true;
                    }

                </script>
                <form method="post" name="mainform" onsubmit="return checkform()">
                    <input type="hidden" name="form_id" value="16502887196046">
                    <input type="hidden" name="form_token" value="d09fb045b1ed8c067f0610337321fa21">
                    <input type="hidden" name="a" value="support">
                    <input type="hidden" name="action" value="send">
                    <table cellspacing="0" cellpadding="2" border="0">
                        <tbody>
                        <tr>
                            <td>
                                <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="name" placeholder="Name" value="" class="input-field">
                                </div>
                                <b></b>
                                <div class="input-container">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" name="email" placeholder="Email" value="" class="input-field">
                                </div>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="message" placeholder="Message" class="input-field" cols="45" rows="4"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <br>
                                <center>
                                    <br>
                                    <input type="submit" value="Send" class="sbmt">
                                    <input type="reset" value="Reset" class="sbmt">
                                </center>
                                <br>
                                <br>
                                <br>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
<br>
<br>

@endsection
