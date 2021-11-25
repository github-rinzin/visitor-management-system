@extends('layouts.app')

@section('content')
<form action="{{ route('checkouts.store') }}" method="post" class=" w-75 mx-auto">
    @csrf
    <div class="form-group">
        <label for="">Token</label>
        <input type="text" name="token" class="form-control form-control-sm w-25">
    </div>
    <button type="submit" class="btn btn-sm btn-success">Checkout</button>
</form>
@endsection