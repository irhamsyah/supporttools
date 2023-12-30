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
      <h3 style="margin-left:20px" class="card-title">Entry Data JMT</h3>

      <div class="col-12">
        <div class="card card-warning card-outline">
          <!-- form for Search Exsisting Saving Customer -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <div class="col-lg-3 col-sm-3" style="float:right;">
              <a href="{{route('showchartjmt')}}" class="btn btn-info" style="margin-left: 140px">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-jmt" style="float: right;">
                <i class="fa fa-plus"></i>
              </button>
            </div>
            <h3 class="card-title">Data Yang Sudah Tercatat</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="contoh" class="table table-bordered table-hover table-dark" width="100">
                <thead>
                <tr>
                    <th rowspan="1">RKAP 2023</th>
                    <th rowspan="1" style="text-align: center">Target</th>
                    <th rowspan="1" style="text-align: center">Realisasi</th>
                    <th rowspan="1" style="text-align: center">Action</th>
                </tr>
                </thead>
              <tbody>
              @php($index=0)
                  @foreach($result as $value)
                    <tr>
                        <td style="text-align: center">{{$value->nama}}</td>
                        <td style="text-align: center">{{$value->target}}</td>
                        <td style="text-align: center">{{$value->realisasi}}</td>
                        <td>
                          <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                            Action <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu">
                          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-update-jmt"
                              data-id={{$value->id}}
                              data-nama={{ str_replace(" ","_",$value->nama)}}
                              data-targets={{$value->target}}
                              data-realisasi={{$value->realisasi}}
                              >
                                Update
                            </a>
                            <form action="/bo_jm_del_jmtmaindata" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                              <button type="submit" tabindex="-1" class="dropdown-item">
                                Delete
                              </button>
                              <input type="hidden" name="_method" value="DELETE"/>
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
  {{-- MODAL EDIT KDO --}}
  <div class="modal fade" id="modal-update-jmt">
    <div class="modal-dialog modal-xl">
      <form action="/bo_pk_de_updatemainjmt" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Data JMT</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Baris ke 1 ADD tabungan ----->
            <div class="form-group">
              <div class="row">
                <input type="text" hidden name="id">
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Nama Kegiatan</label>
                  <input type="text" name="nama" class="form-control" value=0>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <label for="nasabahid">Target</label>
                    <input type="number" name="target" class="form-control" value=0>
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Realisasi</label>
                  <input type="number" name="realisasi"  class="form-control" value=0>
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
    <div class="modal fade" id="modal-add-jmt">
      <div class="modal-dialog modal-xl">
        <form action="/bo_jm_de_addmainjmt" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Data JMT</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 ADD tabungan ----->
              <div class="form-group">
                <div class="row">
                  <input type="text" hidden name="id">
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama Kegiatan</label>
                    <input type="text" id="addname" name="nama" class="form-control">
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Target</label>
                      <input type="number" id="addkdunit" name="target" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Realisasi</label>
                    <input type="number" id="addnmunit" name="realisasi"  class="form-control" value=0>
                  </div>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">ADD</button>
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
