<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Logo;
Use App\Inventory;
Use App\Unit;
Use App\Region;
Use App\Area;


class InventoryController extends Controller
{
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
}
