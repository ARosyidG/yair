<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    html{
        bottom: 0;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }
</style>
<body style="
    background: radial-gradient(ellipse at top, #3db17b, transparent),
                radial-gradient(ellipse at bottom, #183501, rgb(104, 104, 104));
">
    <nav class="navbar" style="
        box-shadow: 0rem 0.1rem 2rem rgb(255, 255, 255), 0rem 0.1rem .1rem rgb(255, 255, 255) inset;
    ">
        <div class="container-fluid">
            <div class="navbar-brand text-white fw-bold">
                YAIR
            </div>
        </div>
    </nav>
    @yield('Content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>