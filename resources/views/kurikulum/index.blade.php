@extends('layout.main')
@section('content')

<h1>Master Kurikulum</h1>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success btn-sm" onclick="window.location='{{ route('kurikulum.create') }}'">
            <i class="fas fa-plus-circle"></i> Tambah Data Kurikulum
        </button>
    </div>
    <div class="card-body">   
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kurikulum</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kurikulum as $rows)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rows->nama_kurikulum }}</td>
                        <td>{{ $rows->tahun }}</td>
                        <td>
                            <a href="{{ route('kurikulum.edit', $rows->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('kurikulum.destroy', $rows->id) }}" method="POST" onsubmit="return confirm('Yakin data dengan nama {{ $rows->nama_kurikulum }} ini dihapus?')">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
