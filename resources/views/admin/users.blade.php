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
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin-dashboard') }}"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Users</h2>

                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">

                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist table-stripped" data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Date</span></th>
                                                            <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Username</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Wallet ID</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $user)

                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ date('d-M-Y', strtotime($user->created_at)) }}</span>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-dark d-none d-sm-flex">
                                                                        <span class="text text-capitalize">{{ $user->last_name[0] .' '. $user->first_name[0] }}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">{{ $user->last_name .' '. $user->first_name }}<span class="d-md-none ml-1"></span></span>
                                                                        <span>{{ $user->email }}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb">
                                                                <span>{{ $user->username }}</span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-md">
                                                                <span>{{ $user->btc_wallet }}</span>
                                                            </td>

                                                            <td class="nk-tb-col ">

                                                                <ul class="nk-tb-actions gx-2">

                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt">
                                                                                    <li><a href="{{ route('show-user', $user->id) }}" ><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                    <li>
                                                                                        <form method="POST" action="{!! route('delete_user', $user->id) !!}" accept-charset="UTF-8">
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
                                                            <td></td>
                                                        </tr><!-- .nk-tb-item  -->

                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                </div><!-- .components-preview -->
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
