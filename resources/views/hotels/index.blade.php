@extends('layouts.app')

@section('content')
    <h1>Hotels</h1>
    <div class="row">
        @foreach ($hotels as $hotel)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->name }}</h5>
                        <p class="card-text">{{ $hotel->address }}</p>
                        <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
