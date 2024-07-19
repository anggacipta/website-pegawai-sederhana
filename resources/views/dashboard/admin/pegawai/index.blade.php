@extends('dashboard.admin.layouts.main')
@section('content')
    <!--  Header Start -->
    @include('dashboard.admin.layouts.navbar')
    <!--  Header End -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <table class="table" id="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Departemen</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawais as $pegawai)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->email }}</td>
                    <td>{{ $pegawai->telepon }}</td>
                    <td>{{ $pegawai->posisi }}</td>
                    <td>{{ $pegawai->departemen }}</td>
                    <td>{{ $pegawai->tanggal_lahir }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
        @include('dashboard.admin.layouts.footer')
    </div>
@endsection
