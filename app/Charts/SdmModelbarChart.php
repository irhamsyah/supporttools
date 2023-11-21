<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;
class SdmModelbarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        $rs = DB::select("SELECT SUM(sao_realisasi) as sao_real,SUM(sao_standard) as sao_std,SUM(ao_realisasi) as ao_real,SUM(ao_standard)*100 as ao_std,sum(fao_realisasi) as fao_real,sum(fao_standard) as fao_std FROM `sdmmekaars`");
        //  dd($rs);
        $nama =['SAO-AO-FAO'];
        $sao_real=[];
        $sao_std=[];
        $ao_real=[];
        $ao_std=[];
        $fao_real=[];
        $fao_std=[];
        $no=1;
        foreach ($rs as $value)
        {
                $sao_real[] = $value->sao_real;
                $sao_std[] = $value->sao_std;
                $ao_real[] = $value->ao_real;
                $ao_std[] = $value->ao_std;
                $fao_real[] =$value->fao_real;
                $fao_std[]=$value->fao_std;
        
        }
        // dd($fao_std);
        return $this->chart->barChart()
        ->setTitle('Target vs Realisasi.')
        ->setSubtitle('Laporan buat MSU/PINCA')
        ->addData('Target SAO', $sao_std)
        ->addData('Realisasi SAO', $sao_real)
        ->addData('Target AO', $ao_std)
        ->addData('Realisasi AO', $ao_real)
        ->addData('Target FAO', $fao_std)
        ->addData('Realisasi FAO', $fao_real)
        ->setXAxis($nama);
    }
}