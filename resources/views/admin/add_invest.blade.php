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
<h2 class="nk-block-title fw-normal">Add Your Investment Plan</h2>

</div>
</div><!-- .nk-block -->

<div class="nk-block nk-block-lg">

<div class="card card-bordered">
<div class="card-inner">

<form action="{{ route('investment-plans.store') }}" method="POST">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="full-name-1">Investment Name</label>
                <div class="form-control-wrap">
                    <input name="name" type="text" class="form-control" id="full-name-1">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="email-address-1">Daily Interest</label>
                <div class="form-control-wrap">
                    <input name="daily_interest" type="number" min="0" value="0" step=".01" class="form-control" />
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" >Min Deposit</label>
                <div class="form-control-wrap">
                    <input name="min_deposit" type="number" class="form-control" id="pay-amount-1">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label">Max Deposit</label>
                <div class="form-control-wrap">
                    <input name="max_deposit" type="number" class="form-control" id="pay-amount-1">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label" for="phone-no-1">Term Days</label>
                <div class="form-control-wrap">
                    <input name="term_days" type="number" class="form-control" id="phone-no-1">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label" for="phone-no-1">Deposit Return</label>
                <div class="form-control-wrap">
                    <select class="form-control" name="deposit_return">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <small>Should they have their deposit returned to them?</small>
            </div>
        </div>
{{--        <div class="col-lg-4">--}}
{{--            <div class="form-group">--}}
{{--                <label class="form-label" for="phone-no-1">Total Return</label>--}}
{{--                <div class="form-control-wrap">--}}
{{--                    <input name="total_return" type="text" class="form-control" id="phone-no-1">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="col-12">
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div><!-- .nk-block -->

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
