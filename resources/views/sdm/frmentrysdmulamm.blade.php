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
      <h3 style="margin-left:20px" class="card-title">Entry Data SDM Mekaar</h3>

      <div class="col-12">
        <div class="card card-warning card-outline">
          <!-- form for Search Exsisting Saving Customer -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <div class="col-lg-3 col-sm-3" style="float:right;">
              {{-- <a href="{{route('showchart')}}" class="btn btn-info" style="margin-left: 140px">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a> --}}
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-sdmulamm" style="float: right;">
                <i class="fa fa-plus">dsfs</i>
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
                    <th>Kode Unit</th>
                    <th>Nama Unit</th>
                    <th>KUU</th>
                    <th>AOM</th>
                    <th>KAM</th>
                    <th>AOM PANTAS</th>
                    <th>Action</th>
                </tr>
                </thead>
              <tbody>
              @php($index=0)
                  @foreach($sdmulamm as $value)
                  @php($index++)
                    <tr>
                        <td style="text-align: center">{{$index}}</td>
                        <td style="text-align: center">{{$value->kode_unit}}</td>
                        <td style="text-align: center">{{$value->unitulamm->nama_unit}}</td>
                        <td style="text-align: center">{{$value->kuu}}</td>
                        <td style="text-align: center">{{$value->aom}}</td>
                        <td style="text-align: center">{{$value->kam}}</td>
                        <td style="text-align: center">{{$value->aom_pantas}}</td>
                        <td>
                          <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                            Action <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu">
                          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-update-sdmulamm"
                              data-id={{ $value->id }}
                              data-kode_unit={{ $value->kode_unit }}
                              data-nama_unit={{ str_replace(" ","_",$value->unitulamm->nama_unit) }}
                              data-kuu={{ $value->kuu }}
                              data-aom={{ $value->aom }}
                              data-kam={{ $value->kam}}
                              data-aom_pantas={{$value->aom_pantas}}
                              >
                                Update
                            </a>
                            <form action="/bo_sd_del_sdmulamm" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus Data ini?')">
                              <button type="submit" tabindex="-1" class="dropdown-item">
                                Delete
                              </button>
                              <input type="hidden" name="_method" value="DELETE"/>
                              <input type="hidden" name="kode_unit" value={{$value->kode_unit}}/>

                              <input type="hidden" name="id" value="{{$value->id}}"/>
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
    {{-- MODAL EDIT SDM ULAMM --}}
    <div class="modal fade" id="modal-update-sdmulamm">
      <div class="modal-dialog modal-xl">
        <form action="/bo_sd_de_updsdmulamm" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data SDM ULaMM</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 edit sdm ulamm ----->
              <div class="form-group">
                <div class="row">
                  <input type="text" hidden name="id">
                  <input type="text" hidden name="kode_unit">
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama Unit</label>
                    <select class="form-control" name="pic_id">
                      <option id="idpic" selected></option>
                      @foreach($unitulamm as $value)
                          <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">KUU</label>
                    <input type="number" id="addnmunit" name="kuu" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">AOM</label>
                    <input type="number" id="editalamatnasabah" name="aom" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">KAM</label>
                    <input type="number" id="editalamatnasabah" name="kam" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">AOM Pantas</label>
                    <input type="number" id="editalamatnasabah" name="aom_pantas" class="form-control" value=0>
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
    {{-- MODAL ADD SDM ULaMM --}}
    <div class="modal fade" id="modal-add-sdmulamm">
        <div class="modal-dialog modal-xl">
          <form action="/bo_sd_de_addsdmulamm" method="post" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add Data SDM ULaMM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--Baris ke 1 ADD tabungan ----->
                <div class="form-group">
                  <div class="row">
                      <div class="col-lg-3 col-sm-6">
                      <label for="nasabahid">Nama Unit</label>
                      <select class="form-control" name="kode_unit">
                        <option id="idpic" selected></option>
                        @foreach($unitulamm as $value)
                            <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">KUU</label>
                      <input type="number" id="addnmunit" name="kuu" class="form-control" value=0>
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">AOM</label>
                      <input type="number" id="editalamatnasabah" name="aom" class="form-control" value=0>
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">KAM</label>
                      <input type="number" id="editalamatnasabah" name="kam" class="form-control" value=0>
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">AOM Pantas</label>
                      <input type="number" id="editalamatnasabah" name="aom_pantas" class="form-control" value=0>
                    </div>
                  </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD Data</button>
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
