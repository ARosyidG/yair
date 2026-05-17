@extends('Layout.SideBar')
@section('Content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success">Biodata</h1>
        <p class="text-muted">Update your personal information and ensure all fields are accurate.</p>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/Anggota/{{ $Anggota->id }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama:</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Nama" value="{{ $Anggota->Nama }}" required>
                </div>
                <input type="hidden" name="id" value="{{ $Anggota->id }}">
                <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan:</label>
                    @if (Auth::user()->Jabatan == "admin")
                        <input type="text" name="Jabatan" class="form-control" id="Jabatan" placeholder="Jabatan" value="{{ $Anggota->Jabatan }}" required>
                    @else
                        <input type="hidden" name="Jabatan" value="{{ $Anggota->Jabatan }}">
                        <div class="form-control-plaintext">{{ $Anggota->Jabatan }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ $Anggota->username ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="Gambar" class="form-label">Gambar:</label>
                    <div class="mb-2">
                        @if ($Anggota->TTD == null)
                            <img class="border rounded p-2" src="" alt="Preview" id="imgPre" style="height:100px; width:auto;">
                        @else
                            <img class="border rounded p-2" src="{{ asset('storage/' . $Anggota->TTD->Gambar) }}" alt="Preview" id="imgPre" style="height:100px; width:auto;">
                        @endif
                    </div>
                    <input type="file" class="form-control" id="Gambar" name="Gambar" onchange="imgPreview()">
                </div>
                <div class="text-center">
                    <button class="btn btn-success w-50" type="submit">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function imgPreview() {
        const imgInput = document.querySelector('#Gambar');
        const imgPreview = document.querySelector('#imgPre');
        const fileReader = new FileReader();

        fileReader.readAsDataURL(imgInput.files[0]);
        fileReader.onload = function(e) {
            imgPreview.src = e.target.result;
        };
    }
</script>
@endsection