@extends('Layout.SideBar')
@section('Content')
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-success text-white">Biodata</li>
    <li id="Berita" class="list-group-item p-1 px-3">
        <form action="/Anggota/{{ $Anggota->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Nama:</label>
                <input type="text" name="Nama" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="{{ $Anggota->Nama }}" required>
            </div>
            <input type="hidden" name="id" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="{{ $Anggota->id }}" required>
            <div class="form-group">
                <label for="exampleInputPassword1">Jabatan:</label>
                @if (Auth::user()->Jabatan == "admin")
                    <input type="text" name="Jabatan" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="{{ $Anggota->Jabatan }}" required>
                @else
                    <input type="hidden" name="Jabatan" class="form-control"  id="exampleInputPassword1" placeholder="Nama" value="{{ $Anggota->Jabatan }}" required>
                    <div>{{ $Anggota->Jabatan }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Username:</label>
                @if ($Anggota->username == null)
                <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="username" value="" required>
                @else
                <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="username" value={{ $Anggota->username }} required>
                @endif
                    
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password:</label>
                @if ($Anggota->password == null)
                <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="password" required>
                @else
                <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="password" required>
                @endif
                    
            </div>
            <div class="form-group mt-3">
                <div>
                    <label for="Gambar">Gambar</label>
                </div>
                <div>
                    @if ($Anggota->TTD== null)
                        <img class="border rounded p-2" src="" alt="" id="imgPre" class="mt-3" style="height:100px; width:auto;">
                    @else
                    <img class="border rounded p-2" src="{{ asset( 'storage/' . $Anggota->TTD->Gambar) }}" alt="" id="imgPre" class="mt-3" style="height:100px; width:auto;">
                        @endif
                </div>
                <input type="file" class="form-control" id="Gambar" name="Gambar" onchange="imgPreview()">
            </div>
            <button class="btn btn-success" type="submit">Apply</button>
        </form>
    </li>
    </ul>
    <script src="/js/Biodata.js"></script>
@endsection