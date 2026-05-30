@extends('layout')

@section('content')

<h2>PC {{ $pc->id }} Details</h2>

<div class="card">
    <div class="card-body">
        <h4>{{ $pc->model->name }}</h4>
        <p>Ram: {{ $pc->ram }} GB</p>
        <p>HD: {{ $pc->hd }} GB</p>
        <strong>Price:</strong> {{ $pc->price }}
    </div>
</div>

<a href="{{ route('pcs.index') }}" class="btn btn-secondary mt-3">
    Back
</a>

@endsection
