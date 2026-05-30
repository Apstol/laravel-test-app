@extends('layout')

@section('content')

<h2 class="mb-3">PCs</h2>

<a href="{{ route('pcs.create') }}" class="btn btn-primary mb-3">
    Add New PC
</a>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Ram (GB)</th>
        <th>HD (GB)</th>
        <th>Model</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    @foreach ($pcs as $pc)
        <tr>
            <td>{{ $pc->id }}</td>
            <td>{{ $pc->ram }}</td>
            <td>{{ $pc->hd }}</td>
            <td>{{ $pc->model->name }}</td>
            <td>{{ $pc->price }}</td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('pcs.show', $pc->id) }}">View</a>
                <a class="btn btn-warning btn-sm" href="{{ route('pcs.edit', $pc->id) }}">Edit</a>

                <form action="{{ route('pcs.destroy', $pc->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{ $pcs->links() }}

@endsection
