<html>
<head>
  @php $actualLinktag = str_replace('/', '', "$_SERVER[REQUEST_URI]"); @endphp
  @if ($actualLinktag!='home') 
    @php 
      $pecahLink = explode('_', $actualLinktag);
      $mainmenu=$pecahLink[0];
      $menu=$pecahLink[1];
      $submenu=$pecahLink[2];
      $page=$pecahLink[3];
    @endphp
  @else 
    @php 
      $mainmenu='home';
      $menu='home';
      $submenu='home';
      $page='home';
    @endphp
  @endif

  @foreach($logos as $logo)
    @php ($logo=$logo->logo_name)
  @endforeach
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Supporting Tools</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- DataTables -->
  {{-- <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Logo Icon -->
  <link rel="shortcut icon" href="{{ asset('img/logo/'.$logo) }}" type="image/x-icon">
  <style>
    .tableProfil {
        display: table;
    }
    .rowProfil {
        display: table-row;
    }
    .cellProfil {
        display: table-cell;
    }
    .judulOrange {
      background: chocolate;
      padding: 0 10px;
      color: white;
    }
    .bottomlinesolid {
      border-bottom:1px solid grey;
    }
  </style>

  {{-- Data Table --}}
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> 

  <!-- SweetAlert2 -->
  <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  {{-- @php($nilaites) --}}
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user-circle fa-2x"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  @if(isset(Auth::user()['name']))
                  {{ Auth::user()->name }}
                  @endif
                </h3>
                <p class="text-sm">{{ 'Call me whenever you can...' }}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ '4 Hours Ago' }}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
            <a href="/password/reset" class="dropdown-item dropdown-footer">Change Password</a>
          <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('img/logo/'.$logo) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Supporting Tools</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MAIN MENU</li>
            <li class="nav-item has-treeview <?php if($mainmenu=='bo'){echo 'menu-open';}?>">
              <a href="#" class="nav-link <?php if($mainmenu=='bo'){echo 'active';}?>">
                @if(Auth::user()->privilege=='admin'||Auth::user()->privilege=='ppi'||Auth::user()->privilege=='pku'||Auth::user()->privilege=='sdm'||Auth::user()->privilege=='jmt')

                <i class="right fas fa-angle-left"></i>
                <p class="pl-0">INPUTAN DATA</p>
                @endif
              </a>
              <ul class="nav nav-treeview">
                {{-- MENU UNTUK PPI --}}
                @if(Auth::user()->privilege=='ppi'||Auth::user()->privilege=='admin')
                  <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                      <i class="right fas fa-angle-left"></i>
                      <p class="pl-1">PPI</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview <?php if(($menu=='en')){echo'menu-open';}?>">
                          <a href="#" class="nav-link <?php if($menu=='en'){echo 'active';} ?>" >
                            <i class="right fas fa-angle-left"></i>
                            <p class="pl-2">ENTRY DATA</p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_kd_de_showformentrykdo" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Data KDO</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="/bo_kd_de_showformentrypc" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Data PPI IT</p>
                              </a>
                            </li>

                            {{-- VALIDASI --}}
                          </ul>
                        </li>
                    </ul>
                  </li>
                @endif
                @if (Auth::user()->privilege=='pku'||Auth::user()->privilege=='admin')

                  <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                      <i class="right fas fa-angle-left"></i>
                      <p class="pl-1">PKU</p>
                    </a>
                {{-- Muncul panah yang bisa hadap kebawah untuk munculin menu didlmnya --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="right fas fa-angle-left"></i>

                            <p class="pl-2">ENTRY DATA</p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_kd_de_showformentrypku" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Data PKU</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                  @endif
                  {{-- SDM  --}}
                  @if(Auth::user()->privilege=='sdm'||Auth::user()->privilege=='admin')
                  <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                      <i class="right fas fa-angle-left"></i>
                      <p class="pl-1">SDM</p>
                    </a>
                {{-- Muncul panah yang bisa hadap kebawah untuk munculin menu didlmnya --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="right fas fa-angle-left"></i>
                            <p class="pl-2">ENTRY DATA</p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_sd_de_showformentrymekaar" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Karyawan Mekaar</p>
                              </a>
                            </li>
                          </ul>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_sd_de_showformentryulamm" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Karyawan ULaMM</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                  @endif
                  @if(Auth::user()->privilege==='jmt'||Auth::user()->privilege==='admin')
                  <li class="nav-item has-treeview menu-close">

                    <a href="#" class="nav-link">
                      <i class="right fas fa-angle-left"></i>
                      <p class="pl-1">Jasa Management</p>
                    </a>
                    {{-- Muncul panah yang bisa hadap kebawah untuk munculin menu didlmnya --}}
                    <ul class="nav nav-treeview">
                      <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="right fas fa-angle-left"></i>
                            <p class="pl-2">ENTRY DATA</p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_jm_de_showformentrymainjmt" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Kegiatan Utama</p>
                              </a>
                            </li>
                          </ul>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/bo_jm_de_showformentryinsijmt" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <p class="pl-3">Kegiatan Insidentil</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                  </li>
                  @endif
              </ul>
            </li>
            {{-- REPORT --}}
            @if(Auth::user()->privilege=='ppi'||Auth::user()->privilege=='view'||Auth::user()->privilege=='admin')

            <li class="nav-item has-treeview <?php if($mainmenu=='rp'){echo 'menu-open';}?>">
              <a href="#" class="nav-link <?php if($mainmenu=='rp'){echo 'active';}?>">
                <i class="right fas fa-angle-left"></i>
                <p class="pl-0">LAPORAN/EXPORT</p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item has-treeview menu-close">
                  <a href="#" class="nav-link">
                    <i class="right fas fa-angle-left"></i>
                    <p class="pl-1">PPI</p>
                  </a>
                {{-- Muncul panah yang bisa hadap kebawah untuk munculin menu didlmnya --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview">
                      <a href="bo_lp_ppi_kdo" class="nav-link">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p class="pl-2">Ketersediaan KDO</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="bo_lp_ppi_pclaptop" class="nav-link">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p class="pl-2">Ketersediaan PC/Laptop</p>
                      </a>
                    </li>
                  </ul>
                </li>
                @endif
                @if(Auth::user()->privilege=='pku'||Auth::user()->privilege=='view'||Auth::user()->privilege=='admin')
                <li class="nav-item has-treeview menu-close">
                    <a href="/bo_pk_cr_pku" class="nav-link">
                      <i class="fa fa-line-chart" aria-hidden="true"></i>
                      <p class="pl-1">PKU</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->privilege=='sdm'||Auth::user()->privilege=='view'||Auth::user()->privilege=='admin')
                <li class="nav-item has-treeview menu-close">
                  <a href="#" class="nav-link">
                    <i class="right fas fa-angle-left"></i>
                    <p class="pl-1">SDM</p>
                  </a>
                {{-- Muncul panah yang bisa hadap kebawah untuk munculin menu didlmnya --}}
                <ul class="nav nav-treeview">
                    <li class="nav-item has-treeview">
                      <a href="bo_lp_sdm_mekaar" class="nav-link">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p class="pl-2">SDM Mekaar</p>
                      </a>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="bo_lp_sdm_chartmekaar" class="nav-link">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <p class="pl-2">Chart SDM Mekaar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="bo_lp_sdm_ulamm" class="nav-link">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <p class="pl-2">SDM ULaMM</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            @endif

          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-arrow-circle-left"></i>
              <p>{{ __('Logout') }}</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('content')

  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">MBS Web</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- DataTables -->
{{-- <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}
{{-- <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script> --}}
{{-- <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- Ckeditor -->
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script>
      new DataTable('#example1');

  // fungsi ambil value text No_rekening disamakan ke No_alternatif
$(document).ready(function(){
		$("#norekadd").change(
    		function(){
        	document.getElementById("noaltadd").value =document.getElementById("norekadd").value;
        }
    );
});
// Fungsi untuk menampilkan Data Nasabah dari Modal yg akan diinput ke Tabungan
$(document).ready(function(){
// code to read selected table row cell data (values).
  $("#nasabahdata").on('click','#tes1',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
    //  var data=col1+"\n"+col2+"\n"+col3;
     document.getElementById("inputNasabahIdadd").value=col1;
     document.getElementById("inputNamaNasabahadd").value=col2;
     document.getElementById("inputalamatadd").value=col3;
    //  alert(data);
     document.getElementById("editidnasabah").value=col1;
     document.getElementById("editnamanasabah").value=col2;
     document.getElementById("editalamatnasabah").value=col3;

  });
  $("#nasabahdataget").on('click','#selectednasabah',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
    //  var data=col1+"\n"+col2+"\n"+col3;
     $('#inputnasabahid').val(col1);
     $('#inputnamanasabah').val(col2);
     $('#inputdomisili').val(col3);
     $('#inputalamat').val(col3);
     $('#inputnoidentitas').val(col4);

     var kodecab = $('#inputcab').val();
     $('#inputnocif').val(kodecab+col1);


  });
  
  //page Teller deposito ***********************************************
  //get rekening Deposito nasabah
  $("#datadepositoteller").on('click','#klikdeposito',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 4th TD
     var col5=currentRow.find("td:eq(4)").text(); // get current row 5th TD
     var col6=currentRow.find("td:eq(5)").text(); // get current row 6th TD
     var col7=currentRow.find("td:eq(6)").text(); // get current row 7th TD
     var col8=currentRow.find("td:eq(7)").text(); // get current row 8th TD
     var col9=currentRow.find("td:eq(8)").text(); // get current row 9th TD
     var col10=currentRow.find("td:eq(9)").text(); // get current row 10th TD
     var col11=currentRow.find("td:eq(10)").text(); // get current row 11th TD
     var col12=currentRow.find("td:eq(11)").text(); // get current row 12th TD
     var col13=currentRow.find("td:eq(12)").text(); // get current row 13th TD
    //  var data=col1+"\n"+col2+"\n"+col3;
     document.getElementById("putnorekening").value=col1;
     document.getElementById("putnamanasabah").value=col2;
     document.getElementById("putalamat").value=col3;
     document.getElementById("puttglregistrasi").value=col4;
     document.getElementById("puttgljt").value=col5;
     document.getElementById("putnominal").value=col6;
     document.getElementById("putjkw").value=col9;
     document.getElementById("putpph").value=col10;
     document.getElementById("putbunga").value=col11;
     document.getElementById("putalternatif").value=col12;
     document.getElementById("putkodepemilik").value=col13;
     document.getElementById("putjumlahsetoran").value=col6;

     $('#ambildatadepositoteller').modal('hide');

  });
  $("#datatabunganteller").on('click','#kliktabungan',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 4th TD
     var col5=currentRow.find("td:eq(4)").text(); // get current row 5th TD
     var col6=currentRow.find("td:eq(5)").text(); // get current row 6th TD
    //  var data=col1+"\n"+col2+"\n"+col3;
     $('#putnorekeningtab').val(col1);
     $('#putnamanasabahtab').val(col2);
     $('#putsaldoakhirtab').val(col5);

     $('#ambildatatabunganteller').modal('hide');
  });
  //page deposito *****************************************************
  //get rekening tabungan nasabah
  $("#rektabungandata").on('click','#tes2',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
     var col5=currentRow.find("td:eq(4)").text(); // get current row 3rd TD
    //  var data=col1+"\n"+col2+"\n"+col3;
     document.getElementById("inputkerekeningtabadd").value=col1;
    //  alert(data);
     document.getElementById("editkerekeningtab").value=col1;

     $('#ambildatarektab').modal('hide');

  });
  //set value on change jenis deposito
  $("#listjenisdeposito").change(function(e){
    var element = $(this).find('option:selected');
    var idjenisdeposito = element.val();
    var sukubungadeposito = element.data('ebunga');
    var pph = element.data('epph');
    var jkw = element.data('ejkw');
    var flagdep = element.data('eflagdep');
    var typesukubunga = element.data('etypesukubunga');
    var prosenprovisi = element.data('eprovisi');
    var prosenadm = element.data('eadm');
    $("#bunga").val(sukubungadeposito);
    $("#pph").val(pph);
    $("#jkw").val(jkw);
    $("#tipe_deposito").val(flagdep);
    $("#provisi").val(prosenprovisi);
    $("#adm").val(prosenadm);
    $("#type_bunga").val(typesukubunga);
    // alert(idjenisdeposito+'_'+sukubungadeposito);
  });
  $("#elistjenisdeposito").change(function(e){
    var element = $(this).find('option:selected');
    var idjenisdeposito = element.val();
    var sukubungadeposito = element.data('ebunga');
    var pph = element.data('epph');
    var jkw = element.data('ejkw');
    var flagdep = element.data('eflagdep');
    var typesukubunga = element.data('etypesukubunga');
    var prosenprovisi = element.data('eprovisi');
    var prosenadm = element.data('eadm');
    $("#ebunga").val(sukubungadeposito);
    $("#epph").val(pph);
    $("#ejkw").val(jkw);
    $("#etipe_deposito").val(flagdep);
    $("#eprovisi").val(prosenprovisi);
    $("#eadm").val(prosenadm);
    $("#etype_bunga").val(typesukubunga);
  });
  $("#tgl_registrasidepo").change(function(e){
    var tglregis = $(this).val();
    var tglvaluta = tglregis.split("-");
    // alert(tglregis);
    $("#tgl_valuta").val(tglvaluta[2]);
  });
  $("#etgl_registrasidepo").change(function(e){
    var tglregis = $(this).val();
    var tglvaluta = tglregis.split("-");
    // alert(tglregis);
    $("#etgl_valuta").val(tglvaluta[2]);
  });
  //***********end page deposito************************************/
});
// Menampilkan data nasabah di input text nasabah_id dengan DATATABEL
$(document).ready(function () {
    $('#nasabahdata').DataTable();
    $('#rektabungandata').DataTable();
});
// ------------------------------------
  $(function () {
    //validate form add nasabah
    $('#formaddnasabah').validate({
      rules: {
        inputnohp: {
          minlength: 10
        }
      },
      messages: {
        inputnohp: {
          minlength: "No HP minimal 10 karakter"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group-lbl').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

    //validate form edit nasabah
    $('#formeditnasabah').validate({
      rules: {
        inputnohpedit: {
          minlength: 10
        }
      },
      messages: {
        inputnohpedit: {
          minlength: "No HP minimal 10 karakter"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group-lbl').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
    
    //Validation min length 10
    $(".minlength10").on("keydown keyup change", function(){
      var minLength = 10;
      var value = $(this).val();
      if (value.length < minLength){
        $("span").text("No HP minimal 10 karakter");
        }
      else {
        $("span").text("");

        }
    });

    //Validation Decimal Only All
    $(".decimalonly").on("input", function(evt) {
     var self = $(this);
     self.val(self.val().replace(/[^0-9\.\-]/g, ''));
     if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
     {
       evt.preventDefault();
     }
    });
    
    //Validation number Only
    $(".numberonly").on("input", function(evt) {
     var self = $(this);
     self.val(self.val().replace(/[^0-9\+]/g, ''));
     if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
     {
       evt.preventDefault();
     }
    });

    //Validation number separator
    $(".separator").on("input", function(evt) {
     var self = $(this);
     self.val(self.val().replace(/[^\d.]/g, "").replace(/^(\d*\.)(.*)\.(.*)$/, '$1$2$3').replace(/\.(\d{2})\d+/, '.$1').replace(/\B(?=(\d{3})+(?!\d))/g, ","));
     if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
     {
       evt.preventDefault();
     }
    });

    //config datatables
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "responsive": true,
      "autoWidth": false,
      "lengthMenu": [ 25, 50, 100 ],
      "pageLength":50
    });
    $("#example2").DataTable({
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "autoWidth": false,
      "lengthMenu": [ 25, 50, 100 ],
      "pageLength":50
    });
    $("#example3").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "responsive": true,
      "autoWidth": false,
      "lengthMenu": [ 10, 25, 50],
      "pageLength":10
    });
    $(".tablemodal").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "responsive": true,
      "autoWidth": false,
      "lengthMenu": [ 25, 50, 100 ],
      "pageLength":50
    });
    $('#nasabahdataget').DataTable();

    //Initialize Select2 Elements
    $('.select2').select2()

    $('.dateYMD').datetimepicker({
        format: 'Y-MM-DD'
    });
    //Date picker tgl-jam
    $('#inputDate11').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate12').datetimepicker({
        format: 'Y-MM-DD hh:mm:ss'
    });
    $('#inputDate13').datetimepicker({
        format: 'Y-MM-DD'
    });

    $('#idtglnominatif').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#idtglnominatif1').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#idtglnominatif2').datetimepicker({
        format: 'Y-MM-DD'
    });
    
    $('#inputDate1').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate2').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate3').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate4').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate5').datetimepicker({
        format: 'Y-MM-DD'
    });
    $('#inputDate6').datetimepicker({
        format: 'Y-MM-DD'
    });


    //set value otomatis
    $("#inputnasabahid").on('change', function(){
      var nasabahidinput = this.value;
      var idcabanginput = $("#inputcab").val();
      $("#inputnocif").val(idcabanginput+nasabahidinput);
    });
    $(".inputnasabahidedit").on('change', function(){
      var nasabahidinput = this.value;
      var idcabanginput = $(".inputcabedit").val();
      $(".inputnocifedit").val(idcabanginput+nasabahidinput);
    });
    // Fungsi Untuk ambil Biaya Admin & Saldo Minimum saat pilih Jenis Tabungan
    $('#listItem').change(function(e) {
      var element = $(this).find('option:selected');
      var bunga = element.data("bunga");
      var adm = element.data("adm");
      var pph = element.data("pph");
      var salmin = element.data("salmin");
      var setmin = element.data("setmin");
      var setwajib = element.data("setwajib");
      var restricted = element.data("restricted");
      $('#bunga').val(bunga);
      $('#adm').val(adm);
      $('#pph').val(pph);
      $('#salmin').val(salmin);
      $('#setmin').val(setmin);
      $('#setwajib').val(setwajib);
      $('#restricted').val(restricted);
      $('#restricted').text(restricted);
    });
    $('#editlist').change(function(e) {
      var element = $(this).find('option:selected');
      var ebunga = element.data("ebunga");
      var eadm = element.data("eadm");
      var epph = element.data("epph");
      var esalmin = element.data("esalmin");
      var esetmin = element.data("esetmin");
      var esetwajib = element.data("esetwajib");
      var erestricted = element.data("erestricted");
      $('#ebunga').val(ebunga);
      $('#eadm').val(eadm);
      $('#epph').val(epph);
      $('#esalmin').val(esalmin);
      $('#esetmin').val(esetmin);
      $('#esetwajib').val(esetwajib);
      $('#erestricted').val(erestricted);
      $('#erestricted').text(erestricted);
    });

    //set ckeditor
    CKEDITOR.replace( 'inputText1' );
    CKEDITOR.replace( 'inputTitle1' );
    CKEDITOR.replace( 'inputText2' );
    CKEDITOR.replace( 'inputTitle2' );
  });
  
    //----------------------------------------Bahtera DATA LAMA CONTOH------------------------------
    //Generate Account Name from Company & Entity
    $('#inputEntity_edit').on('change', function() {
      var valueCompany = $("#inputCostumerName_edit").val();
      var valueEntity = $("#inputEntity_edit option:selected").text();
      if(valueEntity=='PERORANGAN'){valueEntity='';}else{valueEntity=', '+valueEntity;}
      $("#inputAccountName_edit").val(valueCompany+valueEntity);
    });
    $('#inputCostumerName_edit').on('change', function() {
      var valueCompany = $("#inputCostumerName_edit").val();
      var valueEntity = $("#inputEntity_edit option:selected").text();
      if(valueEntity=='PERORANGAN'){valueEntity='';}else{valueEntity=', '+valueEntity;}
      $("#inputAccountName_edit").val(valueCompany+valueEntity);
    });
    $('#inputEntity_add').on('change', function() {
      var valueCompany = $("#inputCostumerName_add").val();
      var valueEntity = $("#inputEntity_add option:selected").text();
      if(valueEntity=='PERORANGAN'){valueEntity='';}else{valueEntity=', '+valueEntity;}
      $("#inputAccountName_add").val(valueCompany+valueEntity);
    });
    $('#inputCostumerName_add').on('change', function() {
      var valueCompany = $("#inputCostumerName_add").val();
      var valueEntity = $("#inputEntity_add option:selected").text();
      if(valueEntity=='PERORANGAN'){valueEntity='';}else{valueEntity=', '+valueEntity;}
      $("#inputAccountName_add").val(valueCompany+valueEntity);
    });


    //Set data to Modals
    $('#modal-edit-newscategory').on('show.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id');
      var category = $(e.relatedTarget).data('category');
      $(e.currentTarget).find('input[name="inputNewsCategory"]').val(category);
      $(e.currentTarget).find('input[name="inputIdCategory"]').val(id);
    });


    $('#modal-edit-slider').on('show.bs.modal', function(e) {
      var SliderId = $(e.relatedTarget).data('id');
      var img_title = $(e.relatedTarget).data('img_title');

      $(e.currentTarget).find('input[name="inputImgOld"]').val(img_title);
      $(e.currentTarget).find('input[name="inputIdSlider"]').val(SliderId);
    });

    $('#modal-edit-service').on('show.bs.modal', function(e) {
      var ServiceId = $(e.relatedTarget).data('id');
      var img_title = $(e.relatedTarget).data('img_title');
      var title = $(e.relatedTarget).data('title');
      var detailid = $(e.relatedTarget).data('detailid');
      var detailen = $(e.relatedTarget).data('detailen');

      CKEDITOR.instances['inputText1'].setData(detailid);
      CKEDITOR.instances['inputTitle1'].setData(detailen);
      $(e.currentTarget).find('input[name="inputTitle"]').val(title);
      $(e.currentTarget).find('input[name="inputImgOld"]').val(img_title);
      $(e.currentTarget).find('input[name="inputIdService"]').val(ServiceId);
    });

    $('#modal-edit-logonew').on('show.bs.modal', function(e) {
      var LogoId = $(e.relatedTarget).data('id');
      var logoName = $(e.relatedTarget).data('name');

      $(e.currentTarget).find('input[name="inputLogoOld"]').val(logoName);
      $(e.currentTarget).find('input[name="inputIdLogo"]').val(LogoId);
    });

    $('#modal-edit-content').on('show.bs.modal', function(e) {
      var ContentId = $(e.relatedTarget).data('id');
      var TitleID = $(e.relatedTarget).data('titleid');
      var TitleEN = $(e.relatedTarget).data('titleen');
      var DescriptionID = $(e.relatedTarget).data('descriptionid');
      var DescriptionEN = $(e.relatedTarget).data('descriptionen');
      var Image = $(e.relatedTarget).data('image');

      CKEDITOR.instances['inputText1'].setData(DescriptionID);
      CKEDITOR.instances['inputTitle1'].setData(DescriptionEN);
      $(e.currentTarget).find('input[name="inputTitleID"]').val(TitleID);
      $(e.currentTarget).find('input[name="inputTitleEN"]').val(TitleEN);
      if(ContentId=='8'){
        $(e.currentTarget).find('input[name="inputImage"]').val(Image);
      }else{
        $(e.currentTarget).find('input[name="inputImage"]').val('');
      }
      $(e.currentTarget).find('input[name="inputIdContent"]').val(ContentId);
    });

    $('#modal-edit-contentfooter').on('change', function(e) {
      var ContentFooterId = $(e.relatedTarget).data('id');
      var Title = $(e.relatedTarget).data('title');
      var Description = $(e.relatedTarget).data('description');

      CKEDITOR.instances['inputText1'].setData(Description);
      $(e.currentTarget).find('input[name="inputTitle"]').val(Title);
      $(e.currentTarget).find('input[name="inputIdContentFooter"]').val(ContentFooterId);
    });
    //----------------------------------------Bahtera DATA LAMA------------------------------



    //set show hidden form at Laporan CS UMUM 
    $("#typedokumencsumum").on('change', function(){
      var typedokumencsumum = this.value;
      if(typedokumencsumum=="umum"){
        $(".formkasdong").css("display","none");
        $(".formumumdong").css("display","flex");
      }else{
        $(".formkasdong").css("display","flex");
        $(".formumumdong").css("display","none");
      }
    });



    //***************************************EDIT MODAL DEPOSITO************************** */
    $('#modal-edit-deposito').on('show.bs.modal', function(e) {
      var no_rekening = $(e.relatedTarget).data('no_rekening');
      var no_rekeninghash = $(e.relatedTarget).data('no_rekeninghash');
      var no_alternatif = $(e.relatedTarget).data('no_alternatif');
      var nasabah_id = $(e.relatedTarget).data('nasabah_id');
      var qq = $(e.relatedTarget).data('qq');
      var kode_bi_pemilik = $(e.relatedTarget).data('kode_bi_pemilik');
      var kode_bi_hubungan = $(e.relatedTarget).data('kode_bi_hubungan');
      var kode_bi_metoda = $(e.relatedTarget).data('kode_bi_metoda');
      var jenis_deposito = $(e.relatedTarget).data('jenis_deposito');
      var jml_deposito = $(e.relatedTarget).data('jml_deposito');
      var suku_bunga = $(e.relatedTarget).data('suku_bunga');
      var persen_pph = $(e.relatedTarget).data('persen_pph');
      var tgl_registrasi = $(e.relatedTarget).data('tgl_registrasi');
      var jkw = $(e.relatedTarget).data('jkw');
      var tgl_jt = $(e.relatedTarget).data('tgl_jt');
      var status_aktif = $(e.relatedTarget).data('status_aktif');
      var kode_group1 = $(e.relatedTarget).data('kode_group1');
      var kode_group2 = $(e.relatedTarget).data('kode_group2');
      var kode_group3 = $(e.relatedTarget).data('kode_group3');
      var status_bunga = $(e.relatedTarget).data('status_bunga');
      var aro = $(e.relatedTarget).data('aro');
      var no_rek_tabungan = $(e.relatedTarget).data('no_rek_tabungan');
      var bunga_berbunga = $(e.relatedTarget).data('bunga_berbunga');
      var masuk_titipan = $(e.relatedTarget).data('masuk_titipan');
      var abp = $(e.relatedTarget).data('abp');
      var type_suku_bunga = $(e.relatedTarget).data('type_suku_bunga');
      var tgl_valuta = $(e.relatedTarget).data('tgl_valuta');
      var provisi = $(e.relatedTarget).data('provisi');
      var adm = $(e.relatedTarget).data('adm');
      var tgl_mulai = $(e.relatedTarget).data('tgl_mulai');
      var blokir = $(e.relatedTarget).data('blokir');
      var akad = $(e.relatedTarget).data('akad');
      var gol_nasabah = $(e.relatedTarget).data('gol_nasabah');
      var keterangan = $(e.relatedTarget).data('keterangan');
      var cab = $(e.relatedTarget).data('cab');
      var nama_nasabah = $(e.relatedTarget).data('nama_nasabah');
      var alamat = $(e.relatedTarget).data('alamat');

      if(blokir=='1')
      {
        $(e.currentTarget).find('input[name="eblokir"]').prop('checked',true);
      }
      if(masuk_titipan=='1')
      {
        $(e.currentTarget).find('input[name="emasuktitipan"]').prop('checked',true);
      }
      if(bunga_berbunga=='1')
      {
        $(e.currentTarget).find('input[name="ebungaberbunga"]').prop('checked',true);
      }
      if(aro=='1')
      {
        $(e.currentTarget).find('input[name="earo"]').prop('checked',true);
      }
      if(status_aktif=='1'){
        $(e.currentTarget).find('input[id="einputstatus1"]').prop('checked',true);
      }else if(status_aktif=='2'){
        $(e.currentTarget).find('input[id="einputstatus2"]').prop('checked',true);
      }else{
        $(e.currentTarget).find('input[id="einputstatus3"]').prop('checked',true);
      }

      $(e.currentTarget).find('input[name="ecab"]').val(cab);
      $(e.currentTarget).find('select[name="ejenis_deposito"]').val(jenis_deposito).attr("selected", "selected");
      $(e.currentTarget).find('input[name="eno_rekening"]').val(no_rekening);
      $(e.currentTarget).find('input[name="eno_rekeningHashedit"]').val(no_rekeninghash);
      $(e.currentTarget).find('input[name="eno_bilyet"]').val(no_alternatif);
      $(e.currentTarget).find('input[name="enasabah_id"]').val(nasabah_id);
      $(e.currentTarget).find('input[name="enama_nasabah"]').val(nama_nasabah);
      $(e.currentTarget).find('input[name="ealamat"]').val(alamat);
      $(e.currentTarget).find('input[name="ejml_deposito"]').val(jml_deposito);
      $(e.currentTarget).find('select[name="etype_bunga"]').val(type_suku_bunga).attr("selected", "selected");
      $(e.currentTarget).find('input[name="esuku_bunga"]').val(suku_bunga);
      $(e.currentTarget).find('input[name="epersen_pph"]').val(persen_pph);
      $(e.currentTarget).find('input[name="etgl_registrasi"]').val(tgl_registrasi);
      $(e.currentTarget).find('input[name="ejkw"]').val(jkw);
      $(e.currentTarget).find('input[name="etgl_jt"]').val(tgl_jt);
      $(e.currentTarget).find('input[name="ekerekeningtab"]').val(no_rek_tabungan);
      $(e.currentTarget).find('input[name="etgl_penempatan"]').val(tgl_mulai);
      $(e.currentTarget).find('input[name="etgl_valuta"]').val(tgl_valuta);
      $(e.currentTarget).find('input[name="ecatatanaro"]').val(status_bunga);
      $(e.currentTarget).find('select[name="ekode_group1"]').val(kode_group1).attr("selected", "selected");
      $(e.currentTarget).find('select[name="ekode_group2"]').val(kode_group2).attr("selected", "selected");
      $(e.currentTarget).find('select[name="ekode_group3"]').val(kode_group3).attr("selected", "selected");
      $(e.currentTarget).find('select[name="ekode_bi_pemilik"]').val(kode_bi_pemilik).attr("selected", "selected");
      $(e.currentTarget).find('select[name="ekode_bi_hubungan"]').val(kode_bi_hubungan).attr("selected", "selected");
      $(e.currentTarget).find('select[name="etipe_deposito"]').val(abp).attr("selected", "selected");
      $(e.currentTarget).find('select[name="emetoda"]').val(kode_bi_metoda).attr("selected", "selected");
      $(e.currentTarget).find('input[name="eketerangan"]').val(keterangan);
      $(e.currentTarget).find('input[name="eprovisi"]').val(provisi);
      $(e.currentTarget).find('input[name="eadministrasi"]').val(adm);
    });

    /************************************************************************************* */

    // Function show modal Data Nasabah yang di EDIT
    $('#modal-edit-nasabah').on('show.bs.modal', function(e) {
      /* Generate / Get variables */
      var pattern = "00";
      var url      = window.location.href;
      var origin   = window.location.origin;
      /********************************** */
      var No_din = $(e.relatedTarget).data('no_din');
      var No_nasabah = $(e.relatedTarget).data('no_nasabah');
      var cab = $(e.relatedTarget).data('cab');
      var cif = $(e.relatedTarget).data('cif');
      var blacklist = $(e.relatedTarget).data('blacklist');
      var nama_nasabah = $(e.relatedTarget).data('nama_nasabah');
      var nama_alias = $(e.relatedTarget).data('nama_alias');
      var tempatlahir = $(e.relatedTarget).data('tempatlahir');
      var tgllahir = $(e.relatedTarget).data('tgllahir');
      var jenis_kelamin = $(e.relatedTarget).data('jenis_kelamin');
      var ibu_kandung = $(e.relatedTarget).data('ibu_kandung');
      var npwp = $(e.relatedTarget).data('npwp');
      var jenis_id = $(e.relatedTarget).data('jenis_id');
      var no_id = $(e.relatedTarget).data('no_id');
      var tglid = $(e.relatedTarget).data('tglid');
      var nasabah_kodegroup1 = $(e.relatedTarget).data('nasabah_kodegroup1');
      var status_kawin_awal = $(e.relatedTarget).data('status_kawin');
      var status_kawin = (pattern + status_kawin_awal).slice(-2);
      var alamat_domisili = $(e.relatedTarget).data('alamat_domisili');
      var kode_area = $(e.relatedTarget).data('kode_area');
      var telpon = $(e.relatedTarget).data('telpon');
      var no_hp = $(e.relatedTarget).data('no_hp');
      var alamat = $(e.relatedTarget).data('alamat');
      var kelurahan = $(e.relatedTarget).data('kelurahan');
      var kecamatan = $(e.relatedTarget).data('kecamatan');
      var kode_pos = $(e.relatedTarget).data('kode_pos');
      var kota_id = $(e.relatedTarget).data('kota_id');
      var Kode_Negara = $(e.relatedTarget).data('kode_negara');
      var Tempat_Kerja = $(e.relatedTarget).data('tempat_kerja');
      var alamat_kantor = $(e.relatedTarget).data('alamat_kantor');
      var pekerjaan_id = $(e.relatedTarget).data('pekerjaan_id');
      var pekerjaan = $(e.relatedTarget).data('pekerjaan');
      var kode_sumber_penghasilan = $(e.relatedTarget).data('kode_sumber_penghasilan');
      var penghasilan_setahun = $(e.relatedTarget).data('penghasilan_setahun');
      var gelar_id = $(e.relatedTarget).data('gelar_id');
      var Ket_Gelar = $(e.relatedTarget).data('ket_gelar');
      var Kode_Bidang_Usaha = $(e.relatedTarget).data('kode_bidang_usaha');
      var Kode_Hubungan_Debitur = $(e.relatedTarget).data('kode_hubungan_debitur');
      var kode_golongan_debitur = $(e.relatedTarget).data('kode_golongan_debitur');
      var nama_pendamping = $(e.relatedTarget).data('nama_pendamping');
      var id_pasangan = $(e.relatedTarget).data('id_pasangan');
      var tgllhr_pasangan = $(e.relatedTarget).data('tgllhr_pasangan');
      var jml_tanggungan = $(e.relatedTarget).data('jml_tanggungan');
      var Tujuan_Pembukaan_KYC = $(e.relatedTarget).data('tujuan_pembukaan_kyc');
      var penggunaan_dana_KYC = $(e.relatedTarget).data('penggunaan_dana_kyc');
      var Nama_Kuasa = $(e.relatedTarget).data('nama_kuasa');
      var Alamat_KUASA = $(e.relatedTarget).data('alamat_kuasa');
      var hub_KUASA = $(e.relatedTarget).data('hub_kuasa');
      var Path_FOTO = $(e.relatedTarget).data('path_foto');
      var Path_TTANGAN = $(e.relatedTarget).data('path_ttangan');
      var nasabah_idhash = $(e.relatedTarget).data('nasabah_idhash');
      var Path_FOTO_show = $(e.relatedTarget).data('path_foto_show');
      var Path_TTANGAN_show = $(e.relatedTarget).data('path_ttangan_show');
      if(Path_FOTO_show==origin+'/img/foto'){
        Path_FOTO_show=origin+'/img/foto/default.jpg'
      }
      if(Path_TTANGAN_show==origin+'/img/ttangan'){
        Path_TTANGAN_show=origin+'/img/ttangan/default.jpg'
      }
      // alert(hub_KUASA);

      if(blacklist=='1')
      {
        $(e.currentTarget).find('input[name="inputblacklistedit"]').prop('checked',true);
      }

      $(e.currentTarget).find('input[name="inputdinedit"]').val(No_din);
      $(e.currentTarget).find('input[name="inputnasabahidedit"]').val(No_nasabah);
      $(e.currentTarget).find('input[name="inputcabedit"]').val(cab);
      $(e.currentTarget).find('input[name="inputnocifedit"]').val(cif);
      $(e.currentTarget).find('input[name="inputnamanasabahedit"]').val(nama_nasabah);
      $(e.currentTarget).find('input[name="inputaliasedit"]').val(nama_alias);
      $(e.currentTarget).find('input[name="inputtempatlahiredit"]').val(tempatlahir);
      $(e.currentTarget).find('input[name="inputtgllahiredit"]').val(tgllahir);
      $(e.currentTarget).find('select[name="inputjkedit"]').val(jenis_kelamin).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputibukandungedit"]').val(ibu_kandung);
      $(e.currentTarget).find('input[name="inputnpwpedit"]').val(npwp);
      $(e.currentTarget).find('select[name="inputidentitasedit"]').val(jenis_id).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputnoidentitasedit"]').val(no_id);
      $(e.currentTarget).find('input[name="inputmasaberlakuedit"]').val(tglid);
      $(e.currentTarget).find('select[name="inputagamaedit"]').val(nasabah_kodegroup1).attr("selected", "selected");
      $(e.currentTarget).find('select[name="inputkawinedit"]').val(status_kawin).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputdomisiliedit"]').val(alamat_domisili);
      $(e.currentTarget).find('input[name="inputkodetlpedit"]').val(kode_area);
      $(e.currentTarget).find('input[name="inputnotlpedit"]').val(telpon);
      $(e.currentTarget).find('input[name="inputnohpedit"]').val(no_hp);
      $(e.currentTarget).find('input[name="inputalamatedit"]').val(alamat);
      $(e.currentTarget).find('input[name="inputkelurahanedit"]').val(kelurahan);
      $(e.currentTarget).find('input[name="inputkecamatanedit"]').val(kecamatan);
      $(e.currentTarget).find('input[name="inputkodeposedit"]').val(kode_pos);
      $(e.currentTarget).find('select[name="inputkotaedit"]').val(kota_id).attr("selected", "selected");
      $(e.currentTarget).find('select[name="inputnegaraedit"]').val(Kode_Negara).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputnamaperusahaanedit"]').val(Tempat_Kerja);
      $(e.currentTarget).find('input[name="inputalamatperusahaanedit"]').val(alamat_kantor);
      $(e.currentTarget).find('select[name="inputpekerjaanedit"]').val(pekerjaan_id).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputdetpekerjaanedit"]').val(pekerjaan);
      $(e.currentTarget).find('select[name="inputsumberdanaedit"]').val(kode_sumber_penghasilan).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputpenghasilansetahunedit"]').val(penghasilan_setahun);
      $(e.currentTarget).find('select[name="inputgelaredit"]').val(gelar_id).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputdetgelaredit"]').val(Ket_Gelar);
      $(e.currentTarget).find('select[name="inputbidangusahasidedit"]').val(Kode_Bidang_Usaha).attr("selected", "selected");
      $(e.currentTarget).find('select[name="inputhubdebsidedit"]').val(Kode_Hubungan_Debitur).attr("selected", "selected");
      $(e.currentTarget).find('select[name="inputgoldebsidedit"]').val(kode_golongan_debitur).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputnamapendampingedit"]').val(nama_pendamping);
      $(e.currentTarget).find('input[name="inputidpendampingedit"]').val(id_pasangan);
      $(e.currentTarget).find('input[name="inputtgllahirpendampingedit"]').val(tgllhr_pasangan);
      $(e.currentTarget).find('input[name="inputjmltanggunganedit"]').val(jml_tanggungan);
      $(e.currentTarget).find('input[name="inputtujuanbukarekedit"]').val(Tujuan_Pembukaan_KYC);
      $(e.currentTarget).find('input[name="inputpenggunaandanaedit"]').val(penggunaan_dana_KYC);
      $(e.currentTarget).find('input[name="inputnamaahliwarisedit"]').val(Nama_Kuasa);
      $(e.currentTarget).find('input[name="inputalamatahliwarisedit"]').val(Alamat_KUASA);
      $(e.currentTarget).find('select[name="inputhubahliwarisedit"]').val(hub_KUASA).attr("selected", "selected");
      $(e.currentTarget).find('input[name="inputFotoeditold"]').val(Path_FOTO);
      $(e.currentTarget).find('input[name="inputtandatanganeditold"]').val(Path_TTANGAN);
      $(e.currentTarget).find('input[name="inputIdNasabahHashedit"]').val(nasabah_idhash);
      $('#path_foto_show').attr("src", Path_FOTO_show);
      $('#path_ttangan_show').attr("src", Path_TTANGAN_show);
    });

    // Fungsi untuk menampilkan Data Tabungan yang akan d EDIT
    $('#modal-edit-tabungan').on('show.bs.modal', function(e) {
      var No_rekening = $(e.relatedTarget).data('no_rekening');
      var Jenis_tabungan = $(e.relatedTarget).data('jenis_tabungan');
      var Hidden_jenis_tabungan = $(e.relatedTarget).data('hidden_jenis_tabungan');
      var No_alternatif = $(e.relatedTarget).data('no_alternatif');
      var Cab = $(e.relatedTarget).data('cab');
      var Nasabah_id = $(e.relatedTarget).data('nasabah_id');
      var Nama_nasabah = $(e.relatedTarget).data('nama_nasabah');
      var Alamat = $(e.relatedTarget).data('alamat');
      var Type_tabungan = $(e.relatedTarget).data('type_tabungan');
      var Suku_bunga = $(e.relatedTarget).data('suku_bunga');
      var Persen_pph = $(e.relatedTarget).data('persen_pph');
      var Tgl_bunga = $(e.relatedTarget).data('tgl_bunga');
      var Blokir = $(e.relatedTarget).data('blokir');
      var Saldo_blokir = $(e.relatedTarget).data('saldo_blokir');
      var Kode_group1 = $(e.relatedTarget).data('kode_group1');
      var Desc_group1 = $(e.relatedTarget).data('desc_group1');
      var Kode_group2 = $(e.relatedTarget).data('kode_group2');
      var Desc_group2 = $(e.relatedTarget).data('desc_group2');
      var Kode_group3 = $(e.relatedTarget).data('kode_group3');
      var Desc_group3 = $(e.relatedTarget).data('desc_group3');
      var Status_aktif = $(e.relatedTarget).data('status_aktif');
      var Kode_bi_pemilik = $(e.relatedTarget).data('kode_bi_pemilik');
      var Deskripsi_golongan = $(e.relatedTarget).data('deskripsi_golongan');
      var Kode_bi_metoda = $(e.relatedTarget).data('kode_bi_metoda');
      var Deskripsi_metoda = $(e.relatedTarget).data('deskripsi_metoda');
      var Kode_bi_hubungan = $(e.relatedTarget).data('kode_bi_hubungan');
      var Deskripsi_sandi = $(e.relatedTarget).data('deskripsi_sandi');
      var Flag_restricted = $(e.relatedTarget).data('flag_restricted');
      var Minimum = $(e.relatedTarget).data('minimum');
      var Setoran_minimum = $(e.relatedTarget).data('setoran_minimum');
      var Setoran_per_bln = $(e.relatedTarget).data('setoran_per_bln');
      var Abp = $(e.relatedTarget).data('abp');
      var Adm_per_bln = $(e.relatedTarget).data('adm_per_bln');

      // BAGIAN MENAMPILKAN DI FORM MODAL----------------------
      $(e.currentTarget).find('input[name="no_rekening"]').val(No_rekening);
      // Cara Menampilkan Selected option dari DATABASE pada DROPDOWN LIST
      $('#idSelect').text(Jenis_tabungan);
      $('#idSelect').val(Hidden_jenis_tabungan);
      // -------------------------------------------
      // Cara Menampilkan Selected option dari DATABASE pada DROPDOWN LIST dengan kondisi tertentu
      // demgan cara id pada OPTION
      switch(Type_tabungan)
      {
        case 1:
        $('#idSelect2').text("Normal");
        $('#idSelect2').val(1);
        break;
        case 2:
        $('#idSelect2').text("Kepala Instansi");
        $('#idSelect2').val(2);
        break;
        case 3:
        $('#idSelect2').text("Juru Bayar");
        $('#idSelect2').val(3);
      }
        //Selected Kode Group 1
        $('#idkodegroup1').val(Kode_group1)
        $('#idkodegroup1').text(Desc_group1)
        //Selected Kode Group 2
        $('#idkodegroup2').val(Kode_group2)
        $('#idkodegroup2').text(Desc_group2)
        //Selected Kode Group 3
        $('#idkodegroup3').val(Kode_group3)
        $('#idkodegroup3').text(Desc_group3)
        // ------------------
        $('#idkodebi').val(Kode_bi_pemilik)
        $('#idkodebi').text(Kode_bi_pemilik +'-'+Deskripsi_golongan)
        $('#idmetoda').val(Kode_bi_metoda);
        $('#idmetoda').text(Deskripsi_metoda);
        $('#idbihubungan').val(Kode_bi_hubungan);
        $('#idbihubungan').text(Deskripsi_sandi);
        $('#idrestricted').val(Flag_restricted);
        $('#idrestricted').text(Flag_restricted);
        //Selected Type Tabugan dengan id pada Select element
        switch(Abp)
        {
          case 1:
            $("select#idabp option:checked").val(Abp);
            $("select#idabp option:checked").text("TABUNGAN");
            break;
          case 2:
            $("select#idabp option:checked").val(Abp);
            $("select#idabp option:checked").text("AB-PASIVA");
            break;
          case 3:
            $("select#idabp option:checked").val(Abp);
            $("select#idabp option:checked").text("AB-AKTIVA");
            break;
          case 4:
            $("select#idabp option:checked").val(Abp);
            $("select#idabp option:checked").text("MODAL");
            break;
          case 5:
            $("select#idabp option:checked").val(Abp);
            $("select#idabp option:checked").text("KEWAJIBAN");

        }
      // ----------------------------------
      // Menampilkan nilai pada input TEXT dari DATABASE
$(e.currentTarget).find('input[name="hidden_jenis_tabungan"]').val(Hidden_jenis_tabungan);                 $(e.currentTarget).find('input[name="no_alternatif"]').val(No_alternatif);
        $(e.currentTarget).find('input[name="cab"]').val(Cab);
        $(e.currentTarget).find('input[name="nasabah_id"]').val(Nasabah_id);
        $(e.currentTarget).find('input[name="nama_nasabah"]').val(Nama_nasabah);
        $(e.currentTarget).find('input[name="alamat"]').val(Alamat);
        $(e.currentTarget).find('input[name="suku_bunga"]').val(Suku_bunga);
        $(e.currentTarget).find('input[name="persen_pph"]').val(Persen_pph);
        $(e.currentTarget).find('input[name="tgl_bunga"]').val(Tgl_bunga);
        $(e.currentTarget).find('input[name="minimum"]').val(Minimum);
        $(e.currentTarget).find('input[name="setoran_minimum"]').val(Setoran_minimum);
        $(e.currentTarget).find('input[name="setoran_per_bln"]').val(Setoran_per_bln);
        $(e.currentTarget).find('input[name="adm_per_bln"]').val(Adm_per_bln);
        $(e.currentTarget).find('input[name="saldo_blokir"]').val(Saldo_blokir);

      // Menampilkan CheckBox Tercentang option dari DATABASE dengan kondisi tertentu
      if(Blokir=='1')
      {
          $("input[name='blokir']").prop('checked',true);
      }
      if(Status_aktif==1){
        $("input[name='baru']").prop('checked', true);
      }else if(Status_aktif==2){
        $("input[name='aktif']").prop('checked', true);
      }else{
        $("input[name='tutup']").prop('checked', true);
      }

    } );
    // UPDATE BUNGA DAN PAJAK TABUNGAN
    $('#modal-update-bungpajaktab').on('show.bs.modal', function(e) {
      var No_rekening = $(e.relatedTarget).data('no_rekening');
      var Nama_nasabah = $(e.relatedTarget).data('nama_nasabah');
      var Bunga_bln_ini = $(e.relatedTarget).data('bunga_bln_ini');
      var Pajak_bln_ini = $(e.relatedTarget).data('pajak_bln_ini');
      var Adm_bln_ini = $(e.relatedTarget).data('adm_bln_ini');
      $(e.currentTarget).find('input[name="no_rekening"]').val(No_rekening);
      $(e.currentTarget).find('input[name="nama_nasabah"]').val(Nama_nasabah);
      $(e.currentTarget).find('input[name="bunga_bln_ini"]').val(Bunga_bln_ini);
      $(e.currentTarget).find('input[name="pajak_bln_ini"]').val(Pajak_bln_ini);
      $(e.currentTarget).find('input[name="adm_bln_ini"]').val(Adm_bln_ini);

    });
