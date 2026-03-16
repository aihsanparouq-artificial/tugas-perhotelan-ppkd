@extends('layouts.admin')

@section('content')

<h2>Dashboard</h2>
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Total Guests</h5>
                <h1 class="text-primary">{{ $totalGuests }}</h1>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Rooms Booked</h5>
                <h1 class="text-success">{{ $roomsBooked }}</h1>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Today Check-in</h5>
                <h1 class="text-danger">{{ $todayCheckin }}</h1>
            </div>
        </div>
    </div>
</div>

@endsection
