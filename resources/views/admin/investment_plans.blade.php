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
                                            <h2 class="nk-block-title fw-normal">List of Investment Plans</h2>

                                        </div>
                                    </div><!-- nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <a href="{{ route('investment-plans.create') }}" class="btn btn-primary mb-2">Add Investment Plans</a>
                                        <div class="card card-bordered card-preview">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Investment Name</th>
                                                        <th scope="col">Daily Interest</th>
                                                        <th scope="col">Term Days</th>
                                                        <th scope="col">Min Deposit</th>
                                                        <th scope="col">Max Deposit</th>
                                                        <th scope="col">Deposit Return</th>
                                                        <th scope="col">Total Return</th>
                                                        <th scope="col"> Edit</th>
                                                        <th scope="col"> Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($invest_plans as $invest_plan)
                                                    <tr>
                                                        <th scope="row">{{ $invest_plan->id }}</th>
                                                        <td>{{ $invest_plan->name }}</td>
                                                        <td>{{ $invest_plan->daily_interest }}%</td>
                                                        <td>{{$invest_plan->term_days  }}</td>
                                                        <td>${{ $invest_plan->min_deposit }}</td>
                                                        <td>${{ $invest_plan->max_deposit }}</td>
                                                        <td>{{ $invest_plan->deposit_return }}</td>
                                                        <td>{{ $invest_plan->total_return() }}%</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top" href="{{ route('investment-plans.edit', $invest_plan->id ) }}" class="btn btn-primary btn-sm" >
                                                                <span class="la la-edit" aria-hidden="true"></span>Edit
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <form method="POST" action="{!! route('investment-plans.destroy', $invest_plan->id) !!}" accept-charset="UTF-8">
                                                                <input name="_method" value="DELETE" type="hidden">
                                                                {{ csrf_field() }}

                                                                <div class="btn-group btn-group-xs pull-right" role="group">


                                                                    <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Country?&quot;)">
                                                                        <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                    </button>

                                                                </div>

                                                            </form>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div><!-- .card-preview -->
                                    </div><!-- nk-block -->




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
