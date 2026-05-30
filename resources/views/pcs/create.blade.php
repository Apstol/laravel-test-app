@extends('layout')

@section('content')

<h2>Add New PC</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pcs.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="model_id">Model:</label>
        <select id="model_id" name="model_id" required>
            <option value="" disabled selected>Select the model</option>
            @foreach($models as $model)
                <option value="{{ $model->id }}">
                    {{ $model->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Ram (GB)</label>
        <input type="number" name="ram" min="1" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>HD (GB)</label>
        <input type="number" name="hd" min="1" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" min=".01" step=".01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Save PC
    </button>
</form>

<a href="{{ route('pcs.index') }}" class="btn btn-secondary mt-3">
    Back
</a>

@endsection
