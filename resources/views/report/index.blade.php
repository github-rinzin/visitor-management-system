@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.session')
    <div class="row">
        <div class="col col-md-3">
            <form class=" shadow rounded-sm p-4 ">
                <div class="form-group">
                    <label for="">Start Date</label>
                    <input type="date" name="start_date" value="" class="form-control form-control-sm">
                </div>

                <div class="form-group ml-2">
                    <label for="">Start Date</label>
                    <input type="date" name="start_date" value="" class="form-control form-control-sm">
                </div>
                <div class="form-group ml-2">
                    <button type="submit" class="btn btn-sm btn-success">Fetch</button>
                </div>
            </form>
            <!-- <div class="shadow rounded-sm p-3 mt-4">
                <button class="btn btn-warning m-2">Download as PDF</button>
                <button class="btn btn-primary m-2">Download as Excel</button>
            </div> -->

        </div>
        <div class="col col-md-9">
            <div class="shadow rounded-sm p-3">
                @include('report.table', ['visitors' => $visitors])
            </div>
        </div>
    </div>


</div>
@endsection


