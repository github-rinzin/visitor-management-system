@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('components.session')
    <div class="row">
        <div class="col col-md-10 shadow p-4 mx-auto rounded-sm">
            <h2 class="display-5">Register</h2>
            @include('visitor.form')
        </div>
    </div>
</div>
@endsection
