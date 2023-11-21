<table id="tbl1" class="table table-bordered" style="border-style: none">
    <thead>
  <tr>
      <th>No </th>
      <th>Region</th>
      <th>Area</th>
      <th>Kode Unit</th>
      <th>Nama Unit</th>
      <th>Jumlah KDO</th>
      <th>KDO AKtif</th>
      <th>KDO Rusak </th>
      <th>KDO Jatuh Tempo/Lelang</th>
      <th>KDO Hilang </th>
      <th>Jumlah SDM Bisnis</th>
      <th>Jumlah Standar KDO</th>
      <th>GAP</th>
  </tr>
  </thead>
  <tbody>
    @php($no=0)
    @foreach($daftar as $values)
    @php($no++)
      <tr>
          <td>{{ $no}}</td>
          <td>{{ $values->region }}</td>
          <td>{{ $values->area }}</td>
          <td>{{ $values->kode_unit }}</td>
          <td>{{ $values->nama_unit }}</td>
          <td>{{ $values->jumlah_kdo }}</td>
          <td>{{ $values->kdo_aktif }}</td>
          <td>{{ $values->kdo_rusak }}</td>
          <td>{{ $values->kdo_jt_lelang }}</td>
          <td>{{ $values->kdo_hilang }}</td>
          <td>{{ $values->jml_sdm_bisnis }}</td>
          <td>{{ $values->jml_std_kdo }}</td>
          <td>{{ $values->gap_kdo }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
