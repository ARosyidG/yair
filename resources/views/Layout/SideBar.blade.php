<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/sidebars.css" rel="stylesheet">
    <title>Document</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        #main {
            display: flex;
            height: 100%;
        }
        #sidebar {
            background-color: #f8f9fa;
            height: 100%;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            color: #495057;
            width: 100%;
        }
        .nav-link:hover {
            background-color: #e9ecef;
            color: #212529;
        }
        .nav-link.active {
            background-color: #388e3c;
            color: #ffffff;
            font-weight: bold;
            border-left: 4px solid #ffc107;
            padding-left: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-success navbar-expand-md px-2 shadow">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <div id="main">
        <div id="sidebar" class="col-md-2 sidebar pt-3">
            <ul class="nav navbar-light list-group list-group-flush nav-pills flex-column mb-auto w-100">
                <li class="nav nav-item p-1 w-100"><a href="/Biodata" class="nav-link">Biodata</a></li>
                <li class="nav nav-item p-1 w-100"><a href="/Surat" class="nav-link">Surat</a></li>
                @if (Auth::user()->Jabatan == "admin")
                    <li class="nav nav-item p-1 w-100"><a href="/Anggota" class="nav-link">Anggota</a></li>
                @endif
            </ul>
        </div>
        <main class="col-lg-10 col-md-10 main pt-4 ps-3">
            @yield('Content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>