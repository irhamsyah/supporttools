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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-datapku" style="float: right;">
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
                    <th rowspan="3">PIC</th>
                    <th colspan="4" style="text-align: center">Mba Maya</th>
                    <th colspan="2" style="text-align: center">Kak Wulan</th>
                    <th rowspan="2" colspan="2" style="text-align: center">Pamaran</th>
                    <th rowspan="2" colspan="2" style="text-align: center">Action</th>
                </tr>
                <tr>
                  <th colspan="2" style="text-align: center">Mekaar</th>
                  <th colspan="2" style="text-align: center">ULaMM</th>
                  <th colspan="2" style="text-align: center">Mekaar</th>
                </tr>
                <tr>
                    <th style="text-align: center">Target</th>
                    <th style="text-align: center">Realisasi</th>
                    <th style="text-align: center">Target</th>
                    <th style="text-align: center">Realisasi</th>
                    <th style="text-align: center">Target</th>
                    <th style="text-align: center">Realisasi</th>
                    <th style="text-align: center">Target</th>
                    <th style="text-align: center">Realisasi</th>
                </tr>
                </thead>
              <tbody>
              {{-- @foreach($tabungan->chunk(100) as $index => $values) --}}
              @php($index=0)
                  @foreach($pkudt as $value)
                    <tr>
                        <td style="text-align: center">{{$value->pkuuser->nama}}</td>
                        <td style="text-align: center">{{$value->mba_maya_mekaar_target}}</td>
                        <td style="text-align: center">{{$value->mba_maya_mekaar_realisasi}}</td>
                        <td style="text-align: center">{{$value->mba_maya_ulamm_target}}</td>
                        <td style="text-align: center">{{$value->mba_maya_ulamm_realisasi}}</td>
                        <td style="text-align: center">{{$value->kak_wulan_mekaar_target}}</td>
                        <td style="text-align: center">{{$value->kak_wulan_mekaar_realisasi}}</td>
                        <td style="text-align: center">{{$value->pameran_target}}</td>
                        <td style="text-align: center">{{$value->pameran_realisasi}}</td>
                        <td>
                          <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                            Action <span class="caret"></span>
                          </a>
                          <div class="dropdown-menu">
                          <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-edit-kdo"
                              data-id={{ $value->id }}
                              data-nama={{ $value->pkuuser->nama }}
                              data-maya_mkr_target={{ $value->mba_maya_mekaar_target }}
                              data-maya_mkr_realisasi={{ $value->mba_maya_mekaar_realisasi }}
                              data-maya_ulm_target={{{$value->mba_maya_ulamm_target}}}
                              data-maya_ulm_realisasi={{ $value->mba_maya_ulamm_realisasi }}
                              data-wulan_target={{ $value->kak_wulan_mekaar_target }}
                              data-wulan_realisasi={{ $value->kak_wulan_mekaar_realisasi }}
                              data-pameran_target={{ $value->pameran_target}}
                              data-pameran_realisasi={{ $value->pameran_realisasi}}
                              >
                                Edit
                            </a>
                            <form action="/bo_del_pkudata" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus perkiraan ini?')">
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
    {{-- MODAL ADD KDO --}}
    <div class="modal fade" id="modal-add-datapku">
      <div class="modal-dialog modal-xl">
        <form action="/bo_pk_de_addpku" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Data PKU</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 ADD tabungan ----->
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama PIC</label>
                    <select class="form-control" name="pic_id">
                      <option id="idregion" selected></option>
                      @foreach($pkuser as $value)
                          <option value="{{$value->id}}">{{$value->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Mba Maya Mekaar Target</label>
                      <input type="number" id="addkdunit" name="mba_maya_mekaar_target" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Mba Maya Mekaar Realisasi</label>
                    <input type="number" id="addnmunit" name="mba_maya_mekaar_realisasi"  class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Mba Maya ULaMM Target</label>
                    <input type="number" id="editalamatnasabah" name="mba_maya_ulamm_target" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Mba Maya ULaMM Realisasi</label>
                    <input type="number" id="editalamatnasabah" name="mba_maya_ulamm_realisasi" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Kak Wulan Mekaar Target</label>
                    <input type="number" id="editalamatnasabah" name="kak_wulan_mekaar_target" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Kak Wulan Mekaar Realisasi</label>
                    <input type="number" id="editalamatnasabah" name="kak_wulan_mekaar_realisasi" class="form-control" value=0>
                  </div>

                  <div class="col-lg-2 col-sm-8">
                    <label for="inputtipe">Pameran Target</label>
                    <input type="number" name="pameran_target" class="form-control" value=0>
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Pameran Realisasi</label>
                    <input type="number" name="pameran_realisasi" class="form-control" value=0>
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
  
  {{-- BATAS ADD PKU --}}
</div>
<!-- /.content -->
@endsection
