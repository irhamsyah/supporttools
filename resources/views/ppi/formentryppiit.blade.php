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
      <h3 style="margin-left:20px" class="card-title">Entry PPI IT (PC/LAPTOP)</h3>

      <div class="col-12">
        <div class="card card-warning card-outline">
          <!-- form for Search Exsisting Saving Customer -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <div class="col-lg-3 col-sm-3" style="float:right;">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-pclaptop" style="float: right;">
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
                <th>Jumlah PC/Laptop</th>
                <th>Jumlah PC/Laptop Aktif</th>
                <th>Jumlah PC/Laptop JT</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @php($index=0)
              @foreach($daftar as $values)
              @php($index++)
                <tr>
                  <td>{{ $index}}</td>
                  <td>{{ $values->region->nama_region }}</td>
                  <td>{{ $values->area->nama_area }}</td>
                  <td>{{ $values->kode_unit }}</td>
                  <td>{{ $values->unit->nama_unit }}</td>
                  <td>{{ $values->jumlah_laptop_pc }}</td>
                  <td>{{ $values->laptop_pc_aktif }}</td>
                  <td>{{ $values->laptop_pc_jt_lelang }}</td>
                  <td>{{ $values->keterangan }}</td>
                  <td>
                    <a class="dropdown-toggle btn btn-block bg-gradient-primary btn-sm" data-toggle="dropdown" href="#">
                      Action <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-edit-pclaptop"
                        data-id={{ $values->id }}
                        data-id_region={{ $values->id_region }}
                        data-nama_region={{ str_replace(" ","_",$values->region->nama_region) }}
                        data-id_area={{ $values->id_area }}
                        data-nama_area={{ str_replace(" ","_",$values->area->nama_area) }}
                        data-kode_unit={{ $values->kode_unit }}
{{-- ini teknik mengatasi kata yang ga muncul di jquery dgn mengganti spasi jadi _ --}}
                        data-nama_unit={{ str_replace(" ","_",$values->unit->nama_unit)}}
                        data-jumlah_laptop_pc={{ $values->jumlah_laptop_pc }}
                        data-laptop_pc_aktif={{ $values->laptop_pc_aktif }}
                        data-laptop_pc_rusak={{ $values->laptop_pc_rusak }}
                        data-laptop_pc_jt_lelang={{ $values->laptop_pc_jt_lelang}}
                        data-laptop_pc_hilang={{ $values->laptop_pc_hilang}}
                        data-jml_fao={{ $values->jml_fao}}
                        data-jml_std_laptop={{ $values->jml_std_laptop}}
                        data-keterangan={{ str_replace(" ","_",$values->keterangan)}}
                        >
                          Edit
                      </a>
                      <form action="/bo_del_pclaptop" method="post" style="margin-bottom: 0;" onclick="return confirm('Apakah anda yakin akan menghapus perkiraan ini?')">
                        <button type="submit" tabindex="-1" class="dropdown-item">
                          Delete
                        </button>
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="id" value="{{$values->id}}"/>
                        <input type="hidden" name="kode_unit" value="{{ $values->kode_unit."-".$values->unit->nama_unit}}"/>
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
  <div class="modal fade" id="modal-edit-pclaptop">
    <div class="modal-dialog modal-xl">
      <form action="/bo_it_de_updatepclaptop" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data PC/Laptop</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!--Baris ke 1 PC/Laptop ----->
            <div class="form-group">
              <div class="row">
                <input type="number" hidden name="id">
                <input type="text" hidden name="namaregion">

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
                  <select class="form-control" name="id_area">
                    <option id="idarea" selected></option>
                    @foreach($area as $value)
                    <option value="{{$value->id}}">{{$value->nama_area}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Nama Unit</label>
                    <select class="form-control" name="kode_unit">
                      <option id="idpic" selected></option>
                      @foreach($unit as $value)
                          <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah PC/Laptop</label>
                  <input type="number" id="editalamatnasabah" name="jumlah_laptop_pc" class="form-control">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputtipe">Jumlah PC/Laptop Aktif</label>
                  <input type="number" name="laptop_pc_aktif" class="form-control" id="ebungga">
                </div>
                <div class="col-lg-2 col-sm-8">
                  <label for="inputnocif">Jumlah PC/Laptop Rusak</label>
                  <input type="number" name="laptop_pc_rusak" class="form-control" id="ebungga">
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah PC/Laptop JT/Lelang</label>
                    <input type="number" name="laptop_pc_jt_lelang" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah PC/Laptop Hilang</label>
                    <input type="number" name="laptop_pc_hilang" class="form-control" value="0">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah FAO</label>
                    <input type="number" name="jml_fao" class="form-control" value="0">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah Std PC/Laptop</label>
                    <input type="number" name="jml_std_laptop" class="form-control" value="0">
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
  <div class="modal fade" id="modal-add-pclaptop">
    <div class="modal-dialog modal-xl">
      <form action="/bo_it_de_addpclaptop" method="post" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Data PC/Laptop</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!--Baris ke 1 PC/Laptop ----->
              <div class="form-group">
                <div class="row">
                  <input type="number" hidden name="id">
                  <input type="text" hidden name="namaregion">
  
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Region</label>
                    <select class="form-control" name="id_region">
                      <option id="idregion" selected></option>
                      @foreach($region as $value)
                          <option value="{{$value->id}}">{{$value->nama_region}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <label for="nasabahid">Area</label>
                    <select class="form-control" name="id_area">
                      <option id="idarea" selected></option>
                      @foreach($area as $value)
                      <option value="{{$value->id}}">{{$value->nama_area}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <label for="nasabahid">Nama Unit</label>
                      <select class="form-control" name="kode_unit">
                        <option id="idpic" selected></option>
                        @foreach($unit as $value)
                            <option value="{{$value->kode_unit}}">{{$value->nama_unit}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah PC/Laptop</label>
                    <input type="number" id="editalamatnasabah" name="jumlah_laptop_pc" class="form-control">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputtipe">Jumlah PC/Laptop Aktif</label>
                    <input type="number" name="laptop_pc_aktif" class="form-control" id="ebungga">
                  </div>
                  <div class="col-lg-2 col-sm-8">
                    <label for="inputnocif">Jumlah PC/Laptop Rusak</label>
                    <input type="number" name="laptop_pc_rusak" class="form-control" id="ebungga">
                  </div>
                </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">Jumlah PC/Laptop JT/Lelang</label>
                      <input type="number" name="laptop_pc_jt_lelang" class="form-control">
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">Jumlah PC/Laptop Hilang</label>
                      <input type="number" name="laptop_pc_hilang" class="form-control" value="0">
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">Jumlah FAO</label>
                      <input type="number" name="jml_fao" class="form-control" value="0">
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">Jumlah Std PC/Laptop</label>
                      <input type="number" name="jml_std_laptop" class="form-control" value="0">
                    </div>
                    <div class="col-lg-2 col-sm-8">
                      <label for="inputnocif">Keterangan</label>
                      <textarea name="keterangan" id="ketid" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                  </div>            
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
      
              </div>
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
