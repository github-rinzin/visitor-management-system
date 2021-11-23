@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.session')
    <div class="row">
        <div class="col-md-3 shadow p-4 mx-auto">
            <h2 class="display-5">Checkout</h2>
            @include('visitor.form')
        </div>
        <div class="col-md-8 shadow p-4 mx-auto">
            <h2 class="display-5">Daily Visitor</h2>
            @include('visitor.table', ['visitors' => $visitors])
        </div>
    </div>
</div>
@endsection
