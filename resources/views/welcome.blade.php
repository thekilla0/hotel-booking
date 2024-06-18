@extends('layouts.app')

@section('content')
    <h1>Welcome to the Hotel Booking System</h1>
    <a href="{{ route('hotels.index') }}" class="btn btn-primary">View Hotels</a>
@endsection

