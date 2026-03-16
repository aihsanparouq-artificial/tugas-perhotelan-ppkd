@extends('layouts.admin')

@section('content')

<h3>Hotel Guest Registration</h3>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<form method="POST" action="/register">
    @csrf
    <div class="card mt-3">
        <div class="card-header">
            Room Information
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label>Room No</label>
                    <input type="text" name="room_no" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>No of Person</label>
                    <input type="number" name="no_of_person" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>No of Room</label>
                    <input type="number" name="no_of_room" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Room Type</label>
                    <input type="text" name="room_type" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            Guest Information
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label>Profession</label>
                    <input type="text" name="profession" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Company</label>
                    <input type="text" name="company" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Nationality</label>
                    <input type="text" name="nationality" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Passport No</label>
                    <input type="text" name="passport_no" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Birth Date</label>
                    <input type="date" name="birth_date" class="form-control">
                </div>
            </div>
            <br>
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Arrival Time</label>
                    <input type="time" name="arrival_time" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Arrival Date</label>
                    <input type="date" name="arrival_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Departure Date</label>
                    <input type="date" name="departure_date" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Date of Book</label>
                    <input type="date" name="date_of_book" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Receptionist</label>
                    <input type="text" name="receptionist" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Check Out Time</label>
                    <input type="time" name="checkout_time" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-3">
        Save Registration
    </button>
</form>

@endsection
