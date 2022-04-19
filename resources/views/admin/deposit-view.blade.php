<!DOCTYPE html>
<html lang="zxx" class="js">

@include('admin.includes.head')
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

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
        @include('admin.includes.sidebar')

        <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
            @include('admin.includes.header')

            <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">User / <strong class="text-primary small">{{ optional($deposit_detail->user)->last_name .' '. optional($deposit_detail->user)->first_name }}</strong></h3>
                                            <h3 class="nk-block-title page-title">Account Balance: <strong class="text-primary small"> {{ $deposit_detail->user->acct_wallet }}</strong></h3>

                                            <div class="nk-block-des text-soft">
                                                <ul class="list-inline">
{{--                                                    <li>User ID: <span class="text-base">UD003054</span></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{ route('manage-users') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                @if($deposit_detail->status == 'pending')
                                                <div class="card-inner">
                                                    <div class="nk-block">

                                                        <div class="nk-block-head">
                                                            <h5 class="title">Transaction Information</h5>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">CREATED DATE </span>
                                                                    <span class="profile-ud-value"><strong>{{ date('d.M.y', strtotime($deposit_detail->created_at)) }}</strong></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">INVESTMENT PLAN </span>
                                                                    <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">INVESTED AMOUNT</span>
                                                                    <span class="profile-ud-value text text-capitalize">${{ $deposit_detail->amount }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">ROI</span>
                                                                    <span class="profile-ud-value text text-capitalize">${{ $profit }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">TRANSACTION DATE</span>
                                                                    <span class="profile-ud-value">{{ date('d-M-y', strtotime($deposit_detail->created_at)) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">INTERVAL</span>
                                                                    <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->term_days }} Days</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">DAILY PROFIT</span>
                                                                    <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">TOTAL PROFIT</span>
                                                                    <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->total_return }}(%)</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">TRANSACTION STATUS</span>
                                                                    @if($deposit_detail->status == 'pending')
                                                                    <span class="btn btn-outline-danger">Pending</span>
                                                                    @else
                                                                        <span class="btn btn-outline-success">Approved</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->

                                                    <div class="nk-divider divider md"></div>
                                                    <div class="nk-block">

                                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                            <h5 class="title">Payment Proof</h5>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="bq-note">
                                                            <div class="bq-note-item">

                                                                <div class="bq-note-text">
                                                                    <img id="myImg" height="300" width="300" src="/storage/payment-proof/{{ $deposit_detail->payment_proof }}" alt="Payment Proof">
                                                                </div>
                                                                <div class="bq-note-meta">

                                                                </div>
                                                            </div><!-- .bq-note-item -->
                                                            <ul class="link-list-opt">
                                                                <li><a class="btm btn-success col-lg-3 col-md-6" href="{{ route('approve_deposit', $deposit_detail) }}"><em class="icon ni ni-done"></em><span>Click to Approve</span></a></li>
                                                            </ul>

                                                        </div><!-- .bq-note -->
                                                    </div><!-- .nk-block -->
                                                </div><!-- .card-inner -->
                                                @else
                                                    <div class="card-inner">
                                                        <div class="nk-block">

                                                            <div class="nk-block-head">
                                                                <h5 class="title">Transaction Information</h5>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="profile-ud-list">
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">APPROVED DATE </span>
                                                                        <span class="profile-ud-value">{{ date('d.M.y', strtotime($deposit_detail->approved_date)) }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">INVESTMENT PLAN </span>
                                                                        <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->name }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">INVESTED AMOUNT</span>
                                                                        <span class="profile-ud-value text text-capitalize">${{ $deposit_detail->amount }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">ROI</span>
                                                                        <span class="profile-ud-value text text-capitalize">${{ $profit }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">START DATE</span>
                                                                        <span class="profile-ud-value">{{ date('d-M-y', strtotime($deposit_detail->approved_date)) }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">ENDING DATE</span>
                                                                        <span class="profile-ud-value">{{ date('d-M-y', strtotime($deposit_detail->end_date)) }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">INTERVAL</span>
                                                                        <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->term_days }} Days</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">DAILY PROFIT</span>
                                                                        <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->daily_interest }}(%)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">TOTAL PROFIT</span>
                                                                        <span class="profile-ud-value">{{ optional($deposit_detail->investment_plan)->total_return }}(%)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">TRANSACTION STATUS</span>
                                                                        @if($deposit_detail->status == 'pending')
                                                                            <span class="btn btn-outline-danger">Pending</span>
                                                                        @else
                                                                            <span class="btn btn-outline-success">Approved</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div><!-- .profile-ud-list -->
                                                        </div><!-- .nk-block -->

                                                        <div class="nk-divider divider md"></div>
                                                        <div class="nk-block">

                                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                <h5 class="title">Payment Proof</h5>
                                                            </div><!-- .nk-block-head -->
                                                            <div class="bq-note">
                                                                <div class="bq-note-item">

                                                                    <div class="bq-note-text">
                                                                        <img id="myImg" height="400" width="300" src="/storage/payment-proof/{{ $deposit_detail->payment_proof }}" alt="Payment Proof">
                                                                    </div>

                                                                    <div class="bq-note-meta">

                                                                    </div>
                                                                </div><!-- .bq-note-item -->
                                                                <ul class="link-list-opt">
                                                                    @if($deposit_detail->status == 'pending')
                                                                        <li><a class="btm btn-success col-lg-3 col-md-6" href="{{ route('approve_deposit', $deposit_detail) }}"><em class="icon ni ni-done"></em><span>Click to Approve</span></a></li>
                                                                    @else
                                                                        <li>This Transaction has been approved</li>
                                                                    @endif
                                                                </ul>

                                                            </div><!-- .bq-note -->
                                                        </div><!-- .nk-block -->
                                                    </div><!-- .card-inner -->
                                                @endif
                                            </div><!-- .card-content -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('admin.includes.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->

{{--    <div id="myModal" class="modal">--}}
{{--        <span class="close">&times;</span>--}}
{{--        <img class="modal-content" id="img01">--}}
{{--        <div id="caption"></div>--}}
{{--    </div>--}}
    @include('admin.includes.script')

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
</body>

</html>
