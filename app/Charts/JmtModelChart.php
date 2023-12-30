<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
Use App\Jmttable;
class JmtModelChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        $rs = Jmttable::all();
        // dd($rs);
        $nama =[];
        $target=[];
        $realisasi=[];
        foreach ($rs as $value)
        {
            $nama[] =$value->nama;
            $target[] = $value->target;
            $realisasi[] = $value->realisasi;
    
        }
        return $this->chart->barChart()
        ->setTitle('Target vs Realisasi(JMT)')
        ->setSubtitle('Laporan buat MSU/PINCA')
        ->addData('Target JMT', $target)
        ->addData('Realisasi JMT', $realisasi)
        ->setXAxis($nama);
    }
}