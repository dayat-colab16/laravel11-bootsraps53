
<h1>Master Perkiaan</h1>
<a href="{{ route('perkiraan.create') }}">Tambah Data</a>
<table border="1" width="75%">
    <tr>
        <td>No</td>
        <td>Nomor Perkiaan</td>
        <td>Nama Perkiraan</td>
    </tr>

    @foreach($perkiraan as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->id_perkiraan }}</td>
    <td>{{ $item->nama_perkiraan  }}</td>
</tr>
    @endforeach
</table>