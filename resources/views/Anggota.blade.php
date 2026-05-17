@extends('Layout.SideBar')
@section('Content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success">Anggota Management</h1>
        <p class="text-muted">Manage all members efficiently. Add, edit, or remove members as needed.</p>
    </div>
    <div class="text-end mb-3">
        <a href="/Anggota/create" class="btn btn-success">Tambah Anggota</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Control Menu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Anggotas as $Anggota)
                    <tr>
                        <td>{{ $Anggota->Nama }}</td>
                        <td>{{ $Anggota->Jabatan }}</td>
                        <td>
                            <form class="d-inline" action="/Anggota/{{ $Anggota->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Akan menghapus Anggota. tekan OK untuk melanjutkan')">Hapus</button>
                            </form>
                            <a href="/Anggota/{{ $Anggota->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection