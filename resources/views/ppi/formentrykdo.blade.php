@extends('layouts.admin_main')
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>

@section('content')
<!-- Main content -->
<div class="content-wrapper" style="margin-top:10px; max-height:800px !important;">
  <div class="container-fluid">
    <div class="row">
      <h3 style="margin-left:20px" class="card-title">Entry KDO</h3>

      <div class="col-12">
        <div class="card card-warning card-outline">
          <!-- form for Search Exsisting Saving Customer -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <div class="col-lg-3 col-sm-3" style="float:right;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-kdo" style="float: right;">
                <i class="fa fa-plus"></i>
              </button>
            </div>
            <h3 class="card-title">Data Yang Sudah Tercatat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="display" width="100">
              <thead>
              <tr>
                <th>No</th>
                <th>Region</th>
                <th>Area</th>
                <th>Kode Unit</th>
                <th>Nama Unit</th>
                <th>Jumlah KDO</th>
                <th>Jumlah KDO Aktif</th>
                <th>Jumlah KDO JT</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              {{-- @foreach($tabungan->chunk(100) as $index => $values) --}}
              @php($index=0)
              @foreach($daftar as $values)
              @php($index++)
                <tr>
                  <td>{{ $index}}</td>
                  <td>{{ $values->region }}</td>
                  <td>{{ $values->area }}</td>
                  <td>{{ $values->kode_unit }}</td>
                  <td>{{ $values->nama_unit }}</td>
                  <td>{{ $values->jumlah_kdo }}</td>
                  <td>{{ $values->kdo_aktif }}</td>
                  <td>{{ $values->kdo_jt_lelang }}</td>
                  <td>
                    <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                      Action <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-edit-kdo"
                        data-id={{ $values->id }}
                        data-region={{ $values->region }}
                        data-area={{ $values->area }}
                        data-kode_unit={{ $values->kode_unit }}
                        data-nama_unit={{{$values->unit->nama_unit}}}
                        data-jumlah_kdo={{ $values->jumlah_kdo }}
                        data-kdo_aktif={{ $values->kdo_aktif }}
                        data-kdo_rusak={{ $values->kdo_rusak }}
                        data-kdo_jt_lelang={{ $values->kdo_jt_lelang}}
                        data-kdo_hilang={{ $values->kdo_hilang}}
                        data-jml_sdm_bisnis={{ $values->jml_sdm_bisnis }}
                        data-jml_std_kdo={{ $values->jml_std_kdo}}
                        data-gap_kdo={{ $values->gap_kdo }}
                        data-keterangan={{ $values->keterangan}}
                        >
                          Edit
                      </a>
                      <form action="/bo_del_kdo" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus perkiraan ini?')">
                        <button type="submit" tabindex="-1" class="dropdown-item">
                          Delete
                        </button>
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="id" value="{{$values->id}}"/>

                        @csrf
                    </form>

                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  {{-- MODAL EDIT KDO --}}
  <div class="modal fade" id="modal-edit-kdo">
    <div class="modal-dialog modal-xl">
      <form action="/bo_kd_de_updatekdo" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data KDO</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Baris ke 1 EDIT tabungan ----->
            <div class="form-group">
              <div class="row">
                <input type="number" hidden name="id">
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Region</label>
                  <select class="form-control" name="region">
                    <option id="idregion" selected></option>
                    @foreach($region as $value)
                        <option value="{{$value->id}}">{{$value->nama_region}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Area</label>
                  <select class="form-control" name="area">
                    <option id="idarea" selected></option>
                    @foreach($area as $value)
                    <option value="{{$value->id}}">{{$value->nama_area}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Kode Unit</label>
                  <div class="input-group date" data-target-input="nearest">
                    <input type="text" id="editkdunit" name="kode_unit" class="form-control" readonly>
                    <div class="input-group-append" data-toggle="modal" data-target="#ambildataunit">
                      <div class="input-group-text"><i class="fa fa-book"></i></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Nama Unit</label>
                  <input type="text" style="width: 150%" id="editnmunit" name="nama_unit" readonly class="form-control">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah KDO</label>
                  <input type="number" id="editalamatnasabah" name="jumlah_kdo" class="form-control">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputtipe">Jumlah KDO kdo_aktif</label>
                  <input type="number" name="kdo_aktif" class="form-control" id="ebungga">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah KDO Rusak</label>
                  <input type="number" name="kdo_rusak" class="form-control" id="ebungga">
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah KDO JT/Lelang</label>
                    <input type="number" name="kdo_jt_lelang" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah KDO Hilang</label>
                    <input type="number" name="kdo_hilang" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah SDM Bisnis</label>
                    <input type="number" name="jml_sdm_bisnis" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah Std KDO</label>
                    <input type="number" name="jml_std_kdo" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Keterangan</label>
                    <textarea name="keterangan" id="ketid" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                </div>            
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
    
            </div>
            <!--Baris ke 2 EDIT tabungan ----->
          </div>
        <!-- /.modal-content -->
      @csrf
      </form>
      </div>

    </div>
    <!-- /.modal-dialog -->
  </div>   
  {{-- BATAS MODAL EDIT KDO --}}
  {{-- MODAL ADD KDO --}}
  <div class="modal fade" id="modal-add-kdo">
    <div class="modal-dialog modal-xl">
      <form action="/bo_kd_de_addkdo" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add Data KDO</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Baris ke 1 ADD tabungan ----->
            <div class="form-group">
              <div class="row">
                <input type="number" hidden name="id">
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Region</label>
                  <select class="form-control" name="region">
                    <option id="idregion" selected></option>
                    @foreach($region as $value)
                        <option value="{{$value->id}}">{{$value->nama_region}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Area</label>
                  <select class="form-control" name="area">
                    <option id="idarea" selected></option>
                    @foreach($area as $value)
                    <option value="{{$value->id}}">{{$value->nama_area}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Kode Unit</label>
                  <div class="input-group date" data-target-input="nearest">
                    <input type="text" id="addkdunit" name="kode_unit" class="form-control" readonly>
                    <div class="input-group-append" data-toggle="modal" data-target="#ambildataunit">
                      <div class="input-group-text"><i class="fa fa-book"></i></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Nama Unit</label>
                  <input type="text" style="width: 150%" id="addnmunit" name="nama_unit" readonly class="form-control">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah KDO</label>
                  <input type="number" id="editalamatnasabah" name="jumlah_kdo" class="form-control" value=0>
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputtipe">Jumlah KDO kdo_aktif</label>
                  <input type="number" name="kdo_aktif" class="form-control" value=0>
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah KDO Rusak</label>
                  <input type="number" name="kdo_rusak" class="form-control" value=0>
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah KDO JT/Lelang</label>
                    <input type="number" name="kdo_jt_lelang" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah KDO Hilang</label>
                    <input type="number" name="kdo_hilang" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah SDM Bisnis</label>
                    <input type="number" name="jml_sdm_bisnis" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah Std KDO</label>
                    <input type="number" name="jml_std_kdo" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Keterangan</label>
                    <textarea name="keterangan" id="ketid" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                </div>            
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
    
            </div>
            <!--Baris ke 2 EDIT tabungan ----->
          </div>
        <!-- /.modal-content -->
      @csrf
      </form>
      </div>

    </div>
    <!-- /.modal-dialog -->
  </div>   
  {{-- BATAS ADD KDO --}}

            {{-- MODAL TAMPILKAN UNIT --}}
            <div class="modal fade" id="ambildataunit" tabindex="-1" role="dialog" aria-labelledby="ambildataunitTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ambildataunit">Data Unit</h5>
                  </div>
                  <div class="modal-body">
                    <table id="idunit" class="display" width="100%">
                      <thead>
                        <tr>
                            <th>Kode_Unit</th>
                            <th>Nama_Unit</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($unit as $value)
                          <tr>
                          <td>{{ $value->kode_unit }}</td>
                          <td>{{ $value->nama_unit }}</td>
                          <td>
                            <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                              Action <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu">
                              <a id="klik" href="#" class="dropdown-item">
                                pilih
                              </a>
                            </div>
                          </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    
  
</div>
<!-- /.content -->
@endsection
