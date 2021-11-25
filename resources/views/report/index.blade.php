@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.session')
    <div class="row">
        <div class="col">
            <form id="get-report-form" action="#" class="d-flex flex-row align-items-end w-25 mx-auto" method="GET" >
                @csrf
                @method('get')
                <div class="form-group">
                    <label for="">Start Date</label>
                    <input id="start_date" type="date" name="start_date" value="" class="form-control form-control-sm">
                </div>

                <div class="form-group ml-2">
                    <label for="">End Date</label>
                    <input id="end_date" type="date" name="end_date" value="" class="form-control form-control-sm">
                </div>
                <div class="form-group ml-2">
                    <button id="get-report-btn" type="submit" class="btn btn-sm btn-success">Fetch</button>
                </div>
            </form>
        </div>
        <div class="col">
        <!-- <div class="col">
            <form action="{{ route('checkouts.store') }}" method="post" class=" w-75 mx-auto d-flex flex-row align-items-end">
                @csrf
                <div class="form-group">
                    <label for="">Token</label>
                    <input type="text" name="token" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success ml-3">Checkout</button>
                </div>
            </form>
        </div> -->
        </div>
    </div>

    <div class="row">
        <!-- <div class="col">
            <form id="get-report-form" action="#" class=" shadow rounded-sm p-4" method="GET" >
                @csrf
                @method('get')
                <div class="form-group">
                    <label for="">Start Date</label>
                    <input id="start_date" type="date" name="start_date" value="" class="form-control form-control-sm">
                </div>

                <div class="form-group ml-2">
                    <label for="">End Date</label>
                    <input id="end_date" type="date" name="end_date" value="" class="form-control form-control-sm">
                </div>
                <div class="form-group ml-2">
                    <button id="get-report-btn" type="submit" class="btn btn-sm btn-success">Fetch</button>
                </div>
            </form>
        </div> -->
        <div class="col">
            <div class="rounded-sm p-3">
                @include('report.table', ['visitors' => $visitors])
            </div>
        </div>
    </div>


</div>
@endsection


