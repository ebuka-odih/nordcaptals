<!DOCTYPE html>
<html lang="zxx" class="js">

@include('admin.includes.head')

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
                                            <h3 class="nk-block-title page-title">Withdraw Transaction</h3>

                                        </div><!-- .nk-block-head-content -->

                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                            </div>


                            <div class="nk-block mt-5">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="nk-block nk-block-lg">

                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div>
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">

                                                                <div class="modal-body modal-body-md">
                                                                    <div class="nk-modal-head mb-3 mb-sm-5">
                                                                        <h4 class="nk-modal-title title">Withdraw Transaction Details of ({{ $user->last_name . ' '. $user->first_name }})</h4>
                                                                    </div>
                                                                    <div class="nk-tnx-details">
                                                                        <div class="nk-block-between flex-wrap g-3">
                                                                            <div class="nk-tnx-type">
                                                                                @if($withdraw->status == 'pending')
                                                                                <div class="nk-tnx-type-icon bg-warning text-white">
                                                                                    <em class="icon ni ni-arrow-up-right"></em>
                                                                                </div>
                                                                                @else
                                                                                    <div class="nk-tnx-type-icon bg-success text-white">
                                                                                        <em class="icon ni ni-arrow-up-right"></em>
                                                                                    </div>
                                                                                @endif
                                                                                <div class="nk-tnx-type-text">
                                                                                    <h5 class="title">$ @convert($withdraw->amount)</h5>
                                                                                    <span class="sub-text mt-n1">{{ date('d-M-y', strtotime( $withdraw->created_at)) }}</span>
                                                                                </div>
                                                                            </div>
                                                                            <ul class="align-center flex-wrap gx-3">
                                                                                <li>
                                                                                    @if($withdraw->status != 'pending')
                                                                                    <span class="badge badge-sm badge-success">Approved</span>
                                                                                    @else
                                                                                        <span class="badge badge-sm badge-warning">Pending</span>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                                                                            <h5 class="title">Transaction Info</h5>
                                                                        </div>
                                                                        <div class="row gy-3">
                                                                            <div class="col-lg-6">
                                                                                <span class="sub-text">User</span>
                                                                                <span class="caption-text">{{ $user->last_name . ' '. $user->first_name }}</span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <span class="sub-text">Transaction Type</span>
                                                                                <span class="caption-text">Withdrawal</span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <span class="sub-text">Amount</span>
                                                                                <span class="caption-text">@convert($withdraw->amount) USD</span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <span class="sub-text">Payment To</span>
                                                                                <span class="caption-text text-break">{{ $user->btc_wallet }}</span>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <span class="sub-text">Hash ID</span>
                                                                                <span class="caption-text text-break">{{ $withdraw->code_hash }}</span>
                                                                            </div>
                                                                        </div><!-- .row -->
                                                                        @if($withdraw->status == 'pending')
                                                                        <hr>
                                                                        <a class="btn btn-secondary mb-5" href="{{ route('approve_withdraw', $withdraw) }}">Click to Approve Transaction</a>
                                                                        <div>
                                                                            @if ($errors->any())
                                                                                <div style="margin-bottom: 5px" class="container">
                                                                                    <div class="alert-message">
                                                                                        <span><strong style="color: white">Some Errors Prevented Your Form From Submitting</strong></span>
                                                                                        @foreach ($errors->all() as $error)
                                                                                            <li class="text text-danger">{{ $error }}</li>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    @endif
                                                                            <form action="{{ route('update_hash.store', $withdraw->id) }}" method="POST">
                                                                                @csrf
                                                                                <div class="form-group">
                                                                                    <label>Enter Transaction Hash</label>
                                                                                    <input type="text" name="code_hash" class="form-control" placeholder="Enter Alternative Transaction hash">
                                                                                </div>
                                                                                <button class="btn btn-primary col-md-4 text text-center" type="submit">Click To Change Hash</button>
                                                                            </form>
                                                                        </div>
                                                                        @else
                                                                        @endif
                                                                    </div><!-- .nk-tnx-details -->
                                                                </div><!-- .modal-body -->
                                                            </div><!-- .modal-content -->
                                                        </div><!-- .modal-dialog -->
                                                    </div><!-- .modal -->
                                                    <!-- Modal Default -->

                                                </div>
                                            </div><!-- .card-preview -->
                                        </div> <!-- nk-block -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
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
    @include('admin.includes.script')
</body>

</html>
