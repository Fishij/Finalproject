@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header bg-white">
                    <h3 class="mb-0">{{ $room->type }} Room</h3>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <img src="{{ asset('images/room-' . $room->id . '.jpg') }}" 
                                 class="img-fluid rounded-3 mb-3" alt="Room Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-4">Room Features</h5>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <i class="fas fa-bed text-primary me-2"></i>
                                    {{ $room->capacity }} Guests
                                </div>
                                <div class="col-6 mb-3">
                                    <i class="fas fa-expand-arrows-alt text-primary me-2"></i>
                                    35m² Room
                                </div>
                                <div class="col-6 mb-3">
                                    <i class="fas fa-wifi text-primary me-2"></i>
                                    Free WiFi
                                </div>
                                <div class="col-6 mb-3">
                                    <i class="fas fa-tv text-primary me-2"></i>
                                    Smart TV
                                </div>
                            </div>
                            <hr>
                            <p class="lead">{{ $room->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="booking-form">
                <h4 class="mb-4">Book This Room</h4>
                <form action="{{ route('bookings.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Check-in Date</label>
                        <input type="date" name="check_in_date" 
                               class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Check-out Date</label>
                        <input type="date" name="check_out_date" 
                               class="form-control" required>
                    </div>
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <button type="submit" class="btn btn-primary w-100 py-2">
                        <i class="fas fa-calendar-check me-2"></i>Book Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection