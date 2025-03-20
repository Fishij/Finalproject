@extends('layouts.app')

@section('content')
<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 mb-4">Luxury Redefined</h1>
        <p class="lead">Experience Unparalleled Comfort</p>
    </div>
</div>

<div class="container">
    <h2 class="text-center mb-5">Our Rooms & Suites</h2>
    
    <div class="row g-4">
        @foreach($rooms as $room)
        <div class="col-md-4">
            <div class="room-card card h-100">
                <img src="{{ asset('images/room-' . $room->id . '.jpg') }}" class="card-img-top" alt="Room Image">
                <div class="price-badge">${{ $room->price_per_night }}/night</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $room->type }} Room</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <i class="fas fa-user-friends"></i>
                            {{ $room->capacity }} Guests
                        </div>
                        <div>
                            <i class="fas fa-expand-arrows-alt"></i>
                            35m²
                        </div>
                    </div>
                    <p class="card-text text-muted">{{ Str::limit($room->description, 100) }}</p>
                    <a href="{{ route('rooms.show', $room) }}" class="btn btn-primary w-100">
                        View Details <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<footer class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5>Contact Us</h5>
                <p>+1 (555) 123-4567<br>info@luxuryhotel.com</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Address</h5>
                <p>123 Luxury Avenue<br>Paradise City, PC 12345</p>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection