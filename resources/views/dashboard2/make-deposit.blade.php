@extends('dashboard2.layouts.app')
@section('content')
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

                <div class="col-md-10 col-lg-12">
                    <form method='POST' action="{{ route('user.deposit.store', $invest_plans->slug) }}">

                        @csrf
                    <div class="pricing card-group flex-column flex-md-row mb-3">
                        <div class="card card-pricing border-0 bg-dark text-center mb-4">
                            <div class="card-header bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-7">
                                        <!-- Title -->
                                        <h4 class="text-uppercase ls-1 text-white py-3 mb-0 text-left">{{ $invest_plans->name }}</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body px-lg-7">
                                <div class="display-2 text-yellow">Min: ${{ $invest_plans->min_deposit }}</div>
                                <div class="display-2 text-yellow">Max: ${{ $invest_plans->max_deposit }}</div>
{{--                                <span class="text-muted"></span>--}}
                                <ul class="list-unstyled my-4">
                                    <li>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon icon-xs icon-shape shadow rounded-circle text-yellow">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="pl-2">{{ $invest_plans->daily_interest }}% daily top up</span>
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
                                                <span class="pl-2">Total ROI {{ $invest_plans->total_return() }}% </span>
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
                                                <span class="pl-2">For  {{ $invest_plans->term_days }} Days(s) </span>
                                            </div>
                                        </div>

                                    </li>

                                    <input required type="hidden" name='plan_id' value='{{ $invest_plans->slug }}' >
                                </ul>
                            </div>
                        </div>
                    </div>


                        @if(session()->has('disapproved'))
                            <div class="alert alert-danger col-md-7 offset-lg-2 mb-3">
                                {{ session()->get('disapproved') }}
                            </div>
                        @endif

                        <div class="mb-3 col-md-7 offset-lg-2 col-lg-5">
                            <label for="exampleFormControlInput1" class="form-label">Amount To Invest</label>
                            <input required type="number" class="form-control" name="amount" id="exampleFormControlInput1" placeholder="$$$">
                        </div>
                        <div class="mb-3 col-md-3 offset-lg-2">
                           <button type="submit" class="btn btn-primary">Invest</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>

@endsection
