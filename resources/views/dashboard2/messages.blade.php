@extends('dashboard2.layouts.app')
@section('content')
    <style>
        body{
            background: #edf1f5;
            margin-top:20px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }
        .mailbox-widget .custom-tab .nav-item .nav-link {
            border: 0;
            color: #fff;
            border-bottom: 3px solid transparent;
        }
        .mailbox-widget .custom-tab .nav-item .nav-link.active {
            background: 0 0;
            color: #fff;
            border-bottom: 3px solid #2cd07e;
        }
        .no-wrap td, .no-wrap th {
            white-space: nowrap;
        }
        .table td, .table th {
            padding: .9375rem .4rem;
            vertical-align: top;
            border-top: 1px solid rgba(120,130,140,.13);
        }
        .font-light {
            font-weight: 300;
        }
    </style>
    <!-- Page content -->
    <div class="container-fluid mt--6">

        <div class="content-wrapper">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-body bg-primary text-white mailbox-widget pb-0">
                                <h2 class="text-white pb-3">Your Messagebox</h2>
                                <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                                            <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                            <span class="d-none d-md-block"> INBOX</span>
                                        </a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">--}}
{{--                                            <span class="d-block d-md-none"><i class="ti-export"></i></span>--}}
{{--                                            <span class="d-none d-md-block">Unread</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                    <div>
                                        <!-- Mail list-->
                                        <div class="table-responsive">
                                            <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                <tbody>
                                                <!-- row -->
                                                @foreach($messages as $message)
                                                <tr class="">
                                                    <!-- Message -->
                                                    <td>
                                                        @if($message->read == 1)
                                                        <a class="link" href="{{ route('user.show_messages', $message->id) }}">
                                                           <h2 class="font-light text-dark"> {{ $message->title }}</h2>
                                                        </a>
                                                        @else
                                                            <a class="link" href="{{ route('user.show_messages', $message->id) }}">
                                                                <strong class=" text-dark"><h2>{{ $message->title }}</h2> </strong>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <!-- Attachment -->
                                                    <!-- Time -->
                                                    <td class="text-muted font-light"><h3>{{ date('d/M/y', strtotime($message->created_at)) }}</h3></td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
