@extends("Layout.SideBar")
@section("Content")
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-success text-white">Surat</li>
    <li id="Berita" class="list-group-item p-1 px-3"  >
        <table class="table table-striped table-bordered w-auto">
            <thead>
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Nomor Surat</th>
                <th scope="col">Subjek</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($SignSurat as $sign)
                {{-- {{ $sign }} --}}
                <tr>
                    <td>{{ $sign->Surat->id}}</td>
                    <td>{{ $sign->Surat->NomorSurat }}</td>
                    <td>{{ $sign->Surat->Subjek}}</td>
                    <td>{{ $sign->Sign}}</td>
                    <td>
                        <a href="/Surat/Sign/{{$sign->id }}"><button>Sign</button></a>
                        <a href="/Preview/{{$sign->Surat->id }}"><button>Preview</button></a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </li>
</ul>
@if (Auth::user()->Jabatan == "admin")
    <a href="/Surat/create"><button class="btn btn-success">Tambah Surat</button></a>
    <ul class="list-group list-group flex-column mb-auto mt-3">
        <li class="list-group-item p-1 bg-warning text-white">Surat</li>
        <li id="Berita" class="list-group-item p-1 px-3"  >
            <table class="table table-striped table-bordered w-auto">
                <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Subjek</th>
                    <th scope="col"></th>
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
                                    <button onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"> Hapus</button>
                                </form>
                                <a href="/Preview/{{$s->id }}"><button>Preview</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </li>
    </ul>
@endif

@endsection