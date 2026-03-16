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

<h4 class="text-center text-white py-3">
Hotel Admin
</h4>

<a href="/dashboard">Dashboard</a>
<a href="/register">Registrasi Tamu</a>
<a href="/guests">Database Tamu</a>

</div>

<!-- Main Content -->
<div class="col-md-10 p-4">

@yield('content')

</div>

</div>

</div>

</body>
</html>
