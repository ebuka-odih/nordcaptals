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
                                            <h3 class="nk-block-title page-title">User / <strong class="text-primary small">{{ $user_deposit->last_name .' '. $user_deposit->first_name }}</strong></h3>
                                            <h3 class="nk-block-title page-title">Account Balance: <strong class="text-primary small"> {{ $user_deposit->acct_wallet }}</strong></h3>
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
                                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('show-user', $user_deposit->id)}}"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('user_withdraw.show', $user_deposit->id) }}"><em class="icon ni ni-repeat"></em><span>Withdrawals</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('user_deposit.show', $user_deposit->id) }}"><em class="icon ni ni-activity"></em><span>Deposit</span></a>
                                                    </li>

                                                </ul><!-- .nav-tabs -->
                                                <div class="nk-content ">
                                                    <div class="container-fluid">
                                                        <div class="nk-content-inner">
                                                            <div class="nk-content-body">
                                                                <div class="nk-block-head nk-block-head-sm">
                                                                    <div class="nk-block-between g-3">
                                                                        <div class="nk-block-head-content">
                                                                            <h3 class="nk-block-title page-title">Deposit History</h3>

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

                                                                                            {{--                                                            <th class="nk-tb-col"><span class="sub-text">Amount</span></th>--}}
                                                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Amount</span></th>
                                                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Transaction Hash</span></th>
                                                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>

                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        @foreach($user_deposit->deposits as $deposit)
                                                                                            <tr class="nk-tb-item">
                                                                                                <td class="nk-tb-col">
                                                                                                    <div class="nk-tb-col">
                                                                                                        <div class="nk-tnx-type">
                                                                                                            <div class="nk-tnx-type-icon bg-success-dim text-success">
                                                                                                                <em class="icon ni ni-arrow-up-right"></em>
                                                                                                            </div>
                                                                                                            <div class="nk-tnx-type-text">
                                                                                                                <span class="tb-lead">Withdraw Funds</span>
                                                                                                                <span class="tb-date">{{ date('d-m-y', strtotime($deposit->created_at)) }}</span>
                                                                                                                <span class="tb-amount"> @convert($deposit->amount) <span>USD</span></span>
                                                                                                            </div>
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
                                                                                                <td class="nk-tb-col tb-col-mb">
                                                                                                    <div class="nk-tb-col text-right">
                                                                                                        <span class="tb-amount">({{ $deposit->hash_code }})</span>
                                                                                                    </div>
                                                                                                </td>
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
                                                                                                                            <li><a href="{{ route('reject_deposit', $deposit) }}"><em class="icon ni ni-cross-round"></em><span>Reject</span></a></li>
                                                                                                                            <li><a href="{{ route('single_deposit.view', $deposit->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                                                        @endif
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
    @include('admin.includes.script')
</body>

</html>
