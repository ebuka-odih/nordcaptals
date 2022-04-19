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
                                            <h3 class="nk-block-title page-title">Deposit Transaction</h3>

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
                                                    <table class="datatable-init nk-tb-list nk-tb-ulist table-stripped" data-auto-responsive="false">
                                                        <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
{{--                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Detail</span></th>--}}
                                                            <th class="nk-tb-col"><span class="sub-text">Detail</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">User</span></th>
{{--                                                            <th class="nk-tb-col"><span class="sub-text">Amount</span></th>--}}
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Amount</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($deposits as $deposit)
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col">
                                                                <div class="nk-tb-col">
                                                                    <div class="nk-tnx-type">
                                                                        <div class="nk-tnx-type-icon bg-success-dim text-success">
                                                                            <em class="icon ni ni-arrow-up-right"></em>
                                                                        </div>
                                                                        <div class="nk-tnx-type-text">
                                                                            <span class="tb-lead">Deposited Funds</span>
                                                                            <span class="tb-date">{{ date('d-m-y', strtotime($deposit->created_at)) }}</span>
                                                                            <span class="tb-amount"> @convert($deposit->amount) <span>USD</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
{{--                                                                    <div class="user-avatar bg-dark d-none d-sm-flex">--}}
{{--                                                                        <span>{{ $deposit->user->last_name[0] .' '. $deposit->user->first_name[0]   }}</span>--}}
{{--                                                                    </div>--}}
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{ optional($deposit->user)->last_name }} {{ optional($deposit->user)->first_name }}<span class="d-md-none ml-1"></span></span>
                                                                        <span>{{ optional($deposit->user)->email }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <div class="nk-tb-col text-right">
                                                                    <span class="tb-amount">$ @convert($deposit->amount)</span>
                                                                </div>
                                                            </td>

                                                            @if($deposit->status == 'pending')
                                                            <td class="nk-tb-col tb-col-md">
                                                                <div class="dot dot-warning d-md-none"></div>
                                                                <span class="badge badge-sm badge-dim badge-outline-warning d-none d-md-inline-flex">Pending</span>
                                                            </td>
                                                            @else
                                                                <td class="nk-tb-col tb-col-md">
                                                                    <div class="dot dot-warning d-md-none"></div>
                                                                    <span class="badge badge-sm badge-dim badge-outline-success d-none d-md-inline-flex">Approved</span>
                                                                </td>
                                                            @endif
                                                            <td class="nk-tb-col ">

                                                                    <ul class="nk-tb-actions gx-2">

                                                                        <li>
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <ul class="link-list-opt">
                                                                                        @if($deposit->status == 'pending')
                                                                                        <li><a href="{{ route('user_deposit', $deposit) }}"><em class="icon ni ni-done"></em><span>Approve</span></a></li>
                                                                                        <li><a href="{{ route('single_deposit.view', $deposit->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        @else
{{--                                                                                            <li><a href="{{ route('reject_deposit', $deposit) }}"><em class="icon ni ni-cross-round"></em><span>Reject</span></a></li>--}}
                                                                                            <li><a href="{{ route('single_deposit.view', $deposit->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                        @endif
                                                                                            <li>
                                                                                                <form method="POST" action="{!! route('delete_deposit', $deposit->id) !!}" accept-charset="UTF-8">
                                                                                                    <input name="_method" value="DELETE" type="hidden">
                                                                                                    {{ csrf_field() }}

                                                                                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                                                                                        <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                                                                            <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                                                        </button>

                                                                                                    </div>

                                                                                                </form>
                                                                                            </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                            </td>
                                                        </tr><!-- .nk-tb-item  -->
                                                        @endforeach
                                                        </tbody>
                                                    </table>
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
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- Modal Default -->
    <div class="modal fade" tabindex="-1" id="tranxDetails">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body modal-body-md">
                    <div class="nk-modal-head mb-3 mb-sm-5">
                        <h4 class="nk-modal-title title">Transaction <small class="text-primary">#TNX67234</small></h4>
                    </div>
                    <div class="nk-tnx-details">
                        <div class="nk-block-between flex-wrap g-3">
                            <div class="nk-tnx-type">
                                <div class="nk-tnx-type-icon bg-warning text-white">
                                    <em class="icon ni ni-arrow-up-right"></em>
                                </div>
                                <div class="nk-tnx-type-text">
                                    <h5 class="title">+ 0.004560 BTC</h5>
                                    <span class="sub-text mt-n1">15 Oct, 2019 09:45 PM</span>
                                </div>
                            </div>
                            <ul class="align-center flex-wrap gx-3">
                                <li>
                                    <span class="badge badge-sm badge-success">Completed</span>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Transaction Info</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Order ID</span>
                                <span class="caption-text">YWLX52JG73</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Reference ID</span>
                                <span class="caption-text text-break">NIY9TB2JG73YWLXPYM2U8HR</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Transaction Fee</span>
                                <span class="caption-text">0.000002 BTC</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Amount</span>
                                <span class="caption-text">0.004560 BTC</span>
                            </div>
                        </div><!-- .row -->
                        <div class="nk-modal-head mt-sm-5 mt-4 mb-4">
                            <h5 class="title">Transaction Details</h5>
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <span class="sub-text">Transaction Type</span>
                                <span class="caption-text">Deposit</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment Gateway</span>
                                <span class="caption-text align-center">CoinPayments <span class="badge badge-primary ml-2 text-white">Online Gateway</span></span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment From</span>
                                <span class="caption-text text-break">1xA058106537340385c87d264f93</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="sub-text">Payment To</span>
                                <span class="caption-text text-break">1x0385c87d264A05810653734f93</span>
                            </div>
                            <div class="col-lg-12">
                                <span class="sub-text">Transaction Hash</span>
                                <span class="caption-text text-break">Tx156d3342d5c87d264f9359200xa058106537340385c87d264f93</span>
                            </div>
                            <div class="col-lg-12">
                                <span class="sub-text">Details</span>
                                <span class="caption-text">Deposit Fund for Investment</span>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .nk-tnx-details -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- Modal Default -->
    <div class="modal fade" tabindex="-1" id="savedFilter">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Title</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique earum necessitatibus nesciunt! Quia id expedita asperiores voluptatem odit quis fugit sapiente assumenda sunt voluptatibus atque facere autem, omnis explicabo.</p>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Footer Text</span>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
  @include('admin.includes.script')
</body>

</html>
