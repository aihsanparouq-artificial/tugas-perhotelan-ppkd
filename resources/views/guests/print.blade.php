<!DOCTYPE html>
<html>
    <head>
        <title>Reservation Confirmation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            font-size: 14px;
            padding:40px;
        }

        .header{
            text-align:center;
        }

        .logo{
            width:80px;
            height:80px;
            border-radius:50%;
            object-fit:cover;
            margin-bottom:5px;
        }

        .title{
            font-weight:bold;
            margin-top:10px;
        }

        hr{
            margin:15px 0;
        }

        table{
            width:100%;
        }

        td{
            padding:4px;
            vertical-align:top;
        }

        .section{
            margin-top:15px;
        }

        .print-btn{
            margin-bottom:20px;
        }

        @media print{
            .print-btn{
                display:none;
            }
        }
        </style>
    </head>
    <body>
        <div class="print-btn">
            <button onclick="window.print()">Print</button>
        </div>
        <h3 class="text-center mb-4">
            HOTEL RESERVATION CONFIRMATION
        </h3>

        <div class="header">
            <img src="{{ asset('images/logo-ppkd.jpeg') }}" class="logo">
            <h3>PPKD HOTEL</h3>
        </div>

        <div class="title">
            Hotel Reservation Confirmation
        </div>
        <hr>
        <table class="table table-bordered">
            <tr>
                <td width="50%">To</td>
                <td>{{ $guest->name }}</td>
            </tr>
            <tr>
                <td>Telp</td>
                <td>{{ $guest->phone }}</td>
            </tr>
            <tr>
                <td>Company / Agent</td>
                <td>{{ $guest->company }}</td>
                <td>Fax</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Booking No</td>
                <td>{{ $guest->id }}</td>
                <td>Email</td>
                <td>{{ $guest->email }}</td>
            </tr>
            <tr>
                <td>Book By</td>
                <td>{{ $guest->receptionist }}</td>
                <td>Date</td>
                <td>{{ date('d-m-Y') }}</td>
            </tr>
        </table>
            <hr>
            <div class="section">
                <table>
                    <tr>
                        <td width="30%">First Name</td>
                        <td>: {{ $guest->name }}</td>
                    </tr>
                    <tr>
                        <td>Arrival Date</td>
                        <td>: {{ $guest->arrival_date }}</td>
                    </tr>
                    <tr>
                        <td>Departure Date</td>
                        <td>: {{ $guest->departure_date }}</td>
                    </tr>
                    <tr>
                        <td>Total Night</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Room / Unit Type</td>
                        <td>: {{ $guest->room_type }}</td>
                    </tr>
                    <tr>
                        <td>Person Pax</td>
                        <td>: {{ $guest->no_of_person }}</td>
                    </tr>
                    <tr>
                        <td>Room Rate Net</td>
                        <td>: -</td>
                    </tr>
                </table>
            </div>
            <hr>
            <p>
                Please guarantee this booking with credit card number with clear copy of the card both sides and card holder signature.
            </p>
            <p>
                Please settle your outstanding to our account.
            </p>
            <div class="section">
                <b>Bank Transfer</b>
                <table>
                    <tr>
                        <td width="30%">Mandiri Account</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td>Mandiri Name Account</td>
                        <td>: PPKD HOTEL</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="section">
                <b>Cancellation policy:</b>
                <ol>
                    <li>Check in time is 02.00 pm and check out time 12.00 pm.</li>
                    <li>All non guaranteed reservations will automatically be released on 6 pm.</li>
                    <li>The hotel will charge 1 night for guaranteed reservations not cancelled before arrival.</li>
                </ol>
            </div>
        </body>
        </html>
