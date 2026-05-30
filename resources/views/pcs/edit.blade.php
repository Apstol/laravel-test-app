@extends('layout')

@section('content')

<h2>Edit PC {{ $pc->id }}</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pcs.update', $pc->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="model_id">Model:</label>
        <select id="model_id" name="model_id" required>
            @foreach($models as $model)
                <option value="{{ $model->id }}" @if($pc->model->id === $model->id) disabled selected @endif >
                    {{ $model->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Ram (GB)</label>
        <input type="number" value="{{ $pc->ram }}" name="ram" min="0" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>HD (GB)</label>
        <input type="number" value="{{ $pc->hd }}" name="hd" min="0" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" value="{{ $pc->price }}" name="price" min="0" step=".01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Update PC
    </button>
</form>

<a href="{{ route('pcs.index') }}" class="btn btn-secondary mt-3">
    Back
</a>

@endsection
