<table id="tbl1" class="table table-bordered" style="border-style: none">
    <thead>
  <tr>
    <th>No </th>
    <th>Region</th>
    <th>Area</th>
    <th>Kode Unit</th>
    <th>Nama Unit</th>
    <th>Jumlah Laptop PC</th>
    <th>Laptop PC Aktif</th>
    <th>Laptop PC Rusak </th>
    <th>Laptop PC Jatuh Tempo/Lelang</th>
    <th>Laptop PC Hilang </th>
    <th>Jumlah FAO</th>
    <th>Jumlah Standar Laptop PC</th>
    <th>GAP</th>
</tr>
  </thead>
  <tbody>
    @php($no=0)
    @foreach($daftar as $values)
    @php($no++)
      <tr>
          <td>{{ $no}}</td>
          <td>{{ $values->nama_region }}</td>
          <td>{{ $values->nama_area }}</td>
          <td>{{ $values->kode_unit }}</td>
          <td>{{ $values->nama_unit }}</td>
          <td>{{ $values->jumlah_laptop_pc }}</td>
          <td>{{ $values->laptop_pc_aktif }}</td>
          <td>{{ $values->laptop_pc_rusak }}</td>
          <td>{{ $values->laptop_pc_jt_lelang }}</td>
          <td>{{ $values->laptop_pc_hilang }}</td>
          <td>{{ $values->jml_fao }}</td>
          <td>{{ $values->jml_std_laptop }}</td>
          <td>{{ $values->gap_laptop }}</td>
</tr>
    @endforeach
  </tbody>
</table>
