<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Logo;
use App\Jmttable;
use App\Charts\JmtModelChart;
use App\Insidentiljmt;

class JmtController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function bo_jm_de_showformentrymainjmt()
    {
        $users = User::all();
        $logos = Logo::all();
        $result = Jmttable::all();
        return view('jmt.frmentryjmt',['users' =>$users, 'logos' =>$logos,'result'=>$result,'msgstatus'=>'']);
    }
    // Update JMT input
    public function bo_pk_de_updatemainjmt(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
        ]);
        Jmttable::where('id',$request->id)
                ->update([
                    'nama'=>$request->nama,
                    'target'=>$request->target,
                    'realisasi'=>$request->realisasi
                ]);
        return redirect()->route('jmtform')->with('alert', 'success diupdate');

    }
    // Simpan Data Add JMT kegiatan Utama
    public function bo_jm_de_addmainjmt(Request $request)
    {
        $this->validate($request,[
            "nama" => "required",
            "target" => "required",
            "realisasi" => "required"
        ]);
        $rs = new Jmttable();
        $rs->nama = $request->nama;
        $rs->target = $request->target;
        $rs->realisasi = $request->realisasi;
        $rs->save();
        return redirect()->route('jmtform')->with('alert', 'Sukses Menambahkan Data');
    }
    // Hapus data JMT MAIN
    public function bo_jm_del_jmtmaindata(Request $request)
    {
        Jmttable::where('id', $request->id)->delete();
        return redirect()->route('jmtform')->with('alert', 'Id No: '.$request->id.' Berhasil Dihapus');
    }
    // Chart JMT
    public function bo_jm_cr_jmt(JmtModelChart $chart)
    {   
        return view('chart.rptchartpku',['chart'=>$chart->build()]);
    }
    // show form kegiatan insindentil
    public function bo_jm_de_showformentryinsijmt()
    {
        $users = User::all();
        $logos = Logo::all();
        $result = Insidentiljmt::all();
        return view('jmt.frmentryjmtinsidentil',['users' =>$users, 'logos' =>$logos,'result'=>$result,'msgstatus'=>'']);
    }
    // Add JMT Insidentil
    public function bo_jm_de_addjmtins(Request $request)
    {
        // dd(date("Y-m-d",strtotime($request->tgl_kegiatan)));
        $this->validate($request,[
            'jenis_kegiatan'=>'required',
            'tgl_kegiatan'=>'required',
            'jml_peserta'=>'required',
            'keterangan'=>'required'
        ]);
        $simpan = new Insidentiljmt();
        $simpan->jenis_kegiatan = $request->jenis_kegiatan;
        $simpan->tgl_kegiatan = $request->tgl_kegiatan;
        $simpan->jml_peserta = $request->jml_peserta;
        $simpan->keterangan = $request->keterangan;
        $simpan->save();
        return redirect()->route('entryinsidentil')->with('alert','Data Berhasil di Simpan');

    }
}
