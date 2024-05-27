@extends('layout.main')
@section('content')


<h3>Tambah Data Jadwal</h3>
<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Jadwal</td><td><input type="text" name="nama_jadwal"></td>
    </tr>
    <tr>
        <td>Tahun</td><td><input type="text" name="tahun"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection