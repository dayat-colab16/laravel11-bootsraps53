<form action="{{ route('perkiraan.store') }}" method="post">
    @csrf
<table>
    <tr>
        <td>Nomor Perkiraan</td><td><input type="text" name="nomor_perkiraan"></td>
    </tr>
    <tr>
        <td>Nama Perkiraan</td><td><input type="text" name="nama_perkiraan"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>
