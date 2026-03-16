<!DOCTYPE html>
<html>
    <head>
        <title>Reservation Confirmation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        body{
            padding:40px;
        }
        table{
            width:100%;
        }
        </style>
    </head>
    <body>
        <h3 class="text-center mb-4">
            HOTEL RESERVATION CONFIRMATION
        </h3>
        <table class="table table-bordered">
            <tr>
                <th width="30%">Guest Name</th>
                <td>{{ $guest->name }}</td>
            </tr>
            <tr>
                <th>Room Number</th>
                <td>{{ $guest->room_no }}</td>
            </tr>
            <tr>
                <th>Room Type</th>
                <td>{{ $guest->room_type }}</td>
            </tr>
            <tr>
                <th>Number of Person</th>
                <td>{{ $guest->no_of_person }}</td>
            </tr>
            <tr>
                <th>Arrival Date</th>
                <td>{{ $guest->arrival_date }}</td>
            </tr>
            <tr>
                <th>Departure Date</th>
                <td>{{ $guest->departure_date }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $guest->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $guest->email }}</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>{{ $guest->company }}</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>{{ $guest->nationality }}</td>
            </tr>
        </table>
        <br>
        <br>
        <div class="row">
            <div class="col-6 text-center">
                <p>Guest Signature</p>
                <br>
                <br>
                <br>
                ____________________
            </div>
            <div class="col-6 text-center">
                <p>Receptionist</p>
                <br>
                <br>
                <br>
                {{ $guest->receptionist }}
            </div>
        </div>
        <script>
        window.print();
        </script>
    </body>
</html>
