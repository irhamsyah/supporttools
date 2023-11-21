<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Logo;
Use App\Sdmmekaar;
Use App\Sdmulamm;
Use App\Unit;
Use App\Unitulamm;
Use App\Charts\SdmModelChart;
Use App\Charts\SdmModelbarChart;
use App\Exports\ReportSdmmekaarExport;
Use App\Exports\ReportSdmulammExport;
Use Illuminate\Support\Facades\DB;
class SdmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function bo_sd_de_showformentrymekaar()
    {
        $logos = Logo::all();
        $users = User::all();
        $sdmmkr = Sdmmekaar::with('unit')->get();
        $unit = Unit::all();
        return view('sdm.frmentrysdmmekaar',['logos' =>$logos, 'users' =>$users,'sdmmkr'=>$sdmmkr,'unit'=>$unit]);
    }
    // update SDMmekaar
    public function bo_sd_de_updsdmmekaar(Request $request)
    {
        $this->validate($request,
        [
            "kode_unit" => "required",
            "pic_id" => "required",
            "noa_nasabah" => "required",
            "kum" => "required",
            "sao_standard" => "required",
            "sao_realisasi" => "required",
            "ao_standard" => "required",
            "ao_realisasi" => "required",
            "fao_standard" => "required",
            "fao_realisasi" => "required"      
        ]);
        if($request->kode_unit==$request->pic_id)
        {
            Sdmmekaar::where("id",$request->id)
                        ->update([
                            "noa_nasabah"=>$request->noa_nasabah,
                            "kum" => $request->kum,
                            "sao_standard" => $request->sao_standard,
                            "sao_realisasi" => $request->sao_realisasi,
                            "ao_standard" => $request->ao_standard,
                            "ao_realisasi" => $request->ao_realisasi,
                            "fao_standard" => $request->fao_standard,
                            "fao_realisasi" => $request->fao_realisasi      
                        ]);
        }else{
            Sdmmekaar::where("id",$request->id)
                        ->update([
                            "kode_unit"=>$request->pic_id,
                            "noa_nasabah"=>$request->noa_nasabah,
                            "kum" => $request->kum,
                            "sao_standard" => $request->sao_standard,
                            "sao_realisasi" => $request->sao_realisasi,
                            "ao_standard" => $request->ao_standard,
                            "ao_realisasi" => $request->ao_realisasi,
                            "fao_standard" => $request->fao_standard,
                            "fao_realisasi" => $request->fao_realisasi      
                        ]);
        }
        return redirect()->route('showsdmmekaar')->with('success','Data '.$request->kode_unit.' Berhasil diUpdate');
    }
    // Add SDM Mekaar 
    public function bo_sd_de_addsdmmekaar(Request $request) 
    {
        $this->validate($request,
        [
            "kode_unit" => "required",
            "noa_nasabah" => "required",
            "kum" => "required",
            "sao_standard" => "required",
            "sao_realisasi" => "required",
            "ao_standard" => "required",
            "ao_realisasi" => "required",
            "fao_standard" => "required",
            "fao_realisasi" => "required"
        ]);
        $simpan = new Sdmmekaar();
        $simpan->kode_unit = $request->kode_unit;
        $simpan->noa_nasabah = $request->noa_nasabah;
        $simpan->kum = $request->kum;
        $simpan->sao_standard = $request->sao_standard;
        $simpan->sao_realisasi = $request->sao_realisasi;
        $simpan->ao_standard = $request->ao_standard;
        $simpan->ao_realisasi = $request->ao_realisasi;
        $simpan->fao_standard = $request->fao_standard;
        $simpan->fao_realisasi = $request->fao_realisasi;
        $simpan->save();
        return redirect()->route('showsdmmekaar')->with('success','Data '.$request->kode_unit.' Berhasil Ditambahkan');
    }
    // Hapus data SDM Mekaar
    public function bo_sd_del_sdmmekaar(Request $request)
    {
        Sdmmekaar::where('id', $request->id)->delete();
        return redirect()->route('showsdmmekaar')->with('success','Data '.$request->kode_unit.' Berhasil Dihapus');
    }
    // Show Form Entry/update/delete SDM ULaMM
    public function bo_sd_de_showformentryulamm()
    {
        $logos = Logo::all();
        $users = User::all();
        $unitulamm = Unitulamm::all();
        $sdmulamm = Sdmulamm::with('unitulamm')->get();

        return view('sdm.frmentrysdmulamm',['logos' =>$logos,'users'=>$users,'sdmulamm'=>$sdmulamm,'unitulamm'=>$unitulamm]);
    }
    // Update SDM ULaMM 
    public function bo_sd_de_updsdmulamm(Request $request)
    {
        $this->validate($request,
        [
            "id" => "required",
            "kode_unit" => "required",
            "pic_id" => "required",
            "kuu" => "required",
            "aom" => "required",
            "kam" => "required",
            "aom_pantas" => "required"
        ]);
        if($request->kode_unit==$request->pic_id)
        {
            Sdmulamm::where('id',$request->id)
            ->update([
                'kuu'=>$request->kuu,
                'aom'=>$request->aom,
                'kam'=>$request->kam,
                'aom_pantas'=>$request->aom_pantas
            ]);

        }else{
            Sdmulamm::where('id',$request->id)
            ->update([
                'kode_unit'=>$request->pic_id,
                'kuu'=>$request->kuu,
                'aom'=>$request->aom,
                'kam'=>$request->kam,
                'aom_pantas'=>$request->aom_pantas
            ]);
        }
        return redirect()->route('showsdmulamm')->with('alert','Data '.$request->kode_unit.' Sukses ');
    }
    // Add SDM ULaMM
    public function bo_sd_de_addsdmulamm(Request $request)
    {
        $this->validate($request,
        [
            "kode_unit" => "required",
            "kuu" => "required",
            "aom" => "required",
            "kam" => "required",
            "aom_pantas" => "required"
        ]);
        $simpan = new Sdmulamm();
        $simpan->kode_unit = $request->kode_unit;
        $simpan->kuu = $request->kuu;
        $simpan->aom = $request->aom;
        $simpan->kam = $request->kam;
        $simpan->aom_pantas = $request->aom_pantas;
        $simpan->save();
        return redirect()->route('showsdmulamm')->with('alert','Data '.$request->kode_unit.' Sukses Ditambahkan');
    }
    // Delete SDM ULaMM 
    public function bo_sd_del_sdmulamm(Request $request)
    {
        Sdmulamm::where('id',$request->id)->delete();
        return redirect()->route('showsdmulamm')->with('alert','Data '.$request->kode_unit.' Berhasil dihapus');

    }
    // Report SDM Mekaar
    public function bo_lp_sdm_mekaar()
    {
        $daftar = Sdmmekaar::with('unit')->get();
        return view('pdf.sdm.rptsdmmekaar',['daftar'=>$daftar]);
    }
    // Export ke Excel laporan SDM Mekaar
    public function export_to_excel_sdmmekaar()
    {
        $daftar = DB::select('select sdmmekaars.*,unit.nama_unit as nama_unit from sdmmekaars inner join unit on sdmmekaars.kode_unit=unit.kode_unit');
        return (new ReportSdmmekaarExport($daftar))->download('sdmmekaars.xlsx');
    }
    // Munculkan PIE CHART SDM MEKAAR
    public function bo_lp_sdm_chartmekaar(SdmModelChart $chart)
    {
        return view('chart.rptchartsdmmekaar',['chart'=>$chart->build()]);
    }
    // Munculkan BAR Chart SDM Mekaar
    public function bar_chart_sdm_mekaar(SdmModelbarChart $chart)
    {
        return view('chart.rptchartsdmmekaarbar',['chart'=>$chart->build()]);
    }
    // Report PDF Mekaar
    public function bo_lp_sdm_ulamm()
    {
        $daftar = Sdmulamm::with('unitulamm')->get();
        return view('pdf.sdm.rptsdmulamm',['daftar'=>$daftar]);
    }
    // EXPORT TO EXCEL
    public function export_to_excel_sdmulamm()
    {
        $daftar = Sdmulamm::with('unitulamm')->get()->toArray();
        // $daftar = DB::select('select sdmulamms.*,unitulamms.nama_unit as nama_unit from sdmulamms inner join unitulamms on sdmulamms.kode_unit=unitulamms.kode_unit');

        // dd($daftar);
        return (new ReportSdmulammExport($daftar))->download('sdmulamm.xlsx');
    }
}
