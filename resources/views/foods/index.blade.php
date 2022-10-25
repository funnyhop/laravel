@extends('layouts.app')

@section('content')
<h3>This is Food page</h3>
@foreach ( $foods as $food )
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="ms-2 me-auto">
            <h5 class="mb-1">{{ $food->name }}</h5>
            <div class="fw-bold">
                <h6>{{ $food->description }}</h6>
            </div>
        </div>
        <span class="badge bg-info rounded-pill">{{ $food->count }}</span>
    </li>
@endforeach
@endsection