<table id="tbl1" class="table table-bordered" style="border-style: none">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Unit</th>
            <th>Nama Unit</th>
            <th>NOA Nasabah</th>
            <th>KUM</th>
            <th>Jml Standar SAO </th>
            <th>SAO Aktif</th>
            <th>Jml Standar AO </th>
            <th>AO Aktif</th>
            <th>Jumlah Standar FAO</th>
            <th>FAO Aktif</th>
        </tr>
        </thead>
        <tbody>
          @php($no=0)
          @foreach($daftar as $values)
          @php($no++)
            <tr>
                <td>{{ $no}}</td>
                <td>{{ $values->kode_unit }}</td>
                <td>{{ $values->nama_unit }}</td>
                <td>{{ $values->noa_nasabah }}</td>
                <td>{{ $values->kum }}</td>
                <td>{{ $values->sao_standard }}</td>
                <td>{{ $values->sao_realisasi }}</td>
                <td>{{ $values->ao_standard }}</td>
                <td>{{ $values->ao_realisasi }}</td>
                <td>{{ $values->fao_standard }}</td>
                <td>{{ $values->fao_realisasi }}</td>
            </tr>
          @endforeach
          </tbody>
</table>

