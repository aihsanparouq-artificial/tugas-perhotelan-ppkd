<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Hotel Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
overflow-x:hidden;
}

.sidebar{
height:100vh;
background:#343a40;
}

.sidebar a{
color:white;
text-decoration:none;
display:block;
padding:12px;
}

.sidebar a:hover{
background:#495057;
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- Sidebar -->
<div class="col-md-2 sidebar p-0">

<div class="text-center py-3">

<img src="{{ asset('images/logo-ppkd.jpeg') }}"
style="width:90px; height:90px; object-fit:cover"
class="rounded-circle mb-2">

<h4 class="text-white">
Hotel PPKD Jakarta Pusat
</h4>

</div>

<a href="/dashboard">Dashboard</a>
<a href="/register">Registrasi Tamu</a>
<a href="/guests">Database Tamu</a>
<a href="/logout">Logout</a>

</div>

<!-- Main Content -->
<div class="col-md-10 p-4">

@yield('content')

</div>

</div>

</div>

</body>
</html>
