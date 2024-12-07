@extends('Layout.SideBar')
@section('Content')
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-success text-white">Biodata</li>
    <li id="Berita" class="list-group-item p-1 px-3">
        <form action="/Anggota" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Nama:</label>
                <input type="text" name="Nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jabatan:</label>
                    <input type="text" name="Jabatan" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Username:</label>
                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="username" value="" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password:</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="password" value="" required>
            </div>
            <div class="form-group mt-3">
                <div>
                    <label for="Gambar">Gambar</label>
                </div>
                <div>
                    <img class="border rounded p-2" src="" alt="" id="imgPre" class="mt-3" style="height:100px; width:auto;">
                </div>
                <input type="file" class="form-control" id="Gambar" name="Gambar" onchange="imgPreview()">
            </div>
            <button class="btn btn-success" type="submit">Apply</button>
        </form>
    </li>
    </ul>
    <script src="/js/Biodata.js"></script>
@endsection