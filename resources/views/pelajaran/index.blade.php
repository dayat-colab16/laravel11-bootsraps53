@extends('layout.main')
@section('content')

<h3>Data Pelajaran</h3>
<div class="card">
<div class="card-header">
  <button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ route('pelajaran.create') }}'">
    <i class="fas fa-plus-circle"></i> Tambah Mata Pelajaran
  </button>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <table class="table table-sm table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelajaran</th>
            <th>ID Pelajaran</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
        @foreach($pelajaran as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_pelajaran }}</td>
            <td>{{ $row->alamat }}</td>
            <td><a href="{{ route('pelajaran.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
            <td>
            <form action="{{ route('pelajaran.destroy', $row->id) }}" method="POST" onsubmit="return deleteData('{{ $row->nama_pelajaran }}')">
              @csrf 
              @method('delete')
              <button type="submit" class="btn btn-danger btn-sm">Del</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

<script>
  function deleteData(name){
    return confirm(`Yakin data dengan nama ${name} ini dihapus?`);
  }
</script>
@endsection
