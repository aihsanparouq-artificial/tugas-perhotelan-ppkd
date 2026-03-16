@extends('layouts.admin')

@section('content')

<h3>Edit Guest</h3>

<form method="POST" action="/guests/update/{{ $guest->id }}">

@csrf

<div class="row">

<div class="col-md-6">
<label>Name</label>
<input type="text" name="name" class="form-control"
value="{{ $guest->name }}">
</div>

<div class="col-md-6">
<label>Room No</label>
<input type="text" name="room_no" class="form-control"
value="{{ $guest->room_no }}">
</div>

</div>

<br>

<div class="row">

<div class="col-md-6">
<label>Arrival Date</label>
<input type="date" name="arrival_date" class="form-control"
value="{{ $guest->arrival_date }}">
</div>

<div class="col-md-6">
<label>Departure Date</label>
<input type="date" name="departure_date" class="form-control"
value="{{ $guest->departure_date }}">
</div>

</div>

<br>

<div class="row">

<div class="col-md-6">
<label>Phone</label>
<input type="text" name="phone" class="form-control"
value="{{ $guest->phone }}">
</div>

</div>

<br>

<button class="btn btn-primary">
Update Data
</button>

</form>

@endsection
