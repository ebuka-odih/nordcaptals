@extends('dashboard2.layouts.app')
@section('content')
    <!-- header end -->

    <div class="container-fluid mt--6">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-header bg-transparent">
                            <h3 class="mb-0 text-white">Referrals</h3>
                        </div>
                        <div class="table-responsive py-4">
                            <table class="table align-items-center table-flush table-dark">
                                <thead class="thead-dark">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
{{--                                    <th>Created</th>--}}
{{--                                    <th>Updated</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(auth()->user()->all_referrals() as $ref)
                                <tr>
                                    <td>{{ $ref->first_name}}</td>
                                    <td>{{ $ref->last_name}}</td>
                                    <td>{{ $ref->username}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer begin -->
            <footer class="footer pt-0">

            </footer>
        </div>
    </div>
@endsection
