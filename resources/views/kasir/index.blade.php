<h2>Data Kasir</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID KASIR</th>
        <th>Nama Kasir</th>
    </tr>

    @foreach ($data as $row)
    <tr>
        <td>{{ $row->id_kasir }}</td>
        <td>{{ $row->nama_kasir }}</td>
    </tr>
    @endforeach
</table>