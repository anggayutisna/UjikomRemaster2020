@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman guru Berita</div>
                <br>
                <center><a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>Foto</th>
                                <th>mapel</th>
                                <th>Tempat tinggal</th>
                                <th>Tanggal lahir</th>
                                <th>No telpon</th>
                                <th>Email</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($guru as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_guru }}</td>
                    <td><img src="{{ asset('assets/img/guru/'.$data->foto) }}" alt="" height="100px" width="100px"></td>
                    <td>{{ $data->mapel->mata_pelajaran }}</td>
                    <td>{{ $data->tempat_tinggal }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->no_telpon }}</td>
                    <td>{{ $data->email }}</td>
                    <td><a href="{{ route('guru.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('guru.destroy', $data->id) }}" method="post">
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
