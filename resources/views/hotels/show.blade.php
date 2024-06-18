@extends('layouts.app')

@section('content')
    <h1>{{ $hotel->name }}</h1>
    <p>{{ $hotel->address }}</p>
    <p>{{ $hotel->phone }}</p>
    <p>{{ $hotel->email }}</p>
    <p>{{ $hotel->website }}</p>

    <h2>Rooms</h2>
    <div class="row">
        @foreach ($hotel->rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Room {{ $room->room_number }}</h5>
                        <p class="card-text">{{ $room->description }}</p>
                        <p class="card-text">${{ $room->price }} per night</p>
                        <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
