<table id="tbl1" class="table table-bordered" style="border-style: none">
        <thead>
              <tr>
                <th>No </th>
                <th>Kode Unit</th>
                <th>Nama Unit</th>
                <th>KUU</th>
                <th>AOM Reguler </th>
                <th>KAM</th>
                <th>AOM PANTAS </th>
            </tr>
        </thead>
        <tbody>
          @php($no=0)
          @foreach($daftar as $values)
          @php($no++)
            <tr>
              <td>{{ $no}}</td>
              <td>{{ $values['kode_unit'] }}</td>
              <td>{{ $values['unitulamm']['nama_unit'] }}</td>
              <td>{{ $values['kuu'] }}</td>
              <td>{{ $values['aom'] }}</td>
              <td>{{ $values['kam'] }}</td>
              <td>{{ $values['aom_pantas'] }}</td>
            </tr>
          @endforeach
          </tbody>
</table>

