@extends('dashboard2.layouts.app')
@section('content')

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h3 class="text-yellow">Share Fund.</h3>
                            <a  href="{{ route('user.share.create') }}" class="btn btn-sm btn-neutral"><i class="fa fa-arrow-right"></i> Create request</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="container">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
            <div class="row">

                    <div class="table-responsive py-4">
                        <table class="table table-flush table-dark" id="datatable-basic">
                            <thead class="thead-dark">
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>BTC</th>
                                <th>Sender</th>
                                <th>Receiver</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($share_fund as $share)
                                <tr>
                                    <td>{{ date('Y/m/d h:i A', strtotime($share->created_at)) }}</td>
                                    <td>${{ $share->amount }}</td>
                                    <td>{{ auth()->user()->btc_value($share->amount) }} BTC</td>
                                    <td>{{ $share->user->username }}</td>
                                    <td>{{ $share->receiver }}</td>
{{--                                    <td><a href="{{ route('user.user_deposits.view', $deposits->id) }}" class="btn btn-sm btn-primary">View</a></td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

            </div>


            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>
    <!-- Start of boomchart Zendesk Widget script -->

@endsection
