<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=21cm, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .print{
                width: 21cm;
                padding: 1cm;
                margin: 0cm auto;
                border: 1px #D3D3D3 solid;
                border-radius: 5px;
                background: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
                clear: both;
            }
            #preview{
                box-shadow: inset 0px 0px 10px rgba(0,0,0,0.9);
            }
            *{
                box-sizing: border-box;
            }
    </style>
    
</head>
<body style="top:0px">
    <div class="container-fluid cetak">
        <div class="print mb-5">
            <div class="container Header pb-2" style="border-bottom: solid black 3px">
                <div class="row">
                    <div class="col-auto"> <img src="/Gambar/Logo.png" alt="" style="height: 120px"></div>
                    <div class="col" style="text-align: center">
                        <h4> <strong> YAYASAN AMAL IKHLAS AL-RIDWANI (YAIR)</strong></h4>
                        <h5>MADRASAH DINIYAH ISLAMIYAH AL-RIDWANI</h5>
                        <small>LingkokBaru, DesaSukadamai, Kec. Jerowaru Kab. Lombok Timur, NTB, Km 1,5Tangun-BatuNampar </small>
                        <small>HP: 081918488744, 081933175101</small>
                    </div>
                </div>
            </div>
            <div id="isiSurat">
                {!! $Surat->Isi !!}
            </div>
            <div id="ttdSurat" class="d-flex flex-wrap" style="height: 200px">
                @foreach ($Surat->ttdtosurat as $ttd)
                {{-- {{ $ttd}} --}}
                <div class="col m-3" style="height:100%; flex:40%; text-align:center">
                    <div><span class="TempatttdAnggota">{{ $ttd->Tempat }}</span> , <span class="TanggaltdAnggota">{{ $ttd->Tanggal }}</span></div>
                    <p class="SebagaittdAnggota">{{ $ttd->Sebagai }}</p>
                    @if ($ttd->Sign == "Signed")
                    <img src="/{{ $ttd->Anggota->TTD->Gambar }}" alt="" style="height:100px">    
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=http://yair.test/Signed/{{ $ttd->id }}" alt="">
                    @else
                    <img src="/TTD/noTTD.png" alt="" style="height:100px">
                    @endif
                    
                    <p><u><strong class="NamattdAnggota">{{ $ttd->Anggota->Nama }}</strong></u></p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <div id="ttdtamplate" style="height: 100px">
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>