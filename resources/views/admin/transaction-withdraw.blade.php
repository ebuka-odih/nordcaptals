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
                                                        @foreach($user_withdraw->withdraws as $withdraw)
                                                            <tr class="nk-tb-item">
                                                                <td class="nk-tb-col">
                                                                    <div class="nk-tb-col">
                                                                        <div class="nk-tnx-type">
                                                                            <div class="nk-tnx-type-icon bg-success-dim text-success">
                                                                                <em class="icon ni ni-arrow-up-right"></em>
                                                                            </div>
                                                                            <div class="nk-tnx-type-text">
                                                                                <span class="tb-lead">Deposited Funds</span>
                                                                                <span class="tb-date">{{ date('d-m-y', strtotime($withdraw->created_at)) }}</span>
                                                                                <span class="tb-amount"> @convert($withdraw->amount) <span>USD</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-dark d-none d-sm-flex">
                                                                            <span>{{ $withdraw->users->last_name[0] .' '. $withdraw->users->first_name[0]   }}</span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">{{ $withdraw->users->last_name }} {{ $withdraw->users->first_name }}<span class="d-md-none ml-1"></span></span>
                                                                            <span>{{ $withdraw->users->email }}</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="nk-tb-col tb-col-mb">
                                                                    <div class="nk-tb-col text-right">
                                                                        <span class="tb-amount">$ @convert($withdraw->amount)</span>
                                                                                                                                            <span class="tb-amount-sm">{{ $deposit->btc }} <span>BTC</span></span>
                                                                    </div>
                                                                </td>

                                                                @if($withdraw->status == 'pending')
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
                                                                                        <li><a href="{{ route('user_withdraw', $withdraw) }}"><em class="icon ni ni-done"></em><span>Approve</span></a></li>
                                                                                        <li><a href="{{ route('single_withdraw.view', $withdraw->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>

                                                                                        <li>
                                                                                            <form method="POST" action="{!! route('delete_withdrawal', $withdraw->id) !!}" accept-charset="UTF-8">
                                                                                                <input name="_method" value="DELETE" type="hidden">
                                                                                                {{ csrf_field() }}

                                                                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                                                                    <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete User?&quot;)">
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
