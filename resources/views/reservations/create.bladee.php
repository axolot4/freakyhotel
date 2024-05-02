@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Book a Room</h2>
        <form method="POST" action="{{ url('/reserve') }}">
            @csrf
            <div class="mb-3">
                <label for="room_id" class="form-label">Select Room</label>
                <select class="form-select" id="room_id" name="room_id">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->room_number }} (Capacity: {{ $room->capacity }})</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit Reservation</button>
        </form>
    </div>
@endsection