// Fungsi untuk menampilkan Data Tabungan pada Modal yg akan diinput ke Form BlokirTabungan
$(document).ready(function(){
// code to read selected table row cell data (values).
$("#datatabungan").on('click','#klik',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
     var col5=currentRow.find("td:eq(4)").text(); // get current row 3rd TD
     var col6=currentRow.find("td:eq(5)").text(); // get current row 3rd TD

    //  var data=col1+"\n"+col2+"\n"+col3;
     document.getElementById("inputnorekening").value=col1;
     document.getElementById("inputnamanasabah").value=col2;
     document.getElementById("inputalamat").value=col3;
     document.getElementById("inputjenistabungan").value=col4;
     document.getElementById("inputsaldoakhir").value=col5;
     document.getElementById("inputsaldoblokir").value=col6;

    //  alert(data);
      });
    });
  $('#modal-unblokir').on('show.bs.modal', function(e) {

      var No_rekening = $(e.relatedTarget).data('no_rekening');
      var Nama_nasabah = $(e.relatedTarget).data('nama_nasabah');
      var Saldo_blokir = $(e.relatedTarget).data('saldo_blokir');
      var Tgl_blokir = $(e.relatedTarget).data('tgl_blokir');

      $(e.currentTarget).find('input[name="no_rekening"]').val(No_rekening);
      $(e.currentTarget).find('input[name="nama_nasabah"]').val(Nama_nasabah);
      $(e.currentTarget).find('input[name="saldo_blokir"]').val(Saldo_blokir);
      $(e.currentTarget).find('input[name="tgl_blokir"]').val(Tgl_blokir);
    })

    // DATATABLE
