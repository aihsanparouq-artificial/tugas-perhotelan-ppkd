@extends('layouts.admin')

@section('content')

<h3>Database Tamu</h3>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Room</th>
            <th>Arrival</th>
            <th>Departure</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guests as $guest)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->room_no }}</td>
            <td>{{ $guest->arrival_date }}</td>
            <td>{{ $guest->departure_date }}</td>
            <td>{{ $guest->phone }}</td>
            <td>
                <a href="/guests/edit/{{ $guest->id }}" class="btn btn-warning btn-sm">
                    Edit
                </a>
                <a href="/guests/delete/{{ $guest->id }}" class="btn btn-danger btn-sm">
                    Delete
                </a>
                <a href="/guests/print/{{ $guest->id }}" target="_blank" class="btn btn-success btn-sm">
                    Print
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
