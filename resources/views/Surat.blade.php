@extends("Layout.SideBar")
@section("Content")
<div class="container mt-3">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success">Surat Management</h1>
        <p class="text-muted">Manage and track all your surat (letters) efficiently. Below is the list of surat requiring your attention.</p>
    </div>
    <ul class="list-group flex-column mb-auto">
        <li class="list-group-item bg-success text-white fw-bold">Surat Requiring Signature</li>
        <li id="Berita" class="list-group-item">
            <table class="table table-hover table-bordered">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Index</th>
                        <th scope="col">Nomor Surat</th>
                        <th scope="col">Subjek</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($SignSurat as $sign)
                    <tr>
                        <td>{{ $sign->Surat->id }}</td>
                        <td>{{ $sign->Surat->NomorSurat }}</td>
                        <td>{{ $sign->Surat->Subjek }}</td>
                        <td>{{ $sign->Sign }}</td>
                        <td>
                            <a href="/Surat/Sign/{{$sign->id }}" class="btn btn-sm btn-primary">Sign</a>
                            <a href="/Preview/{{$sign->Surat->id }}" class="btn btn-sm btn-secondary">Preview</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
    </ul>
    @if (Auth::user()->Jabatan == "admin")
        <div class="text-center my-4">
            <a href="/Surat/create" class="btn btn-success">Tambah Surat</a>
        </div>
        <ul class="list-group flex-column mb-auto">
            <li class="list-group-item bg-warning text-white fw-bold">All Surat</li>
            <li id="Berita" class="list-group-item">
                <table class="table table-hover table-bordered">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Nomor Surat</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Surat as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->NomorSurat }}</td>
                            <td>{{ $s->Subjek }}</td>
                            <td>
                                <form class="d-inline" action="/Surat/{{ $s->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')">Hapus</button>
                                </form>
                                <a href="/Preview/{{$s->id }}" class="btn btn-sm btn-secondary">Preview</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </li>
        </ul>
    @endif
</div>
@endsection