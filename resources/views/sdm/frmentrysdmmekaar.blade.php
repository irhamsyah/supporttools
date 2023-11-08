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
      <h3 style="margin-left:20px" class="card-title">Entry Data PKU</h3>

      <div class="col-12">
        <div class="card card-warning card-outline">
          <!-- form for Search Exsisting Saving Customer -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <div class="col-lg-3 col-sm-3" style="float:right;">
              <a href="{{route('showchart')}}" class="btn btn-info" style="margin-left: 150px">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-sdmmekaar" style="float: right;">
                <i class="fa fa-plus"></i>
              </button>
            </div>
            <h3 class="card-title">Data Yang Sudah Tercatat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover table-dark" width="100">
                <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Kode Unit</th>
                    <th rowspan="2">Unit</th>
                    <th rowspan="2">NoA</th>
                    <th rowspan="2">KUM</th>
                    <th colspan="2" style="text-align: center">SAO</th>
                    <th colspan="2" style="text-align: center">AO</th>
                    <th colspan="2" style="text-align: center">FAO</th>
                </tr>
                <tr>
                  <th colspan="1" style="text-align: center">Standar</th>
                  <th colspan="1" style="text-align: center">Realisasi</th>
                  <th colspan="1" style="text-align: center">Standar</th>
                  <th colspan="1" style="text-align: center">Realisasi</th>
                  <th colspan="1" style="text-align: center">Standar</th>
                  <th colspan="1" style="text-align: center">Realisasi</th>
                </tr>
                </thead>
              <tbody>
              @php($index=0)
                  @foreach($sdmmkr as $value)
                  @php($index++)
                    <tr>
                        <td style="text-align: center">{{$index}}</td>
                        <td style="text-align: center">{{$value->kode_unit}}</td>
                        <td style="text-align: center">{{$value->unit->nama_unit}}</td>
                        <td style="text-align: center">{{$value->noa_nasabah}}</td>
                        <td style="text-align: center">{{$value->kum}}</td>
                        <td style="text-align: center">{{$value->sao_standard}}</td>
                        <td style="text-align: center">{{$value->sao_realisasi}}</td>
                        <td style="text-align: center">{{$value->ao_standard}}</td>
                        <td style="text-align: center">{{$value->ao_realisasi}}</td>
                        <td style="text-align: center">{{$value->fao_standard}}</td>
                        <td style="text-align: center">{{$value->fao_realisasi}}</td>
                        <td>
                          <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                            Action <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu">
                          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-update-sdmmekaar"
                              data-kode_unit={{ $value->kode_unit }}
                              data-nama_unit={{ $value->unit->nama_unit }}
                              data-noa_nasabah={{ $value->noa_nasabah }}
                              data-kum={{ $value->kum }}
                              data-sao_standard={{ $value->sao_standard }}
                              data-sao_realisasi={{$value->sao_realisasi}}
                              data-ao_standard={{ $value->ao_standard }}
                              data-ao_realisasi={{ $value->ao_realisasi }}
                              data-fao_standard={{ $value->fao_standard }}
                              data-fao_realisasi={{ $value->fao_realisasi}}
                              >
                                Update
                            </a>
                            <form action="/bo_sd_del_sdmmekaar" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus perkiraan ini?')">
                              <button type="submit" tabindex="-1" class="dropdown-item">
                                Delete
                              </button>
                              <input type="hidden" name="_method" value="DELETE"/>
                              <input type="hidden" name="id" value="{{$value->kode_unit}}"/>
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
    <div class="modal fade" id="modal-update-sdmmekaar">
      <div class="modal-dialog modal-xl">
        <form action="/bo_sd_de_updsdmmekaar" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data SDM Mekaar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 ADD tabungan ----->
              <div class="form-group">
                <div class="row">
                  <input type="text" hidden name="kode_unit">
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama Unit</label>
                    <select class="form-control" name="pic_id">
                      <option id="idpic" selected></option>
                      @foreach($unit as $value)
                          <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Noa_Nasabah</label>
                      <input type="number" id="addkdunit" name="noa_nasabah" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">KUM</label>
                    <input type="number" id="addnmunit" name="kum" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Sao Standard</label>
                    <input type="number" id="editalamatnasabah" name="sao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Sao Realisasi</label>
                    <input type="number" id="editalamatnasabah" name="sao_realisasi" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Ao Standard</label>
                    <input type="number" id="editalamatnasabah" name="ao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Ao Standard</label>
                    <input type="number" id="editalamatnasabah" name="ao_realisasi" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputtipe">Jml Fao Standard</label>
                    <input type="number" name="fao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Fao Realisasi</label>
                    <input type="number" name="fao_realisasi" class="form-control" value=0>
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
    {{-- MODAL ADD KDO --}}
    <div class="modal fade" id="modal-add-sdmmekaar">
      <div class="modal-dialog modal-xl">
        <form action="/bo_sd_de_addsdmmekaar" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Data SDM Mekaar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 ADD tabungan ----->
              <div class="form-group">
                <div class="row">
                  <input type="text" hidden name="kode_unit">
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama Unit</label>
                    <select class="form-control" name="pic_id">
                      <option id="idpic" selected></option>
                      @foreach($unit as $value)
                          <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Noa_Nasabah</label>
                      <input type="number" id="addkdunit" name="noa_nasabah" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">KUM</label>
                    <input type="number" id="addnmunit" name="kum" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Sao Standard</label>
                    <input type="number" id="editalamatnasabah" name="sao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Sao Realisasi</label>
                    <input type="number" id="editalamatnasabah" name="sao_realisasi" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Ao Standard</label>
                    <input type="number" id="editalamatnasabah" name="ao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Ao Standard</label>
                    <input type="number" id="editalamatnasabah" name="ao_realisasi" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputtipe">Jml Fao Standard</label>
                    <input type="number" name="fao_standard" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jml Fao Realisasi</label>
                    <input type="number" name="fao_realisasi" class="form-control" value=0>
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
</div>
<!-- /.content -->
@endsection
