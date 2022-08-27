@extends('dashboard2.layouts.app')
@section('content')
{{--    <style>--}}
{{--        input[type=radio] {--}}
{{--            padding-top: 30px;--}}
{{--            display: block;--}}
{{--            position: relative;--}}
{{--            opacity: 1.0;--}}
{{--        }--}}
{{--    </style>--}}
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Deposits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Investment Plans</li>
            </ol>
        </nav>
        <div class="content-wrapper">
            <h2 class="text text-center mb-3">Pick A Plan To Invest</h2>
            <div class="row">
                @foreach($invest_plans as $plan)
                <div class="col-md-6">
                    <form action="">
                        <div class="pricing card-group flex-column flex-md-row mb-3">

                            {{--                            <input required type=radio name='plan_id' value='{{ $plan->id }}' >--}}
                            <div class="card card-pricing border-0 bg-dark text-center mb-4">

{{--                                            <input  required type=radio name='plan_id' value='{{ $plan->id }}'>--}}
                            <div class="form-check">
                                <input style="display: block" required type=radio name='plan_id' value='{{ $plan->id }}' id="exampleRadios1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                            </div>
                                <div class="card-header bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-7">
                                            <!-- Title -->
                                            <h4 class="text-uppercase ls-1 text-white py-3 mb-0 text-left">{{ $plan->name }}</h4>
                                        </div>
                                        <div class="col-lg-8 col-12 text-right">
                                            <a href="{{ route('user.plan_details', $plan->slug) }}"  class="btn btn-sm btn-default">Purchase plan</a>
{{--                                            <input required type=radio name='plan_id' value='{{ $plan->id }}'>--}}
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body px-lg-7">
                                    <div class="display-2 text-yellow">Min: ${{ $plan->min_deposit }}</div>
                                    <div class="display-2 text-yellow">Max: ${{ $plan->max_deposit }}</div>
                                    <span class="text-muted">For  {{ $plan->term_days }} Days(s)</span>
                                    <ul class="list-unstyled my-4">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="pl-2">{{ $plan->daily_interest }}% daily top up</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="pl-2">Total ROI {{ $plan->total_return() }}% </span>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>
                                </div>
                            </div>



                        </div>
                    </form>

                </div>
                @endforeach
            </div>

            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>

@endsection
