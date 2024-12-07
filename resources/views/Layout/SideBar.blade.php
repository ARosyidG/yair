<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/_css/sidebars.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-success navbar-expand-md px-2 shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/Admin" class="navbar-brand me-auto ms-2">YAIR</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-block d-md-none">
              <li class="nav nav-item p-1"><a href="/Biodata" class="nav-link text-white">Biodata</a></li>
              <li class="nav nav-item p-1"><a href="/Surat" class="nav-link text-white">Surat</a></li>
          </div>
        </div>
        <form action="/Logout" method="post" class="m-0">
            @csrf
            <button type="submit" class="navbar-item btn ms-auto">
              <strong class="bi bi-power text-warning"> Log Out</strong>
            </button>
          </form>
    </nav>
    <div id="main" class="container-fluid">
        <div class="row">
          <div id="sidebar" class="col-md-2 sidebar pt-3 d-none d-md-block d-lg-block d-xl-block shadow">
            <ul class="nav navbar-light list-group list-group-flush nav-pills flex-column mb-auto w-100">
                <li class="nav nav-item p-1 w-100"><a href="/Biodata" class="nav-link text-dark w-100">Biodata</a></li>
                <li class="nav nav-item p-1 w-100"><a href="/Surat" class="nav-link text-dark w-100">Surat</a></li>
                @if (Auth::user()->Jabatan == "admin")
                    <li class="nav nav-item p-1 w-100"><a href="/Anggota" class="nav-link text-dark w-100">Anggota</a></li>
                @endif
            </ul>
            <div></div>
          </div>
          <main class="col-lg-10 col-md-10 main pt-4 ps-3" >
            @yield('Content')
          </main>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/sidebars.js"></script>
</body>
</html>