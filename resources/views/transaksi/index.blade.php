<h2>Data Transaksi</h2>

<table border="1" cellpadding="8">
 

  @foreach ($data as $row)
    <tr>
      <td>{{ $row->id_trx }}</td>
      <td>{{ $row->tgl_trx }}</td>
      <td>{{ $row->detil_trx }}</td>
    </tr>
  @endforeach
</table>