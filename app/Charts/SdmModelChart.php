<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
Use Illuminate\Support\Facades\DB;
class SdmModelChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        $rs = DB::select('SELECT SUM(sao_realisasi)/SUM(sao_standard)*100 as sao_sby,SUM(ao_realisasi)/SUM(ao_standard)*100 as ao_sby,sum(fao_realisasi)/sum(fao_standard)*100 as fao_sby  FROM `sdmmekaars`');
        $x=[];
        foreach($rs as $value)
        {
            // $x[]=$key;
            $x[]=round($value->sao_sby);
            $x[]=round($value->ao_sby);
            $x[]=round($value->fao_sby);
        }
        // dd($x);
        return $this->chart->pieChart()
        ->setTitle('Perbandingan Jumlah Realisasi/Standar(%)')
        ->setSubtitle('Season 2023')
        ->addData($x)
        ->setLabels(['Persentase SAO', 'Persentase AO', 'Persentase FAO']);

    }
}