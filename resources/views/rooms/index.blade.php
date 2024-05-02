@extends('layouts.app')

@section('content')
    <h1>Available Rooms</h1>
    <ul>
        @foreach ($rooms as $room)
            <li>{{ $room[0] }} - {{ $room[1] }} - Capacity: {{ $room[2] }} - Rate: ${{ $room[3] }}</li>
        @endforeach
    </ul>
@endsection