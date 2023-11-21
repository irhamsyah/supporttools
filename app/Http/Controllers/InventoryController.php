<?php

namespace App\Http\Controllers;

use App\Area;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Logo;
Use App\Inventory;
Use App\Unit;
Use App\Region;
use App\Itppi;
Use App\Exports\ReportKdoExport;
Use App\Exports\ReportLaptopExport;
Use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bo_kd_de_showformentrykdo()
    {
        $logos = Logo::all();
        $users = User::all();
        $inventory = Inventory::with('unit')->get();
        $unit = Unit::all();
        $region = Region::all();
        $area = Area::all();

        return view('ppi.formentrykdo',['users' =>$users,'logos' =>$logos,'daftar' =>$inventory,'unit'=>$unit,'region'=>$region,'area'=>$area,'msgstatus' =>'']);
    }
    // Update KDO
    public function bo_kd_de_updatekdo(Request $request)
    {
        $this->validate($request,[
            'jml_sdm_bisnis'=>'required',
            'jml_std_kdo'=>'required'
        ]);
        if(strlen($request->nama_unit)==7){
            Inventory::where('id',$request->id)->update(
                [
                    'jumlah_kdo'=>$request->jumlah_kdo,
                    'kdo_aktif'=>$request->kdo_aktif,
                    'kdo_rusak'=>$request->kdo_rusak,
                    'kdo_jt_lelang'=>$request->kdo_jt_lelang,
                    'kdo_hilang'=>$request->kdo_hilang,
                    'jml_sdm_bisnis'=>$request->jml_sdm_bisnis,
                    'jml_std_kdo'=>$request->jml_std_kdo,
                    'gap_kdo'=>($request->kdo_aktif-$request->jml_std_kdo),
                    'keterangan'=>$request->keterangan
                ]
            );
        }else{
            Inventory::where('id',$request->id)->update(
                [
                    'kode_unit'=>$request->kode_unit,
                    'nama_unit'=>$request->nama_unit,
                    'jumlah_kdo'=>$request->jumlah_kdo,
                    'kdo_aktif'=>$request->kdo_aktif,
                    'kdo_rusak'=>$request->kdo_rusak,
                    'kdo_jt_lelang'=>$request->kdo_jt_lelang,
                    'kdo_hilang'=>$request->kdo_hilang,
                    'jml_sdm_bisnis'=>$request->jml_sdm_bisnis,
                    'jml_std_kdo'=>$request->jml_std_kdo,
                    'gap_kdo'=>($request->kdo_aktif-$request->jml_std_kdo),
                    'keterangan'=>$request->keterangan
                ]
            );
        }
        return redirect()->route('showformentrykdo')->with('alert','UPDATE DATA KDO BERHASIL');
    }
    // Add KDO
    public function bo_kd_de_addkdo(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'region'=>'required',
            'area' => 'required',
            'kode_unit' => 'required',
            'nama_unit' => 'required',
            'jumlah_kdo' => 'required',
            'kdo_aktif' => 'required',
            'kdo_rusak' => 'required',
            'kdo_jt_lelang' => 'required',
            'kdo_hilang' => 'required',
            'jml_sdm_bisnis' => 'required',
            'jml_std_kdo' => 'required'
        ]);
        $idregion = Region::where('id',$request->region)->get();
        $idarea = Area::where('id',$request->area)->get();
        // dd($idarea[0]->nama_area);
        $simpan = new Inventory();
        $simpan->cabang = 'PNM Surabaya';
        $simpan->region = $idregion[0]->nama_region;
        $simpan->area = $idarea[0]->nama_area;
        $simpan->kode_unit = $request->kode_unit;
        $simpan->nama_unit = $request->nama_unit;
        $simpan->jumlah_kdo = $request->jumlah_kdo;
        $simpan->kdo_aktif = $request->kdo_aktif;
        $simpan->kdo_rusak = $request->kdo_rusak;
        $simpan->kdo_jt_lelang = $request->kdo_jt_lelang;
        $simpan->kdo_hilang = $request->kdo_hilang;
        $simpan->kdo_jt_lelang = $request->kdo_jt_lelang;
        $simpan->jml_sdm_bisnis = $request->jml_sdm_bisnis;
        $simpan->jml_std_kdo = $request->jml_std_kdo;
        $simpan->gap_kdo = ($request->kdo_aktif-$request->jml_std_kdo);
        $simpan->keterangan = $request->keterangan;
        $simpan->save();
        return redirect()->route('showformentrykdo')->with('alert','TAMBAH DATA KDO BERHASIL');
    }
    // del kdo
    public function bo_kd_de_delkdo(Request $request)
    {
        $this->validate($request,[
            'id' => $request->id
        ]);
        Inventory::where('id', $request->id)->delete();
        return redirect()->route('showformentrykdo')->with('alert','DELET DATA KDO BERHASIL');

    }
    // Show form PPI IT Entry PC
    public function bo_kd_de_showformentrypc() 
    {
        $logos = Logo::all();
        $users = User::all();
        $area = Area::all();

        $inventory = Itppi::with(['unit','region','area'])->get();
        $unit = Unit::all();
        $region = Region::all();
        return view('ppi.formentryppiit',['users' =>$users,'logos' =>$logos,'unit'=>$unit,'region'=>$region,'area'=>$area,'daftar'=>$inventory,'msgstatus' =>'']);
    }
    // Update data pc/laptop ITPPI
    public function bo_it_de_updatepclaptop(Request $request)
    {   
        // dd($request);
        $this->validate($request,
        [
            "id" => "required",
        ]);
        if($request->namaregion==$request->region){
            Itppi::where('id',$request->id)
            ->update(
                [
                    'id_area'=>$request->id_area,
                    'kode_unit' => $request->kode_unit,
                    'jumlah_laptop_pc' => $request->jumlah_laptop_pc,
                    'laptop_pc_aktif' => $request->laptop_pc_aktif,
                    'laptop_pc_rusak' => $request->laptop_pc_rusak,
                    'laptop_pc_jt_lelang' => $request->laptop_pc_jt_lelang,
                    'laptop_pc_hilang' => $request->laptop_pc_hilang,
                    'jml_fao' => $request->jml_fao,
                    'jml_std_laptop' => $request->jml_std_laptop,
                    'gap_laptop' => ($request->laptop_pc_aktif-$request->jml_std_laptop),
                    'keterangan' => $request->keterangan
                ]
            );
        }else{
            Itppi::where('id',$request->id)
            ->update(
                [
                    'id_region'=>$request->region,
                    'id_area'=>$request->id_area,
                    'kode_unit' => $request->kode_unit,
                    'jumlah_laptop_pc' => $request->jumlah_laptop_pc,
                    'laptop_pc_aktif' => $request->laptop_pc_aktif,
                    'laptop_pc_rusak' => $request->laptop_pc_rusak,
                    'laptop_pc_jt_lelang' => $request->laptop_pc_jt_lelang,
                    'laptop_pc_hilang' => $request->laptop_pc_hilang,
                    'jml_fao' => $request->jml_fao,
                    'jml_std_laptop' => $request->jml_std_laptop,
                    'gap_laptop' => ($request->laptop_pc_aktif-$request->jml_std_laptop),
                    'keterangan' => $request->keterangan
                ]
            );
        }
        return redirect()->route('showformentrydatapc')->with('alert','Data '.$request->kode_unit.' Berhasil di Update');
    }
    // Tambah data laptop /PC
    public function bo_it_de_addpclaptop(Request $request)
    {
        $this->validate($request,[
            "id_region" => "required",
            "id_area" => "required",
            "kode_unit" => "required",
            "jumlah_laptop_pc" => "required",
            "laptop_pc_aktif" => "required",
            "laptop_pc_rusak" => "required",
            "laptop_pc_jt_lelang" => "required",
            "laptop_pc_hilang" => "required",
            "jml_fao" => "required",
            "jml_std_laptop" => "required"
        ]);
        $simpan = new Itppi();
        $simpan->id_region = $request->id_region;
        $simpan->id_area = $request->id_area;
        $simpan->kode_unit = $request->kode_unit;
        $simpan->jumlah_laptop_pc = $request->jumlah_laptop_pc;
        $simpan->laptop_pc_aktif = $request->laptop_pc_aktif;
        $simpan->laptop_pc_rusak = $request->laptop_pc_rusak;
        $simpan->laptop_pc_jt_lelang = $request->laptop_pc_jt_lelang;
        $simpan->laptop_pc_hilang = $request->laptop_pc_hilang;
        $simpan->jml_fao = $request->jml_fao;
        $simpan->jml_std_laptop = $request->jml_std_laptop;
        $simpan->save();
        return redirect()->route('showformentrydatapc')->with('alert','Data '.$request->kode_unit.' Berhasil di Tambahkan');
    }
    // Delete data IT/PPI Laptop pc
    public function bo_del_pclaptop(Request $request) 
    {
        $this->validate($request,[
            'id'=>'required'
        ]);
        Itppi::where('id',$request->id)->delete();
        return redirect()->route('showformentrydatapc')->with('alert','Data '.$request->kode_unit.' Berhasil di Delete');
    }
    // Report KDO PPI
    public function bo_lp_ppi_kdo() 
    {
        $daftar = Inventory::all();
        return view('pdf.ppi.rptppikdo',['daftar' => $daftar]);
    }
    // export excel kdo
    public function export_to_excel_kdo()
    {
        $nominatif = DB::select('select * from inventory');
        return (new ReportKdoExport($nominatif))->download('exportkdo.xlsx');
    }
    // Report PC IT
    public function bo_lp_ppi_pclaptop() 
    {
        $daftar = Itppi::with(['region','area','unit'])->get();
        return view('pdf.ppi.rptppilaptoppc',['daftar'=>$daftar]);
    }
    // Export excel Laptop PC
    public function export_to_excel_laptoppc()
    {
        $daftar = DB::select('select *,regions.nama_region,areas.nama_area,unit.nama_unit from ((itppis inner join areas on itppis.id_area=areas.id) inner join regions on itppis.id_region=regions.id) inner join unit on itppis.kode_unit=unit.kode_unit');
        // dd($daftar);
        return (new ReportLaptopExport($daftar))->download('exportpclaptop.xlsx');
    }
}
