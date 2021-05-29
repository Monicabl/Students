<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> index </title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/students">Estudiantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/subjects">Materias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/periods">Periodos</a>
          </li>
        </ul>
        <form class="d-flex">
          <a class="btn btn-danger" href="#">Logout</a>
        </form>
      </div>
  </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>