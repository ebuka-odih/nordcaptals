
<!doctype html>
<html>
@include('dashboard.includes.head')
<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 600px;
    }


    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
</style>

<body>
@include('includes.nav')
<div id="main-other">
    <div id="sub-other">
        <div class="other-head">
            <h1>Plan Details</h1>
        </div>
    </div>
</div>
<div id="pagesbg">
    <div id="sub-pagesbg">
        @include('dashboard.includes.sidebar')
        <div class="desh-right">


            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script language=javascript>
                function go(p)
                {
                    document.opts.page.value = p;
                    document.opts.submit();
                }
            </script>

            @if(Session::has('success_message'))
                <h5><strong style="color: #1a9138">{!! session('success_message') !!}</strong></h5>
            @endif

            @if( $deposit_detail->status == 'approved')
            <table cellspacing=1 cellpadding=2 border=0 width=100%  class="tab">
                <tr style="margin-bottom: 10px;">
                    <th colspan="3" class=inheader><b>INVESTMENT DETAILS</b></th>
                </tr>
                <tr>
                <tr>
                    <th>PLAN:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                </tr>
                <tr>
                    <th>INVESTED AMOUNT:</th>
                    <td colspan="2">${{ $deposit_detail->amount }}</td>
                </tr>
                <tr>
                    <th>ROI:</th>
                    <td colspan="2">$@convert($profit)</td>
                </tr>
                <tr>
                    <th>TOTAL RETURN (WITH CAPITAL):</th>
                    <td colspan="2">$@convert($profit + $deposit_detail->amount)</td>
                </tr>
                <tr>
                    <th>START DATE:</th>
                    <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->approved_date)) }}</td>
                </tr>
                <tr>
                    <th>ENDING DATE:</th>
                    <td colspan="2">{{ date('d-M-y', strtotime($deposit_detail->end_date)) }}</td>
                </tr>
                <tr>
                    <th>INTERVAL:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                </tr>
                <tr>
                    <th>DAILY PROFIT:</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                </tr>
                <tr>
                    <th>TOTAL PROFIT (%):</th>
                    <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return }}(%)</td>
                </tr>
                <tr>
                    <th>STATUS:</th>
                    @if($deposit_detail->status == 'pending')
                        <td colspan="2"> <p><button class="w3-button w3-orange">Pending</button></p></td>
{{--                    <td style="color: #e0b802" colspan="2"><button>Pending</button></td>--}}
                    @else
                        <td colspan="2"><p><button class="w3-button w3-green">Approved</button></p></td>
                    @endif
                </tr>
                <tr>
                    <td colspan=3>&nbsp;</td>
                </tr>
                <tr>
                    <th>PROFIT EARNED:</th>
                    <td colspan="2">$ {{ $deposit_detail->earning }} (without capital)</td>
                </tr>
                <tr>
                    <th>TOTAL EARNED:</th>
                    <td colspan="2">$ {{  $deposit_detail->total_earned }} (plus capital)</td>
                </tr>
{{--                <tr>--}}
{{--                    <th> DAYS IN PROGRESS :</th>--}}
{{--                    <td colspan="2">Day ({{ $i }})</td>--}}
{{--                </tr>--}}
                <tr>
                    <th> PROGRESS :</th>
                    @if($deposit_detail->investment_plan->term_days == $i)
                        <td colspan="2">Plan Ended</td>
                    @else
                        <td colspan="2">Plan In Progress...</td
                    @endif
                </tr>
                <tr>
                    <td colspan=3>&nbsp;</td>
                </tr>

            </table>
           @else
                <table cellspacing=1 cellpadding=2 border=0 width=100%  class="tab">
                    <tr style="margin-bottom: 10px;">
                        <th colspan="3" class=inheader><b>TRANSACTION DETAILS</b></th>
                    </tr>
                    <tr>
                    <tr>
                        <th>CHOSEN PLAN:</th>
                        <td colspan="2">{{ optional($deposit_detail->investment_plan)->name }}</td>
                    </tr>
                    <tr>
                        <th>INVESTMENT AMOUNT:</th>
                        <td colspan="2">${{ $deposit_detail->amount }}</td>
                    </tr>
                    <tr>
                        <th>EXPECTED PROFIT:</th>
                        <td colspan="2">${{ $profit }}</td>
                    </tr>
                    <tr>
                        <th>INVESTMENT INTERVAL:</th>
                        <td colspan="2">{{ optional($deposit_detail->investment_plan)->term_days }} Days</td>
                    </tr>
                    <tr>
                        <th>INVESTMENT DAILY PROFIT:</th>
                        <td colspan="2">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</td>
                    </tr>
                    <tr>
                        <th>INVESTMENT TOTAL PROFIT:</th>
                        <td colspan="2">{{ optional($deposit_detail->investment_plan)->total_return }}(%)</td>
                    </tr>
                    <tr>
                        <th>TRANSACTION STATUS:</th>
                        @if($deposit_detail->status == 'pending')
                            <td colspan="2"> <p><button class="w3-button w3-orange">Pending</button></p></td>
                            {{--                    <td style="color: #e0b802" colspan="2"><button>Pending</button></td>--}}
                        @else
                            <td colspan="2"><p><button class="w3-button w3-green">Approved</button></p></td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan=3>&nbsp;</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th colspan="3" class=inheader><b>MAKE PAYMENT</b></th>
                    </tr>
                    <tr>
                        <th>SEND TO <br>BITCOIN PAYMENT:</th>
                        <td colspan="2"><input style="width: 300px; height: 20px" id="btc" value="3BknrQv7HQQqqjeP6LiBuYFRWxyLrfJrDm">

                            <!-- Trigger -->
                            <button class="btn" data-clipboard-target="#btc">
                                <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">
                            </button></td>
                    </tr>
                    <tr>
                        <th>SCAN BARCODE<br>BITCOIN PAYMENT:</th>
                        <td colspan="2"><img height="250" width="250" src="{{ asset('images/btc2.png') }}" alt="Bitcoin Barcode"> </td>
                    </tr>

                    <tr>
                        <th>SEND TO<br>ETHEREUM PAYMENT:</th>
                        <td colspan="2"><input style="width: 300px; height: 20px" id="eth" value="0x3E48B29aAC0a0cF008207AC02647589E3Ab9B032">

                            <!-- Trigger -->
                            <button class="btn" data-clipboard-target="#eth">
                                <img height="20" width="20" src="{{ asset('images/clippy.svg') }}" alt="Copy to clipboard">
                            </button></td>
                    </tr>
                    <tr>
                        <th>SCAN BARCODE<br>ETHEREUM PAYMENT:</th>
                        <td colspan="2"><img height="250" width="250" src="{{ asset('images/eth2.png') }}" alt="Bitcoin Barcode"> </a></td>
                    </tr>
                    <tr>
                        <td colspan=3>&nbsp;
                            @if ($errors->any())
                                <div style="margin-bottom: 5px" class="container">
                                    <div class="alert-message">
                                        <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>
                                        @foreach ($errors->all() as $error)
                                            <li style="color: lightcoral">{{ $error }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </td>

                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <th colspan="3" class=inheader><b>PAYMENT PROOF </b></th>
                    </tr>
                    @if(Session::has('success_message'))
                        <tr>
                            <th>PAYMENT PROOF:</th>
                            <td colspan="2">Proof of Payment awaiting confirmation, If you made a mistake refresh the page then submit again</td>
                        </tr>
                        <tr>
                            <th>PAYMENT PROOF:</th>
                            <td colspan="2">
                                <img id="myImg" height="300" width="300" src="/storage/payment-proof/{{ $deposit_detail->payment_proof }}" alt="Payment Proof">
                            </td>
                        </tr>
                    @else

                    <tr>
                        <th>UPLOAD<br>PAYMENT PROOF:</th>
                        <td colspan="2">
                            <form method="POST" action="{{ route('user_deposits.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input required name="payment_proof_id" value="{{ $deposit_detail->id }}" style="width: 380px; max-width: 100%;" type="hidden">
                                <input required name="payment_proof" style="width: 380px; max-width: 100%;" accept=".jpg, .png, .jpeg" type="file">
                                @error('payment_proof')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                                <input style="width: 200px; margin-top: 18px" type="submit" value="Upload Transaction Proof">
                            </form>
                        </td>
                    </tr>

                            <tr>
                                <th>PAYMENT PROOF:</th>
                                <td colspan="2">
                                    <img height="300" width="300" src="/storage/payment-proof/{{ $deposit_detail->payment_proof }}" alt="Payment Proof">
                                </td>
                            </tr>
                        @endif
                </table>
                <h6 style="color: #e34653; padding-bottom: 5px;">Note that maturity period starts counting from the minute your payment is approved</h6>

           @endif
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>






        </div>
    </div>
</div>
@include('includes.footer')
<script src='{{ asset('js/demo.js') }}'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
    new ClipboardJS('.btn');
</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<!--End of Tawk.to Script-->
</body>
<!----AA290 VISUALHYIP.COM---->
</html>

