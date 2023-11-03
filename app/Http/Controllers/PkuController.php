<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Logo;
Use App\Unit;
Use App\Pkudata;
Use App\Area;
use App\Pkuuser;

class PkuController extends Controller
{
    public function bo_kd_de_showformentrypku()
    {
        $logos = Logo::all();
        $users = User::all();
        $pkuser = Pkuuser::all();
        $rs = Pkudata::with('pkuuser')->get();
        return view('pku.frmentrypku',['users'=>$users, 'logos'=>$logos,'pkudt'=>$rs,'pkuser'=>$pkuser]);
    }
    // Add PKU data
    public function bo_pk_de_addpku(Request $request)
    {
        $this->validate($request,
        [
            "pic_id" => "required",
            "mba_maya_mekaar_target" => "required",
            "mba_maya_mekaar_realisasi" => "required",
            "mba_maya_ulamm_target" => "required",
            "mba_maya_ulamm_realisasi" => "required",
            "kak_wulan_mekaar_target" => "required",
            "kak_wulan_mekaar_realisasi" => "required",
            "pameran_target" => "required",
            "pameran_realisasi" => "required"
        ]);

        $simpan = new Pkudata();
        $simpan->pic_id = $request->pic_id;
        $simpan->mba_maya_mekaar_target=$request->mba_maya_mekaar_target;
        $simpan->mba_maya_mekaar_realisasi = $request->mba_maya_mekaar_realisasi;
        $simpan->mba_maya_ulamm_target=$request->mba_maya_ulamm_target;
        $simpan->mba_maya_ulamm_realisasi = $request->mba_maya_ulamm_realisasi; 
        $simpan->kak_wulan_mekaar_target = $request->kak_wulan_mekaar_target;
        $simpan->kak_wulan_mekaar_realisasi = $request->kak_wulan_mekaar_realisasi;
        $simpan->pameran_target = $request->pameran_target;
        $simpan->pameran_realisasi = $request->pameran_realisasi;
        $simpan->save();
        return redirect()->route('showformentrypku')->with('alert', 'Data berhasil ditambahkan');
    }
}
