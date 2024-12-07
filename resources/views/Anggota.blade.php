@extends('Layout.SideBar')
@section('Content')
<a href="/Anggota/create"><button class="btn btn-success">Tambah Anggota</button></a>
<ul class="list-group list-group flex-column mb-auto mt-3">
    <li class="list-group-item p-1 bg-success text-white">Surat</li>
    <li id="Berita" class="list-group-item p-1 px-3"  >
        <table class="table table-striped table-bordered ">
            <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Control Menu</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($Anggotas as $Anggota)
                <tr>
                    <td>{{$Anggota->Nama}}</td>
                    <td>{{$Anggota->Jabatan}}</td>
                    <td>
                        <form class="d-inline" action="/Anggota/{{ $Anggota->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Anda Akan menghapus Berita. tekan OK untuk melanjutkan')"> Hapus</button>
                        </form>
                        <a href="/Anggota/{{  $Anggota->id }}/edit"><button>Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </li>
    </ul>
@endsection