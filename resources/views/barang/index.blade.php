<h2>Data Barang</h2>

<table border="1" cellpadding="8">
  <tr>
    <th>ID BARANG</th>
    <th>Nama Barang</th>
    <th>Harga</th>
  </tr>

  @foreach ($data as $row)
    <tr>
      <td>{{ $row->id_barang }}</td>
      <td>{{ $row->nama_barang }}</td>
      <td>{{ $row->harga }}</td>
    </tr>
  @endforeach
</table>