$(document).ready(function () {
    $('#datatabungan').DataTable();
});

// Fungsi untuk menampilkan Data Tabungan pada Modal yg akan diinput ke Form TRANSAKSI
$(document).ready(function(){
// code to read selected table row cell data (values).
$("#datatabungan").on('click','#klik',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     
     var col1=currentRow.find("td:eq(0)").text(); // no_rek/get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // nama/get current row 2nd TD
     var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
     var col4=currentRow.find("td:eq(3)").text(); // get current row 4th TD
     var col5=currentRow.find("td:eq(4)").text(); // get current row 5th TD
     var col6=currentRow.find("td:eq(5)").text(); // get current row 6th TD

    //  var data=col1+"\n"+col2+"\n"+col3;
     document.getElementById("putnorekening").value=col1;
     document.getElementById("putnamanasabah").value=col2;
     document.getElementById("putalamat").value=col3;
     document.getElementById("putjenistab").value=col4;
     document.getElementById("putsaldoakhir").value=col5;
     document.getElementById("putsaldoblokir").value=col6;

    //  alert(data);
      });
    $(e.currentTarget).find('input[name="nama_nasabah"]').val(Nama_nasabah);
    $(e.currentTarget).find('input[name="saldo_blokir"]').val(Saldo_blokir);
    $(e.currentTarget).find('input[name="tgl_blokir"]').val(Tgl_blokir);

    });
    // UPDATE KODE PERKIRAAN PADA FORM VALIDASI TRANSAKSI
    $('#modal-update-kodeperk').on('show.bs.modal', function(e) {
      var Trans_id = $(e.relatedTarget).data('trans_id');
      var Master_id = $(e.relatedTarget).data('master_id');
      var Kode_perk = $(e.relatedTarget).data('kode_perk');
      var Nama_perk = $(e.relatedTarget).data('nama_perk');
      var Uraian = $(e.relatedTarget).data('uraian');
      var Type = $(e.relatedTarget).data('type');
      var Debet = $(e.relatedTarget).data('debet');
      var Kredit = $(e.relatedTarget).data('kredit');

      $(e.currentTarget).find('input[name="trans_id"]').val(Trans_id);
      $(e.currentTarget).find('input[name="master_id"]').val(Master_id);
      $(e.currentTarget).find('input[name="kode_perk"]').val(Kode_perk);
      $(e.currentTarget).find('input[name="nama_perk"]').val(Nama_perk);
      $(e.currentTarget).find('input[name="uraian"]').val(Uraian);
      $(e.currentTarget).find('input[name="type"]').val(Type);
      $(e.currentTarget).find('input[name="debet"]').val(Debet);
      $(e.currentTarget).find('input[name="kredit"]').val(Kredit);
    });

