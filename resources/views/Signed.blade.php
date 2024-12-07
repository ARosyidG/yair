<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div id="LoginBox" class="bg-white border border-warning p-3 rounded" style="left: 50%; top: 50%; transform: translate(-50%, -50%); position:absolute; text-align:center">
        @if ($Sign->Sign == 'Signed')
            <h1>YAIR</h1>
            <img src="/{{ $Sign->Anggota->TTD->Gambar }}" alt="">
            <p></p>
            <p><span>{{ $Sign->Anggota->Nama }}</span><strong> Sudah </strong><span>Menandatangani surat </span> <span>{{ $Sign->Surat->NomorSurat }}</span></p>
        @else
            <p>DATA KOSONG</p>
        @endif
  </body>
</html>
