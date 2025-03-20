<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Check-in Date</label>
        <input type="date" name="check_in_date" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Check-out Date</label>
        <input type="date" name="check_out_date" class="form-control" required>
    </div>
    <input type="hidden" name="room_id" value="{{ $room->id }}">
    <button type="submit" class="btn btn-primary">Book Now</button>
</form>