// DATATABLE
    $(document).ready(function () {
        $('#idperkiraan').DataTable({ordering:false});
    });
    // PROSES GANTI PERKIRAAN SAAT KLIK/PILIH PERKIRAAN TERUPDATE KE FORM VALIDASI
      $(document).ready(function(){
      // code to read selected table row cell data (values).
      $("#idperkiraan").on('click','#klik',function(){
          // get the current row
          var currentRow=$(this).closest("tr"); 
          var col1=currentRow.find("td:eq(0)").text(); // no_rek/get current row 1st TD value
          var col2=currentRow.find("td:eq(1)").text(); // nama/get current row 2nd TD
          var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD

          //  var data=col1+"\n"+col2+"\n"+col3;
            if(col3=='D'){
              document.getElementById("idkodeperk").value=col1;
              document.getElementById("idnamaperk").value=col2;
              document.getElementById("idkodeperk2").value=col1;
              document.getElementById("idnamaperk2").value=col2;
              document.getElementById("idtypex").value=col3;
            }else{
              alert("HARUS TYPE CABANG BUKAN INDUK");
            }
        });
      });
    // DATATABLE
    $(document).ready(function () {
        $('#idperkiraanxx').DataTable({ordering:false});
        // DATATABLE PADA PENCATATAN TRANSAKSI PADA BAGIAN RECORD PENCATATATAN TRANSAKSI
        $('#idperkiraancatat').DataTable({ordering:false});
        // DATA TABLE PADA DATA ENTRY DATAPERKIRAAN
        $('#idunit').DataTable({ordering:false});

    });
    // munculin data perk saat diklik
    $(document).ready(function(){
      // code to read selected table row cell data (values).
        $("#idperkiraanxx").on('click','#klik',function(){
            // get the current row
            var currentRow=$(this).closest("tr"); 
            var col1=currentRow.find("td:eq(0)").text(); // no_rek/get current row 1st TD value
            var col2=currentRow.find("td:eq(1)").text(); // nama/get current row 2nd TD
            var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
            var col4=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
            var col5=currentRow.find("td:eq(4)").text(); // get current row 3rd TD
            //  FORM PENCATATAN JURNAL TRANSAKSI 
            if(col5=='D'){
              document.getElementById("idKodePerkadd").value=col1;
              document.getElementById("idNamaPerkadd").value=col2;
              }else{
                alert("HARUS TYPE CABANG BUKAN INDUK");
              }
          });
      //Pada FORM PENCATATAN JURNAL TRANSAKSI PADA MODAL PERUBHAHAN KODE_PERK
      $("#idperkiraancatat").on('click','#kliky',function(){
            // get the current row
            var currentRow=$(this).closest("tr"); 
            var col1=currentRow.find("td:eq(0)").text(); // no_rek/get current row 1st TD value
            var col2=currentRow.find("td:eq(1)").text(); // nama/get current row 2nd TD
            var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
            var col4=currentRow.find("td:eq(3)").text(); // get current row 3rd TD
            var col5=currentRow.find("td:eq(4)").text(); // get current row 3rd TD
            //  FORM PENCATATAN JURNAL TRANSAKSI 
            if(col5=='D'){
              document.getElementById("idKodePerkcatat").value=col1;
              document.getElementById("idNamaPerkcatat").value=col2;
              }else{
                alert("HARUS TYPE CABANG BUKAN INDUK");
              }
          });
          // Fungsi menampilkan Data Perkiraan di Tabel Modal jika di KLIK akan terinput ke Textbox form Pencatatan Perkiraan
    $("#idunit").on('click','#klik',function(){
     // get the current row
     var currentRow=$(this).closest("tr"); 
     var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
     var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD

     document.getElementById("editkdunit").value=col1;
     document.getElementById("editnmunit").value=col2;
     document.getElementById("addkdunit").value=col1;
     document.getElementById("addnmunit").value=col2;

      });
      // Update KDO 
      $('#modal-edit-kdo').on('show.bs.modal', function(e) {
        
        var Id = $(e.relatedTarget).data('id');
        var Region = $(e.relatedTarget).data('region');
        var Area = $(e.relatedTarget).data('area');
        var Kode_unit = $(e.relatedTarget).data('kode_unit');
        var Nama_unit = $(e.relatedTarget).data('nama_unit').replace(/_/g," ");
        var Jumlah_kdo = $(e.relatedTarget).data('jumlah_kdo');
        var Kdo_aktif = $(e.relatedTarget).data('kdo_aktif');
        var Kdo_rusak = $(e.relatedTarget).data('kdo_rusak');
        var Kdo_jt_lelang = $(e.relatedTarget).data('kdo_jt_lelang');
        var Kdo_hilang = $(e.relatedTarget).data('kdo_hilang');
        var Jml_sdm_bisnis = $(e.relatedTarget).data('jml_sdm_bisnis');
        var Jml_std_kdo = $(e.relatedTarget).data('jml_std_kdo');
        var Gap_kdo = $(e.relatedTarget).data('gap_kdo');
        
        if($(e.relatedTarget).data('keterangan')==null)
        {
          var Keterangan = "";
        } else if($(e.relatedTarget).data('keterangan')!==null)
        {
          var Keterangan = $(e.relatedTarget).data('keterangan').replace(/_/g," ");
        }

        $(e.currentTarget).find('input[name="id"]').val(Id);
        $('#idregion').text(Region);
        $('#idarea').text(Area);
        $(e.currentTarget).find('input[name="kode_unit"]').val(Kode_unit);
        $(e.currentTarget).find('input[name="nama_unit"]').val(Nama_unit);
        $(e.currentTarget).find('input[name="jumlah_kdo"]').val(Jumlah_kdo);
        $(e.currentTarget).find('input[name="kdo_aktif"]').val(Kdo_aktif);
        $(e.currentTarget).find('input[name="kdo_rusak"]').val(Kdo_rusak);
        $(e.currentTarget).find('input[name="kdo_jt_lelang"]').val(Kdo_jt_lelang);
        $(e.currentTarget).find('input[name="kdo_hilang"]').val(Kdo_hilang);
        $(e.currentTarget).find('input[name="jml_sdm_bisnis"]').val(Jml_sdm_bisnis);
        $(e.currentTarget).find('input[name="jml_std_kdo"]').val(Jml_std_kdo);
        $(e.currentTarget).find('textarea[name="keterangan"]').val(Keterangan);        
    });

    // UPDATE PKU
    $('#modal-update-pku').on('show.bs.modal', function(e) {
        var Id = $(e.relatedTarget).data('id');
        var Pic_id = $(e.relatedTarget).data('pic_id');
        var Nama = $(e.relatedTarget).data('nama');
        var Maya_mkr_target = $(e.relatedTarget).data('maya_mkr_target');
        var Maya_mkr_realisasi = $(e.relatedTarget).data('maya_mkr_realisasi');
        var Maya_ulm_target = $(e.relatedTarget).data('maya_ulm_target');
        var Maya_ulm_realisasi = $(e.relatedTarget).data('maya_ulm_realisasi');
        var Wulan_target = $(e.relatedTarget).data('wulan_target');
        var Wulan_realisasi = $(e.relatedTarget).data('wulan_realisasi');
        var Pameran_target = $(e.relatedTarget).data('pameran_target');
        var Pameran_realisasi = $(e.relatedTarget).data('pameran_realisasi');

        $(e.currentTarget).find('input[name="id"]').val(Id);
        $('#idpic').text(Nama);
        $('#idpic').val(Pic_id);
        $(e.currentTarget).find('input[name="mba_maya_mekaar_target"]').val(Maya_mkr_target);
$(e.currentTarget).find('input[name="mba_maya_mekaar_realisasi"]').val(Maya_mkr_realisasi);
        $(e.currentTarget).find('input[name="mba_maya_ulamm_target"]').val(Maya_ulm_target);
    $(e.currentTarget).find('input[name="mba_maya_ulamm_realisasi"]').val(Maya_ulm_realisasi);
        $(e.currentTarget).find('input[name="kak_wulan_mekaar_target"]').val(Wulan_target);
        $(e.currentTarget).find('input[name="kak_wulan_mekaar_realisasi"]').val(Wulan_realisasi);
        $(e.currentTarget).find('input[name="pameran_target"]').val(Pameran_target);
      $(e.currentTarget).find('input[name="pameran_realisasi"]').val(Pameran_realisasi);
    });

    // UPDATE SDM MEKAAR
    $('#modal-update-sdmmekaar').on('show.bs.modal', function(e) {

      // alert($(e.relatedTarget).data('nama_unit').replace("_"," "));
        var Id = $(e.relatedTarget).data('id');
        var Kode_unit = $(e.relatedTarget).data('kode_unit');
        // menghilangkan char _ ganti ke spasi
        var Nama_unit = $(e.relatedTarget).data('nama_unit').replace(/_/g," ");
        var Noa_nasabah = $(e.relatedTarget).data('noa_nasabah');
        var Kum = $(e.relatedTarget).data('kum');
        var Sao_standard = $(e.relatedTarget).data('sao_standard');
        var Sao_realisasi = $(e.relatedTarget).data('sao_realisasi');
        var Ao_standard = $(e.relatedTarget).data('ao_standard');
        var Ao_realisasi = $(e.relatedTarget).data('ao_realisasi');
        var Fao_standard = $(e.relatedTarget).data('fao_standard');
        var Fao_realisasi = $(e.relatedTarget).data('fao_realisasi');

        $('#idpic').text(Nama_unit);
        $('#idpic').val(Kode_unit);
        $(e.currentTarget).find('input[name="id"]').val(Id);
        $(e.currentTarget).find('input[name="kode_unit"]').val(Kode_unit);
        $(e.currentTarget).find('input[name="noa_nasabah"]').val(Noa_nasabah);
        $(e.currentTarget).find('input[name="kum"]').val(Kum);
        $(e.currentTarget).find('input[name="Sao_standard"]').val(Sao_standard);
        $(e.currentTarget).find('input[name="Sao_realisasi"]').val(Sao_realisasi);
        $(e.currentTarget).find('input[name="ao_standard"]').val(Ao_standard);
        $(e.currentTarget).find('input[name="ao_realisasi"]').val(Ao_realisasi);
        $(e.currentTarget).find('input[name="fao_standard"]').val(Fao_standard);
      $(e.currentTarget).find('input[name="fao_realisasi"]').val(Fao_realisasi);
    });
        // UPDATE SDM ULAMM
        $('#modal-update-sdmulamm').on('show.bs.modal', function(e) {
              // alert($(e.relatedTarget).data('kode_unit'));
              // alert($(e.relatedTarget).data('nama_unit').replace("_"," "));
              var Id = $(e.relatedTarget).data('id');
              var Kode_unit = $(e.relatedTarget).data('kode_unit');
              var Nama_unit = $(e.relatedTarget).data('nama_unit').replace("_"," ");
              var Kuu = $(e.relatedTarget).data('kuu');
              var Aom = $(e.relatedTarget).data('aom');
              var Kam = $(e.relatedTarget).data('kam');
              var Aom_pantas = $(e.relatedTarget).data('aom_pantas');

              $('#idpic').text(Nama_unit);
              $('#idpic').val(Kode_unit);
              $(e.currentTarget).find('input[name="kode_unit"]').val(Kode_unit);
              $(e.currentTarget).find('input[name="id"]').val(Id);
              $(e.currentTarget).find('input[name="kuu"]').val(Kuu);
              $(e.currentTarget).find('input[name="aom"]').val(Aom);
              $(e.currentTarget).find('input[name="kom"]').val(Kam);
              $(e.currentTarget).find('input[name="aom_pantas"]').val(Aom_pantas);
              });
          });

          // EDIT PC/LAPTOP
      $('#modal-edit-pclaptop').on('show.bs.modal', function(e) {

            var Id = $(e.relatedTarget).data('id');
            var Id_region = $(e.relatedTarget).data('id_region');
            var Region = $(e.relatedTarget).data('nama_region').replace(/_/g," ");
            var Id_area = $(e.relatedTarget).data('id_area');
            var Nama_area = $(e.relatedTarget).data('nama_area').replace(/_/g," ");
            var Kode_unit = $(e.relatedTarget).data('kode_unit');
        // menghilangkan char _ ganti ke spasi
        var Nama_unit = $(e.relatedTarget).data('nama_unit').replace(/_/g," ");
            var Jumlah_laptop_pc = $(e.relatedTarget).data('jumlah_laptop_pc');
            var Laptop_pc_aktif = $(e.relatedTarget).data('laptop_pc_aktif');
            var Laptop_pc_rusak = $(e.relatedTarget).data('laptop_pc_rusak');
            var Laptop_pc_jt_lelang = $(e.relatedTarget).data('laptop_pc_jt_lelang');
            var Laptop_pc_hilang = $(e.relatedTarget).data('laptop_pc_hilang');
            var Jml_fao = $(e.relatedTarget).data('jml_fao');
            var Jml_std_laptop = $(e.relatedTarget).data('jml_std_laptop');
            if($(e.relatedTarget).data('keterangan').replace(/_/g," ")==null)
            {
              var Keterangan="";  
            }else if($(e.relatedTarget).data('keterangan').replace(/_/g," ")!=null)
            {
              var Keterangan = $(e.relatedTarget).data('keterangan').replace(/_/g," ");
            }

            $(e.currentTarget).find('input[name="id"]').val(Id);
            $('#idregion').val(Id_region);
            $('#idregion').text(Region);
            $('#idarea').val(Id_area);
            $('#idarea').text(Nama_area);
            $('#idpic').text(Nama_unit);
            $('#idpic').val(Kode_unit);

            $(e.currentTarget).find('input[name="namaregion"]').val(Id_region);
            // $(e.currentTarget).find('input[name="nama_unit"]').val(Nama_unit);
        $(e.currentTarget).find('input[name="jumlah_laptop_pc"]').val(Jumlah_laptop_pc);
          $(e.currentTarget).find('input[name="laptop_pc_aktif"]').val(Laptop_pc_aktif);
          $(e.currentTarget).find('input[name="laptop_pc_rusak"]').val(Laptop_pc_rusak);
  $(e.currentTarget).find('input[name="laptop_pc_jt_lelang"]').val(Laptop_pc_jt_lelang);
        $(e.currentTarget).find('input[name="laptop_pc_hilang"]').val(Laptop_pc_hilang);
            $(e.currentTarget).find('input[name="jml_fao"]').val(Jml_fao);
            $(e.currentTarget).find('input[name="jml_std_laptop"]').val(Jml_std_laptop);
          $(e.currentTarget).find('textarea[name="keterangan"]').val(Keterangan);        
      });

      // UPDATE FORM JMT - SLR 
      $('#modal-update-jmt').on('show.bs.modal', function(e) {
          var Id = $(e.relatedTarget).data('id');
          var Nama = $(e.relatedTarget).data('nama').replace(/_/g," ");
          var Targets = $(e.relatedTarget).data('targets');
          var Realisasi = $(e.relatedTarget).data('realisasi');
          $(e.currentTarget).find('input[name="id"]').val(Id);
          $(e.currentTarget).find('input[name="nama"]').val(Nama);
          $(e.currentTarget).find('input[name="target"]').val(Targets);
          $(e.currentTarget).find('input[name="realisasi"]').val(Realisasi);
          });

          $('#modal-update-jmtins').on('show.bs.modal', function(e) {

              var Id = $(e.relatedTarget).data('id');
              var Jenis_kegiatan = $(e.relatedTarget).data('jenis_kegiatan').replace(/_/g," ");
              var Tgl_kegiatan = $(e.relatedTarget).data('tgl_kegiatan');
              var Jml_peserta = $(e.relatedTarget).data('jml_peserta');
              if($(e.relatedTarget).data('keterangan').replace(/_/g," ")==null)
              {
                var Keterangan = "";
              }else if($(e.relatedTarget).data('keterangan').replace(/_/g," ")!=null)
              {
                var Keterangan = $(e.relatedTarget).data('keterangan').replace(/_/g," ");
              }

              $(e.currentTarget).find('input[name="id"]').val(Id);
$(e.currentTarget).find('input[name="jenis_kegiatan_edit"]').val(Jenis_kegiatan);
              $(e.currentTarget).find('input[name="tgl_kegiatan_edit"]').val(Tgl_kegiatan);
              $(e.currentTarget).find('input[name="jml_peserta_edit"]').val(Jml_peserta);
            $(e.currentTarget).find('textarea[name="keterangan_edit"]').val(Keterangan);        
          });



