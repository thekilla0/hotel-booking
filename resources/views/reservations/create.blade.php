@extends('layouts.app')

@section('content')
    <h1>Book Room {{ $room->room_number }}</h1>

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <input type="hidden" name="room_id" value="{{ $room->id }}">

        <div class="form-group">
            <label for="checkin_date">Check-in Date</label>
            <input type="date" name="checkin_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="checkout_date">Check-out Date</label>
            <input type="date" name="checkout_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guest_name">Guest Name</label>
            <input type="text" name="guest_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guest_email">Guest Email</label>
            <input type="email" name="guest_email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="guest_phone">Guest Phone</label>
            <input type="text" name="guest_phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
@endsection
