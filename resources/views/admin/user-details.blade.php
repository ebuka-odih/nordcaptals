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
                                            <h3 class="nk-block-title page-title">User / <strong class="text-primary small">{{ $user->last_name .' '. $user->first_name }}</strong></h3>
                                            <h3 class="nk-block-title page-title">Account Balance: <strong class="text-primary small"> {{ $user->acct_wallet }}</strong></h3>

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
                                                        <a class="nav-link active" href="{{ route('show-user', $user->id) }}"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('user_withdraw.show', $user->id) }}"><em class="icon ni ni-repeat"></em><span>Withdrawals</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('user_deposit', $user->id) }}"><em class="icon ni ni-activity"></em><span>Deposit</span></a>
                                                    </li>

                                                </ul><!-- .nav-tabs -->
                                                <div class="card-inner">
                                                    <div class="nk-block">

                                                        <div class="nk-block-head">
                                                            <h5 class="title">Personal Information</h5>
                                                            <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">First Name</span>
                                                                    <span class="profile-ud-value">{{ $user->first_name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Username</span>
                                                                    <span class="profile-ud-value text text-capitalize">{{ $user->username }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Surname</span>
                                                                    <span class="profile-ud-value text text-capitalize">{{ $user->last_name }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Email Address</span>
                                                                    <span class="profile-ud-value">{{ $user->email }}</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line">
                                                            <h6 class="title overline-title text-base">Additional Information</h6>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Joining Date</span>
                                                                    <span class="profile-ud-value">{{ date('d-M-Y h:i A', strtotime($user->created_at)) }}</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->

                                                    <div class="nk-divider divider md"></div>
                                                    <div class="nk-block">

                                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                            <h5 class="title">Secret Info</h5>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="bq-note">
                                                            <div class="bq-note-item">

                                                                <div class="bq-note-text">
                                                                    <h4 class=" mb-4">Wallet ID</h4>
                                                                    <p>{{ $user->btc_wallet }}</p>
                                                                </div>

                                                            </div><!-- .bq-note-item -->
                                                            <hr>
                                                            <br>
                                                            <h6 class="text text-primary">Credit User's Account</h6>
                                                            <form class="mt-5" action="{{ route('update_acct.store', $user->id) }}" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-8">
                                                                        <label>Enter Amount</label>
                                                                        <input type="number" name="bonus" class="form-control">
                                                                    </div>

                                                                </div>
                                                                <div class="col-6 mt-2">
                                                                    <button class="btn btn-primary" type="submit">Send</button>
                                                                </div>



                                                            </form>

                                                        </div><!-- .bq-note -->
                                                    </div><!-- .nk-block -->
                                                </div><!-- .card-inner -->
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
