@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('staffs.store') }}">
@csrf
<input type="text" name="full_name" class="form-control mb-2" placeholder="Full Name">
<input type="text" name="tel" class="form-control mb-2" placeholder="Telephone">
<button class="btn btn-success">Save</button>
</form>
@endsection
