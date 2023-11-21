<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
Use App\Pkudata;
class PkuModelChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        $rs = Pkudata::with('pkuuser')->get();
        // dd($rs);
        $nama =[];
        $target=[];
        $realisasi=[];
        $targetulm=[];
        $realisasiulm=[];
        $targetwln=[];
        $realisasiwln=[];
        $targetpmr=[];
        $realisasipmr=[];
        foreach ($rs as $value)
        {
            $nama[] =$value->pkuuser->nama;
            $target[] = $value->mba_maya_mekaar_target;
            $realisasi[] = $value->mba_maya_mekaar_realisasi;
            $targetulm[] = $value->mba_maya_ulamm_target;
            $realisasiulm[] = $value->mba_maya_ulamm_realisasi;
            $targetwln[] =$value->kak_wulan_mekaar_target;
            $realisasiwln[]=$value->kak_wulan_mekaar_realisasi;
            $targetpmr[] = $value->pameran_target;
            $realisasipmr[] = $value->pameran_realisasi;
    
        }
        return $this->chart->barChart()
        ->setTitle('Target vs Realisasi.')
        ->setSubtitle('Laporan buat MSU/PINCA')
        ->addData('Target mba maya mkr', $target)
        ->addData('Realisasi mba maya mkr', $realisasi)
        ->addData('Target mba maya ulm', $targetulm)
        ->addData('Realisasi mba maya ulm', $realisasiulm)
        ->addData('Target kak wulan', $targetwln)
        ->addData('Realisasi kak wulan', $realisasiwln)
        ->addData('Target pameran', $targetpmr)
        ->addData('Realisasi pameran', $realisasipmr)
        ->setXAxis($nama);
    }
}