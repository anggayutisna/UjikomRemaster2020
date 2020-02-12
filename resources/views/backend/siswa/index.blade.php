@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Siswa Berita</div>
                <br>
                <center><a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama siswa</th>
                                <th>Foto</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Tempat tinggal</th>
                                <th>Tanggal lahir</th>
                                <th>No telpon</th>
                                <th>Email</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($siswa as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td><img src="{{ asset('assets/img/siswa/'.$data->foto) }}" alt="" height="100px" width="100px"></td>
                    <td>{{ $data->kelas->nama_kelas }}</td>
                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                    <td>{{ $data->tempat_tinggal }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->no_telpon }}</td>
                    <td>{{ $data->email }}</td>
                    <td><a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
