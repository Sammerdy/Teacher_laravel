@extends('layouts.app')

@section('content')
<a href="{{ route('staffs.create') }}" class="btn btn-primary mb-2">Add Teacher</a>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tel</th>
        <th>Action</th>
    </tr>
    @foreach($teachers as $teacher)
    <tr>
        <td>{{ $teacher->tid }}</td>
        <td>{{ $teacher->full_name }}</td>
        <td>{{ $teacher->tel }}</td>
        <td>
            <a href="{{ route('staffs.show', $teacher->tid) }}" class="btn btn-info btn-sm">
                View
            </a>

            <a href="{{ route('staffs.edit', $teacher->tid) }}" class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('staffs.destroy', $teacher->tid) }}"
                method="POST"
                style="display:inline-block"
                onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    Delete
                </button>
            </form>
        </td>

    </tr>
    @endforeach
</table>
@endsection
