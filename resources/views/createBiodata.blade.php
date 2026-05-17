@extends('Layout.SideBar')
@section('Content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success">Create Anggota</h1>
        <p class="text-muted">Fill in the form below to add a new anggota (member).</p>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/Anggota" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama:</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan:</label>
                    <input type="text" name="Jabatan" class="form-control" id="Jabatan" placeholder="Jabatan" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="Gambar" class="form-label">Gambar:</label>
                    <div class="mb-2">
                        <img class="border rounded p-2" src="" alt="Preview" id="imgPre" style="height:100px; width:auto;">
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