</script>
<script>
  // Fungsi Membuat FORMAT RUPIAH pada INPUTAN BOX
  var rupiah = document.getElementById("inputjmlsaldoblokir");
  var rupiahplf = document.getElementById("plafondidlabel");
  var rupiahouts = document.getElementById("outstandingidlabel");

  rupiah.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, "Rp. ");
  });
  rupiahplf.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiahplf.value = formatRupiah(this.value, "Rp. ");
  });
  rupiahouts.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiahouts.value = formatRupiah(this.value, "Rp. ");
  });

  

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
var number_string = angka.replace(/[^,\d]/g, "").toString(),
  split = number_string.split(","),
  sisa = split[0].length % 3,
  rupiahh = split[0].substr(0, sisa),
  ribuan = split[0].substr(sisa).match(/\d{3}/gi);

// tambahkan titik jika yang di input sudah menjadi angka ribuan
if (ribuan) {
  separator = sisa ? "." : "";
  rupiahh += separator + ribuan.join(".");
}

rupiahh = split[1] != undefined ? rupiahh + "," + split[1] : rupiahh;
return prefix == undefined ? rupiahh : rupiahh ? "Rp. " + rupiahh : "";
}

  function MyFunct(bEnable,txtId1,txtId2,txtId3){
    document.getElementById(txtId1).readOnly=!bEnable;
    document.getElementById(txtId2).readOnly=!bEnable;
    document.getElementById(txtId3).readOnly=bEnable;
  }
  function MyFunctDisDate(bEnable,txtId1){
      document.getElementById(txtId1).readOnly=bEnable;
    }

  function MyUpper() {
    document.getElementById('hrpbesar').value.toUpperCase();
  }
</script>

</body>
</html>
